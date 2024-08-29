<?php
session_start();
require 'DBManager.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $conexion->real_escape_string($_POST['correo']);
    $password = $conexion->real_escape_string($_POST['password']);

    $sql = "
        SELECT u.id, u.password, u.rol, u.imagen AS usuario_imagen, u.nombre_completo, u.puesto, u.direccion, u.telefono, u.correo, e.nombre AS empresa_nombre, e.imagen AS empresa_imagen
        FROM usuarios u
        JOIN empresas e ON u.empresa_id = e.id
        WHERE u.correo = ?
    ";

    $sentencia = $conexion->prepare($sql);
    $sentencia->bind_param("s", $correo);
    $sentencia->execute();
    $result = $sentencia->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['Nombre'] = $row['nombre_completo'];
            $_SESSION['usuario_id'] = $row['id'];
            $_SESSION['rol'] = $row['rol'];
            $_SESSION['usuario_imagen'] = $row['usuario_imagen'];
            $_SESSION['empresa_id'] = $row['empresa_id'];
            $_SESSION['empresa_nombre'] = $row['empresa_nombre'];
            $_SESSION['empresa_imagen'] = $row['empresa_imagen'];
            $_SESSION['puesto'] = $row['puesto'];
            $_SESSION['direccion'] = $row['direccion'];
            $_SESSION['telefono'] = $row['telefono'];
            $_SESSION['correo'] = $row['correo'];
            $_SESSION['login_exitoso'] = true; // login exitoso (esto no está en la base de datos, solo es para validar que el login fue exitoso)
            header("Location: /SC-502-Web-ClienteServidor/static/index.php");
            exit();
        } else {
            $error = "Contraseña incorrecta";
        }
    } else {
        $error = "Correo no encontrado";
    }
    $sentencia->close();
}

$conexion->close();
?>

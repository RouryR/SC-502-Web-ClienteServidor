<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = isset($_POST['correo']) ? $_POST['correo'] : null;
    $nombre_completo = isset($_POST['name']) ? $_POST['name'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $empresaid = isset($_POST['empresa']) ? $_POST['empresa'] : null;
    $puesto = isset($_POST['puesto']) ? $_POST['puesto'] : null;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : null;
    $rol = isset($_POST['rol']) ? $_POST['rol'] : null;
    $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : null;
 

    if (!$correo || !$nombre_completo || !$password||!$empresaid||!$puesto||!$telefono||!$direccion||!$rol||!$imagen){
        echo $correo . "<br>";
        echo $nombre_completo . "<br>";
        echo $password . "<br>";
        echo $empresaid. "<br>";
        echo $puesto . "<br>";
        echo $telefono . "<br>";
        echo $direccion . "<br>";
        echo $rol . "<br>";
        echo $imagen . "<br>";
        die("aqui el debug de creacion-------");
    }

    $query = "INSERT INTO usuarios (correo, nombre_completo, password, empresa_id, puesto,telefono,direccion,rol,imagen) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($sentencia = $conexion->prepare($query)) {
        $sentencia->bind_param("sssisssis", $correo, $nombre_completo, $password, $empresaid,$puesto,$telefono,$direccion,$rol,$imagen);

        if ($sentencia->execute()) {
            $id = $conexion->insert_id;
            header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Usuarios creado con éxito&numero=$id");
            exit();
        } else {
            echo "Error al crear el usuario: " . $sentencia->error;
        }
        $sentencia->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }
}

$conexion->close();
?>
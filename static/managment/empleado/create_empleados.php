<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_completo = isset($_POST['name']) ? $_POST['name'] : null;
    $correo = isset($_POST['email']) ? $_POST['email'] : null;
    $puesto = isset($_POST['puesto']) ? $_POST['puesto'] : null;
    $salario = isset($_POST['salario']) ? $_POST['salario'] : null;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
    $id_usuario = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : null;
 

    if (!$nombre_completo || !$correo || !$puesto||!$salario||!$telefono) {
        echo $nombre_completo . "<br>";
        echo $correo . "<br>";
        echo $puesto . "<br>";
        echo $salario . "<br>";
        echo $telefono . "<br>";
        echo $id_usuario . "<br>";
        die("aqui el debug de creacion-------");
    }

    $query = "INSERT INTO empleados (nombre_completo, correo, puesto, salario, telefono,id_usuario) 
              VALUES (?, ?, ?, ?, ?, ?)";

    if ($sentencia = $conexion->prepare($query)) {
        $sentencia->bind_param("sssdsi", $nombre_completo, $correo, $puesto, $salario,$telefono,$id_usuario);

        if ($sentencia->execute()) {
            $id_empleado = $conexion->insert_id;
            header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php?mensaje=Empleado creado con éxito&numero=$id_empleado");
            exit();
        } else {
            echo "Error al crear el empleado: " . $sentencia->error;
        }
        $sentencia->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }
}

$conexion->close();
?>
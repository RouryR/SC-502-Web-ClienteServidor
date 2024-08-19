<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = isset($_POST['name']) ? $_POST['name'] : null;
    $correo = isset($_POST['email']) ? $_POST['email'] : null;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
    $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : null;
 

    if (!$nombre || !$correo || !$telefono||!$imagen) {
        echo $nombre . "<br>";
        echo $correo . "<br>";
        echo $telefono . "<br>";
        echo $imagen . "<br>";
        die("aqui el debug de creacion-------");
    }

    $query = "INSERT INTO empresas (nombre, correo, telefono, imagen) 
              VALUES (?, ?, ?, ?)";

    if ($sentencia = $conexion->prepare($query)) {
        $sentencia->bind_param("ssss", $nombre, $correo, $telefono, $imagen);

        if ($sentencia->execute()) {
            $id = $conexion->insert_id;
            header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Empresas creado con éxito");
            exit();
        } else {
            echo "Error al crear la empresa: " . $sentencia->error;
        }
        $sentencia->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }
}

$conexion->close();
?>
<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = isset($_POST['subject']) ? $_POST['subject'] : null;
    $descripcion = isset($_POST['message']) ? $_POST['message'] : null;
    $id_usuario = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : null;
    $estado = 'Pendiente';

    if (!$titulo || !$descripcion || !$id_usuario) {
        echo $titulo . "<br>";
        echo $descripcion . "<br>";
        echo $id_usuario . "<br>";
        die("aqui elk debug de creacion-------");
    }

    $query = "INSERT INTO tiquetes_usuarios (titulo, descripcion, fecha_apertura, id_usuario, estado) 
              VALUES (?, ?, CURDATE(), ?, ?)";

    if ($sentencia = $conexion->prepare($query)) {
        $sentencia->bind_param("ssis", $titulo, $descripcion, $id_usuario, $estado);

        if ($sentencia->execute()) {
            $id_tiquete = $conexion->insert_id;
            header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/tiquetes/tiquetes.php?mensaje=Tiquete creado con éxito&numero=$id_tiquete");
            exit();
        } else {
            echo "Error al crear el tiquete: " . $sentencia->error;
        }
        $sentencia->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }
}

$conexion->close();
?>
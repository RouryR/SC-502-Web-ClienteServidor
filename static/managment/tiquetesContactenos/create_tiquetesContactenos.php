<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $asunto = isset($_POST['asunto']) ? $_POST['asunto'] : null;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : null;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
    $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : null;
    $detalles = isset($_POST['detalles']) ? $_POST['detalles'] : null;
    $revisado = false;

    if (!$nombre_completo || !$asunto || !$correo || !$telefono || !$detalles) {
        echo "Nombre completo: $nombre_completo<br>";
        echo "Asunto: $asunto<br>";
        echo "Correo: $correo<br>";
        echo "Teléfono: $telefono<br>";
        echo "Detalles: $detalles<br>";
        die("Todos los campos son obligatorios.");
    }

    $query = "INSERT INTO tiquetes_contactenos (nombre_completo, asunto, correo, telefono, revisado) 
              VALUES (?, ?, ?, ?, ?)";

    if ($sentencia = $conexion->prepare($query)) {
        $sentencia->bind_param("ssssi", $nombre_completo, $asunto, $correo, $telefono, $revisado);

        if ($sentencia->execute()) {
            $id_tiquete = $conexion->insert_id;
            header("Location: /SC-502-Web-ClienteServidor/static/routes/contactenos.php?mensaje=Tiquete creado con éxito&numero=$id_tiquete");
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
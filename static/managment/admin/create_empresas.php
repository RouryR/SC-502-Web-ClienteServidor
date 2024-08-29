<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = isset($_POST['name']) ? $_POST['name'] : null;
    $correo = isset($_POST['email']) ? $_POST['email'] : null;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
    $imagen = isset($_POST['imagen_url']) ? $_POST['imagen_url'] : null;

    if (isset($_FILES['imagen_file']) && $_FILES['imagen_file']['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['imagen_file']['tmp_name'];
        $name = basename($_FILES['imagen_file']['name']);
        $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/img/empresas/';
        $upload_file = $upload_dir . $name;

        if (move_uploaded_file($tmp_name, $upload_file)) {
            $imagen = '/SC-502-Web-ClienteServidor/static/img/empresas/' . $name;
        } else {
            die("Error al subir la imagen.");
        }
    }

    if (!$imagen && isset($_POST['imagen_url']) && filter_var($_POST['imagen_url'], FILTER_VALIDATE_URL)) {
        $imagen = $_POST['imagen_url'];
    }

    if (!$nombre || !$correo || !$telefono || !$imagen) {
        die("Faltan datos en el formulario.");
    }

    $query = "INSERT INTO empresas (nombre, correo, telefono, imagen) VALUES (?, ?, ?, ?)";

    if ($sentencia = $conexion->prepare($query)) {
        $sentencia->bind_param("ssss", $nombre, $correo, $telefono, $imagen);

        if ($sentencia->execute()) {
            $id = $conexion->insert_id;
            header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Empresa creada con éxito");
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

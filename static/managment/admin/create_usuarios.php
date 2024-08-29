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
    $rol = isset($_POST['rol']) ? (bool) $_POST['rol'] : null;

    $imagen = null;
    if (isset($_FILES['imagen_file']) && $_FILES['imagen_file']['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['imagen_file']['tmp_name'];
        $name = basename($_FILES['imagen_file']['name']);
        $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/img/perfiles/';
        $upload_file = $upload_dir . $name;

        if (move_uploaded_file($tmp_name, $upload_file)) {
            $imagen = '/SC-502-Web-ClienteServidor/static/img/perfiles/' . $name;
        } else {
            die("Error al subir la imagen.");
        }
    }
    if (!$imagen && isset($_POST['imagen_url']) && filter_var($_POST['imagen_url'], FILTER_VALIDATE_URL)) {
        $imagen = $_POST['imagen_url'];
    }

    if (!$correo || !$nombre_completo || !$password || !$empresaid || !$puesto || !$telefono || !$direccion || $rol === null || !$imagen) {
        die("Faltan datos en el formulario.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (correo, nombre_completo, password, empresa_id, puesto, telefono, direccion, rol, imagen) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($sentencia = $conexion->prepare($query)) {
        $rol = $rol ? 1 : 0;
        $sentencia->bind_param("sssisssis", $correo, $nombre_completo, $hashed_password, $empresaid, $puesto, $telefono, $direccion, $rol, $imagen);

        if ($sentencia->execute()) {
            $id = $conexion->insert_id;
            header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Usuario creado con éxito&numero=$id");
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
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';
session_start();

$id = $_POST['id'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$imagen = $_POST['imagen'];

if (empty($imagen)) {
    $query = "SELECT imagen FROM usuarios WHERE id = ?";
    $sentencia = $conexion->prepare($query);
    $sentencia->bind_param("i", $id);
    $sentencia->execute();
    $result = $sentencia->get_result();
    $usuario = $result->fetch_assoc();
    $imagen = $usuario['imagen'];
}

$query = "UPDATE usuarios SET correo = ?, telefono = ?, direccion = ?, imagen = ? WHERE id = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("ssssi", $correo, $telefono, $direccion, $imagen, $id);

if ($sentencia->execute()) {
    $_SESSION['mensaje'] = "Usuario actualizado con éxito";

    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Usuario actualizado correctamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al actualizar el Usuario");
}

$sentencia->close();
$conexion->close();
?>
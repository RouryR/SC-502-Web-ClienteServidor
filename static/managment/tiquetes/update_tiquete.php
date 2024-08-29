<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';
session_start();

$id_tiquete = $_POST['id_tiquete'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

$query = "UPDATE tiquetes_usuarios SET titulo = ?, descripcion = ? WHERE id_tiquete = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("ssi", $titulo, $descripcion, $id_tiquete);

if ($sentencia->execute()) {
    $_SESSION['mensaje'] = "Tiquete actualizado con éxito";
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/tiquetes/tiquetes.php?mensaje=Tiquete actualizado correctamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/tiquetes/tiquetes.php?mensaje=Error al actualizar el tiquete");
}

$sentencia->close();
$conexion->close();
?>

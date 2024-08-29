<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';
session_start();

$id_tiquete = $_POST['id_tiquete'];
$revisado = '1';

$query = "UPDATE tiquetes_contactenos SET revisado = ? WHERE id_tiquete = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("ii", $revisado, $id_tiquete);

if ($sentencia->execute()) {
    $_SESSION['mensaje'] = "Tiquete actualizado con éxito";
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Tiquete contestado correctamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al contestar el tiquete");
}

$sentencia->close();
$conexion->close();
?>
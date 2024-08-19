<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$tiquetes = [];

$userId = $_SESSION['usuario_id'];
$sql = "SELECT id_tiquete, titulo, fecha_apertura, fecha_cierre, respuesta_recibida, descripcion FROM tiquetes_usuarios WHERE id_usuario = ? AND estado = 'Completado'";
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $userId);
$sentencia->execute();
$result = $sentencia->get_result();

$tiquetes = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tiquetes[] = $row;
    }
}

$tiquetesPendientes = [];

$userId = $_SESSION['usuario_id'];
$sql = "SELECT id_tiquete, titulo, fecha_apertura, estado, descripcion FROM tiquetes_usuarios WHERE id_usuario = ? AND estado IN ('Pendiente', 'En revisión')";
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $userId);
$sentencia->execute();
$result = $sentencia->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tiquetesPendientes[] = $row;
    }
}
$sentencia->close();
$conexion->close();

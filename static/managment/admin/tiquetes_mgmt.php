<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$idTiquete = isset($_POST['id_tiquete']) ? intval($_POST['id_tiquete']) : null;

$sql = "SELECT t.id_tiquete, t.titulo, t.fecha_apertura, t.fecha_cierre, t.respuesta_recibida, t.descripcion, 
               u.nombre_completo AS nombre_usuario, u.imagen AS usuario_imagen, e.nombre AS nombre_empresa
        FROM tiquetes_usuarios t
        JOIN usuarios u ON t.id_usuario = u.id
        JOIN empresas e ON u.empresa_id = e.id
        WHERE t.estado = 'Completado'";

if ($idTiquete) {
    $sql .= " AND t.id_tiquete = ?";
}

$sentencia = $conexion->prepare($sql);
if ($idTiquete) {
    $sentencia->bind_param("i", $idTiquete);
}
$sentencia->execute();
$result = $sentencia->get_result();

$tiquetesCompletados = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tiquetesCompletados[] = $row;
    }
}

$sql = "SELECT t.id_tiquete, t.titulo, t.fecha_apertura, t.estado, t.descripcion, 
               u.nombre_completo AS nombre_usuario, e.nombre AS nombre_empresa
        FROM tiquetes_usuarios t
        JOIN usuarios u ON t.id_usuario = u.id
        JOIN empresas e ON u.empresa_id = e.id
        WHERE t.estado IN ('Pendiente', 'En revisión')";

if ($idTiquete) {
    $sql .= " AND t.id_tiquete = ?";
}

$sentencia = $conexion->prepare($sql);
if ($idTiquete) {
    $sentencia->bind_param("i", $idTiquete);
}
$sentencia->execute();
$result = $sentencia->get_result();

$tiquetesPendientes = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tiquetesPendientes[] = $row;
    }
}
$sentencia->close();
$conexion->close();


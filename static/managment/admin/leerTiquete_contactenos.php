<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$tiquetes_contactenos = [];
$search_id_completados = isset($_POST['search_id_completados']) ? $_POST['search_id_completados'] : '';
$search_id_pendientes = isset($_POST['search_id_pendientes']) ? $_POST['search_id_pendientes'] : '';

$sql = "SELECT id_tiquete, nombre_completo, asunto, correo, telefono, revisado FROM tiquetes_contactenos WHERE revisado = '1'";

if (!empty($search_id_completados)) {
    $sql .= " AND id_tiquete = ?";
}

$sentencia = $conexion->prepare($sql);

if (!empty($search_id_completados)) {
    $sentencia->bind_param('i', $search_id_completados);
}

$sentencia->execute();
$result = $sentencia->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tiquetes_contactenos[] = $row;
    }
}

$tiquetesPendientes_contactenos = [];

$sql = "SELECT id_tiquete, nombre_completo, asunto, correo, telefono, revisado FROM tiquetes_contactenos WHERE revisado = '0'";

if (!empty($search_id_pendientes)) {
    $sql .= " AND id_tiquete = ?";
}

$sentencia = $conexion->prepare($sql);

if (!empty($search_id_pendientes)) {
    $sentencia->bind_param('i', $search_id_pendientes);
}

$sentencia->execute();
$result = $sentencia->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tiquetesPendientes_contactenos[] = $row;
    }
}

$sentencia->close();
$conexion->close();
?>
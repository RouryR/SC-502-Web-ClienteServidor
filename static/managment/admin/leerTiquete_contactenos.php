<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$tiquetes_contactenos = [];


$sql = "SELECT id_tiquete, nombre_completo, asunto, correo, telefono, revisado FROM tiquetes_contactenos WHERE revisado = '1'";
$sentencia = $conexion->prepare($sql);
$sentencia->execute();
$result = $sentencia->get_result();

$tiquetes_contactenos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tiquetes_contactenos[] = $row;
    }
}

$tiquetesPendientes_contactenos = [];


$sql = "SELECT id_tiquete, nombre_completo, asunto, correo, telefono, revisado FROM tiquetes_contactenos WHERE revisado = '0'";
$sentencia = $conexion->prepare($sql);
$sentencia->execute();
$result = $sentencia->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tiquetesPendientes_contactenos[] = $row;
    }
}
$sentencia->close();
$conexion->close();
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$usuarios = [];


$sql = "SELECT id, correo, nombre_completo, empresa_id, puesto, telefono FROM usuarios";
$sentencia = $conexion->prepare($sql);
$sentencia->execute();
$result = $sentencia->get_result();

$usuarios = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}
$sentencia->close();
$conexion->close();

<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$empresas = [];


$sql = "SELECT id, nombre, correo, telefono, imagen FROM empresas";
$sentencia = $conexion->prepare($sql);
$sentencia->execute();
$result = $sentencia->get_result();

$empresas = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $empresas[] = $row;
    }
}


$sentencia->close();
$conexion->close();
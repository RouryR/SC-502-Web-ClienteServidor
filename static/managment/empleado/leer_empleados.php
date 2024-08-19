<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$empleados = [];

$userId = $_SESSION['usuario_id'];
$sql = "SELECT id_empleado, nombre_completo, correo, puesto, salario, telefono,id_usuario FROM empleados where id_usuario =?";
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $userId);
$sentencia->execute();
$result = $sentencia->get_result();

$empleados = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $empleados[] = $row;
    }
}


$sentencia->close();
$conexion->close();

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$id = $_POST['id_tiquete'];
$descripcion = $_POST['descripcion'];
$fecha_cierre = date('Y-m-d');
$respuesta_recibida = $_POST['respuesta_recibida'];
$estado = 'Completado';



$query = "UPDATE tiquetes_usuarios SET  respuesta_recibida = ?, estado = ?, fecha_cierre = ? WHERE id_tiquete = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("sssi", $respuesta_recibida, $estado, $fecha_cierre, $id);


if ($sentencia->execute()) {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Respuesta registrada exitosamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al registrar la respuesta");
}

$sentencia->close();
$conexion->close();
?>
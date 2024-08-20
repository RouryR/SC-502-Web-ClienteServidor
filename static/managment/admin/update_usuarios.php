<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$id = $_POST['id'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion= $_POST['direccion'];
$imagen = $_POST['imagen'];



$query = "UPDATE usuarios SET  correo = ?, telefono = ?,direccion =?, imagen=?  WHERE id = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("ssssi", $correo, $telefono,$direccion,$imagen, $id);

if ($sentencia->execute()) {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Usuario actualizado correctamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al actualizar la Usuario");
}

$sentencia->close();
$conexion->close();
?>



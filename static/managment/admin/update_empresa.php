<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$imagen = $_POST['imagen'];



$query = "UPDATE empresas SET  nombre = ?, correo = ?,telefono =?, imagen=?  WHERE id = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("ssssi", $nombre, $correo,$telefono,$imagen, $id);

if ($sentencia->execute()) {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Empresa actualizada correctamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al actualizar la empresa");
}

$sentencia->close();
$conexion->close();
?>



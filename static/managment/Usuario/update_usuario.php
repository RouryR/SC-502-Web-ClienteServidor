<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$id = $_SESSION['usuario_id'];
$correo = $_SESSION['correo'];
$direccion = $_SESSION['direccion'];
$telefono = $_SESSION['telefono'];


$query = "UPDATE usuarios SET   correo = ?,direccion=?, telefono=?  WHERE id = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("sssi", $correo, $direccion,$telefono,$id);

if ($sentencia->execute()) {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php?mensaje=Perfil actualizado correctamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php?mensaje=Error al actualizar el Perfil");
}

$sentencia->close();
$conexion->close();
?>

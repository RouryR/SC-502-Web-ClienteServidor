<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';
session_start();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$imagen = $_POST['imagen'];

$query = "SELECT imagen FROM empresas WHERE id = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("i", $id);
$sentencia->execute();
$result = $sentencia->get_result();
$empresa = $result->fetch_assoc();
$current_imagen = $empresa['imagen'];


if (empty($imagen)) {
    $imagen = $current_imagen;
}

$query = "UPDATE empresas SET nombre = ?, correo = ?, telefono = ?, imagen = ? WHERE id = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("ssssi", $nombre, $correo, $telefono, $imagen, $id);

if ($sentencia->execute()) {

    $_SESSION['mensaje'] = "Empresa actualizada con éxito";

    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Empresa actualizada correctamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al actualizar la empresa");
}

$sentencia->close();
$conexion->close();
?>

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';
session_start();

$id_empleado = $_POST['id_empleado'];
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$puesto = $_POST['puesto'];
$salario = $_POST['salario'];
$telefono = $_POST['telefono'];


$query = "UPDATE empleados SET  nombre_completo = ?, correo = ?,puesto =?,salario =?,telefono=?  WHERE id_empleado = ?";
$sentencia = $conexion->prepare($query);
$sentencia->bind_param("sssdsi", $nombre_completo, $correo,$puesto,$salario,$telefono, $id_empleado);

if ($sentencia->execute()) {
    $_SESSION['correo'] = $correo;
    $_SESSION['telefono'] = $telefono;
    $_SESSION['direccion'] = $direccion;
    $_SESSION['usuario_imagen'] = $imagen;
    $_SESSION['mensaje'] = "Empleado actualizado con éxito";
    
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php?mensaje=Empleado actualizado correctamente");
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php?mensaje=Error al actualizar el empleado");
}

$sentencia->close();
$conexion->close();
?>

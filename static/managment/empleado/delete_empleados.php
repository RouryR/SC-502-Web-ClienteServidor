<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_empleado'])) {
    $id_empleado = intval($_POST['id_empleado']);

    $sql = "DELETE FROM empleados WHERE id_empleado = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bind_param("i", $id_empleado);

    if ($sentencia->execute()) {
        $id_empleado = $_POST['id_empleado'];
        header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php?mensaje=Eliminado con éxito el empleado&numero=$id_empleado");
        exit();
    } else {
        header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/empleados/empleados.php?mensaje=Error al eliminar");
        exit(); 
    }

    $sentencia->close();
    $conexion->close();
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/tiquetes/managerpages/empleados/empleados.php?mensaje=Solicitud no válida");
    exit();
}

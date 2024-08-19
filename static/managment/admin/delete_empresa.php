<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "DELETE FROM empresas WHERE id = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bind_param("i", $id);

    if ($sentencia->execute()) {
        $id_empleado = $_POST['id'];
        header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Eliminado con éxito la empresa");
        exit();
    } else {
        header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al eliminar");
        exit(); 
    }

    $sentencia->close();
    $conexion->close();
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Solicitud no válida");
    exit();
}

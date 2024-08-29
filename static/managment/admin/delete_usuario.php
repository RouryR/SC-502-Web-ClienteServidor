<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $conexion->begin_transaction();

    try {
        $sql_copy = "
            INSERT INTO auditoria_tiquetes (id_tiquete, titulo, descripcion, fecha_apertura, fecha_cierre, respuesta_recibida, estado, nombre_usuario, nombre_empresa)
            SELECT t.id_tiquete, t.titulo, t.descripcion, t.fecha_apertura, t.fecha_cierre, t.respuesta_recibida, t.estado, u.nombre_completo, e.nombre
            FROM tiquetes_usuarios t
            JOIN usuarios u ON t.id_usuario = u.id
            JOIN empresas e ON u.empresa_id = e.id
            WHERE t.id_usuario = ? AND t.estado = 'Completado'
        ";

        $sentencia_copy = $conexion->prepare($sql_copy);
        $sentencia_copy->bind_param("i", $id);
        $sentencia_copy->execute();

        $sql_delete = "DELETE FROM usuarios WHERE id = ?";
        $sentencia_delete = $conexion->prepare($sql_delete);
        $sentencia_delete->bind_param("i", $id);
        $sentencia_delete->execute();

        $conexion->commit();
        $_SESSION['mensaje'] = "Usuario eliminado con éxito";
        header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Eliminado con éxito el usuario");
        exit();
    } catch (Exception $e) {
        $conexion->rollback();
        header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al eliminar");
        exit();
    }

    $sentencia_copy->close();
    $sentencia_delete->close();
    $conexion->close();
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Solicitud no válida");
    exit();
}


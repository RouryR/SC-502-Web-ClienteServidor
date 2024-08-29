<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_tiquete'])) {
    $idTiquete = intval($_POST['id_tiquete']);

    $sql = "DELETE FROM tiquetes_usuarios WHERE id_tiquete = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bind_param("i", $idTiquete);

    if ($sentencia->execute()) {
        $id_tiquete = $_POST['id_tiquete'];
        $_SESSION['mensaje'] = "Tiquete eliminado con éxito";
        header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Eliminado con éxito el tiquete&numero=$id_tiquete");
        exit();
    } else {
        header("Location: /SC-502-Web-ClienteServidor/static/routes/managerpages/admin/admin.php?mensaje=Error al eliminar");
        exit(); 
    }

    $sentencia->close();
    $conexion->close();
} else {
    header("Location: /SC-502-Web-ClienteServidor/static/routes/tiquetes/managerpages/tiquetes.php?mensaje=Solicitud no válida");
    exit();
}

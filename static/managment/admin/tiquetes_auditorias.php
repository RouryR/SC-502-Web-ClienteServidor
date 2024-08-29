<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$auditoria = [];
$search_id_tiquete = isset($_POST['search_id_tiquete']) ? $_POST['search_id_tiquete'] : '';

// Consulta SQL para auditoría
$sql = "SELECT id_auditoria, id_tiquete, titulo, descripcion, fecha_apertura, fecha_cierre, respuesta_recibida, nombre_usuario, nombre_empresa 
        FROM auditoria_tiquetes WHERE estado = 'Completado'";

if (!empty($search_id_tiquete)) {
    $sql .= " AND id_tiquete = ?";
}

$sentencia = $conexion->prepare($sql);

if (!empty($search_id_tiquete)) {
    $sentencia->bind_param('i', $search_id_tiquete);
}

$sentencia->execute();
$result = $sentencia->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $auditoria[] = $row;
    }
}

$sentencia->close();
$conexion->close();
?>


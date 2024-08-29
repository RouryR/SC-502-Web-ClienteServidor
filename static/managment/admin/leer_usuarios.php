<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$usuarios = [];
$search_term = isset($_POST['search_term']) ? $_POST['search_term'] : '';

$sql = "SELECT u.id, u.correo, u.nombre_completo, u.empresa_id, e.nombre AS empresa_nombre, u.puesto, u.telefono, u.direccion, u.imagen 
        FROM usuarios u 
        JOIN empresas e ON u.empresa_id = e.id";

if (!empty($search_term)) {
    $sql .= " WHERE u.nombre_completo LIKE ?";
}

$sentencia = $conexion->prepare($sql);

if (!empty($search_term)) {
    $search_term_wildcard = '%' . $search_term . '%';
    $sentencia->bind_param('s', $search_term_wildcard);
}

$sentencia->execute();
$result = $sentencia->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}
$sentencia->close();
$conexion->close();
?>


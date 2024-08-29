<?php
require $_SERVER['DOCUMENT_ROOT'] . '/SC-502-Web-ClienteServidor/static/managment/validation/DBManager.php';

$empresas = [];
$search_term = isset($_POST['search_term']) ? $_POST['search_term'] : '';


$sql = "
    SELECT e.id, e.nombre, e.correo, e.telefono, e.imagen, COUNT(u.id) AS cantidad_usuarios
    FROM empresas e
    LEFT JOIN usuarios u ON e.id = u.empresa_id
";

if (!empty($search_term)) {
    $sql .= " WHERE e.nombre LIKE ?";
}

$sql .= " GROUP BY e.id, e.nombre, e.correo, e.telefono, e.imagen";

$sentencia = $conexion->prepare($sql);

if (!empty($search_term)) {
    $search_term_wildcard = '%' . $search_term . '%';
    $sentencia->bind_param('s', $search_term_wildcard);
}

$sentencia->execute();
$result = $sentencia->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $empresas[] = $row;
    }
}
$sentencia->close();
$conexion->close();
?>



<?php
include 'conexion.php';

// Consulta para obtener las categorías
$query = "SELECT categoria_id, nombre_categoria FROM categorias";
$result = $conexion->query($query);

// Array para almacenar las categorías
$categorias = array();

// Guardar las categorías en el array
while ($row = $result->fetch_assoc()) {
    $categorias[] = $row;
}

// Cerrar la conexión
$conexion->close();

// Devolver las categorías en formato JSON
header('Content-Type: application/json');
echo json_encode($categorias);
?>

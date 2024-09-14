<?php
// Conexión a la base de datos
include 'conexion.php';
// Consulta para obtener todos los repuestos
$query = "SELECT * FROM repuestosCabina";
$result = $conexion->query($query);

// Array para almacenar los repuestos
$repuestos = array();

// Guardar los repuestos en el array
while ($row = $result->fetch_assoc()) {
    $repuestos[] = $row;
}

// Cerrar la conexión
$conexion->close();

// Devolver los repuestos en formato JSON
header('Content-Type: application/json');
echo json_encode($repuestos);
?>

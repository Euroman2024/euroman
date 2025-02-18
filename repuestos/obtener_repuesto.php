<?php
require 'conexion.php'; // Asegúrate de que la conexión es correcta

if (!isset($_GET['repuesto_id'])) {
    echo json_encode(["error" => "ID de repuesto no proporcionado"]);
    exit;
}

$repuesto_id = intval($_GET['repuesto_id']); // Sanitizar el ID
$sql = "SELECT * FROM repuestosMecanica WHERE repuesto_id = $repuesto_id";
$resultado = $conexion->query($sql);

if (!$resultado) {
    echo json_encode(["error" => "Error en la consulta: " . $conexion->error]);
    exit;
}

if ($resultado->num_rows > 0) {
    $repuesto = $resultado->fetch_assoc();
    echo json_encode($repuesto);
} else {
    echo json_encode(["error" => "No se encontró el repuesto"]);
}

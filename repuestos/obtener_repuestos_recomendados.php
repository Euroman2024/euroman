<?php
include 'conexion.php';

// Consulta para obtener repuestos recomendados aleatoriamente
$sql = "SELECT * FROM repuestos ORDER BY RAND() LIMIT 5"; // Limitar a 5 repuestos recomendados, puedes ajustar este número según tus necesidades

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Array para almacenar los repuestos recomendados
    $repuestosRecomendados = array();

    // Obtener los datos de cada repuesto recomendado
    while ($fila = $resultado->fetch_assoc()) {
        $repuesto = array(
            'nombre_repuesto' => $fila['nombre_repuesto'],
            'precio' => $fila['precio'],
            'imagen1' => $fila['imagen1'],
            'imagen2' => $fila['imagen2'],
            'imagen3' => $fila['imagen3'],
            'imagen4' => $fila['imagen4'],
            'imagen5' => $fila['imagen5'],
            'imagen6' => $fila['imagen6'],
            'imagen7' => $fila['imagen7'],
            'imagen8' => $fila['imagen8'],
            'imagen9' => $fila['imagen9'],
            'imagen10' => $fila['imagen10']
        );
        // Agregar el repuesto al array de repuestos recomendados
        $repuestosRecomendados[] = $repuesto;
    }

    // Convertir el array a formato JSON y devolverlo
    echo json_encode($repuestosRecomendados);
} else {
    echo "No se encontraron repuestos recomendados.";
}

// Cerrar la conexión
$conexion->close();
?>

<?php
// Comprobar si se ha proporcionado un ID de subcategoría
if (isset($_GET['subcategoria_id'])) {
    $subcategoria_id = $_GET['subcategoria_id'];

    include 'conexion.php';

    // Consulta para obtener los repuestos de la subcategoría seleccionada
    $query = "SELECT * FROM repuestos WHERE subcategoria_id = $subcategoria_id";
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
} else {
    // Si no se proporciona un ID de subcategoría, devolver un error
    echo "Error: No se proporcionó un ID de subcategoría.";
}
?>


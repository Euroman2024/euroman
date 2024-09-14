<?php
// Comprobar si se ha proporcionado un ID de categoría
if (isset($_GET['categoria_id'])) {
    $categoria_id = $_GET['categoria_id'];

    include 'conexion.php';

    // Consulta para obtener las subcategorías de la categoría seleccionada
    $query = "SELECT subcategoria_id, nombre_subcategoria FROM subcategoriasCabina WHERE categoria_id = $categoria_id";
    $result = $conexion->query($query);

    // Array para almacenar las subcategorías
    $subcategorias = array();

    // Guardar las subcategorías en el array
    while ($row = $result->fetch_assoc()) {
        $subcategorias[] = $row;
    }

    // Cerrar la conexión
    $conexion->close();

    // Devolver las subcategorías en formato JSON
    header('Content-Type: application/json');
    echo json_encode($subcategorias);
} else {
    // Si no se proporciona un ID de categoría, devolver un error
    echo "Error: No se proporcionó un ID de categoría.";
}
?>

<?php
include 'conexion.php';
$sql = "SELECT * FROM repuestos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<div class='repuesto'>";
        echo "<h2>" . $row["nombre"] . "</h2>";
        echo "<p><strong>Descripción:</strong> " . $row["descripcion"] . "</p>";
        echo "<p><strong>Precio:</strong> $" . $row["precio"] . "</p>";
        echo "<div class='imagenes'>";
        for ($i = 1; $i <= 10; $i++) {
            $imagenURL = $row["imagen$i"];
            if (!empty($imagenURL)) {
                echo "<img src='$imagenURL' alt='Imagen $i'>";
            }
        }
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No hay repuestos disponibles.";
}
$conexion->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repuestos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/repuestos/all_styles_repuestos.css">    
</head>
<body class="body2">
    <?php include "../templates/menu.php"; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <h2 class="titulo-categoria">MECÁNICA</h2>
                <ul id="lista-categorias" class="list-group">
                    <?php
                    include 'conexion.php'; // Mover la conexión a un archivo separado

                    $categoriasResult = $conn->query("SELECT * FROM categorias");

                    if ($categoriasResult->num_rows > 0) {
                        while ($categoria = $categoriasResult->fetch_assoc()) {
                            echo '<li class="list-group-item"><form method="post" action=""><button type="submit" name="categoria_id" value="' . $categoria['categoria_id'] . '" class="btn btn-link">' . $categoria['nombre_categoria'] . '</button></form></li>';
                        }
                    } else {
                        echo '<li class="list-group-item">No hay categorías disponibles</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-9">
                <form method="post" action="" class="mb-4">
                    <input class="buscarRepuestos form-control" type="text" name="searchInput" placeholder="Buscar repuestos...">
                    <button type="submit" class="btn btn-primary mt-2">Buscar</button>
                </form>
                <div id="detalles-repuesto">
                    <!-- Contenedor para las subcategorías -->
                    <div id="subcategorias-container"></div>

                    <?php
                    // Manejar la búsqueda
                    if (isset($_POST['searchInput'])) {
                        $searchInput = $conn->real_escape_string($_POST['searchInput']);
                        $repuestosResult = $conn->query("SELECT * FROM repuestos WHERE nombre_repuesto LIKE '%$searchInput%'");
                        echo '<h2>Resultados de la búsqueda</h2>';
                    } else {
                        echo '<h2>Todos los repuestos</h2>';
                        $repuestosResult = $conn->query("SELECT * FROM repuestos");
                    }

                    // Mostrar los repuestos
                    if (isset($repuestosResult) && $repuestosResult->num_rows > 0) {
                        while ($repuesto = $repuestosResult->fetch_assoc()) {
                            echo '<div class="repuesto">';
                            echo '<h3>' . $repuesto['nombre_repuesto'] . '</h3>';
                            if (!empty($repuesto['imagen1'])) {
                                echo '<img src="' . $repuesto['imagen1'] . '" alt="Imagen del repuesto">';
                            }
                            echo '<a href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ' . $repuesto['nombre_repuesto'] . ' y quiero obtener más información sobre el producto." class="contact-link">Contactar por WhatsApp</a>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No hay repuestos disponibles</p>';
                    }

                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include "../templates/whatsapp.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript para manejar la carga de subcategorías -->
    <script>
        $(document).ready(function() {
            // Manejar el clic en una categoría
            $('#lista-categorias').on('click', 'button', function(e) {
                e.preventDefault();
                var categoriaId = $(this).val();

                // Enviar solicitud AJAX para obtener subcategorías
                $.ajax({
                    type: 'POST',
                    url: 'obtener_subcategorias2.php', // Archivo PHP para manejar la solicitud
                    data: { categoria_id: categoriaId },
                    success: function(response) {
                        $('#subcategorias-container').html(response); // Actualizar el contenedor de subcategorías
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
// Conexión a la base de datos
include 'conexion.php';

// Agregar una nueva categoría
if (isset($_POST['agregar_categoria'])) {
    $nombre_categoria = $_POST['nombre_categoria'];
    $sql = "INSERT INTO categoriasCabina (nombre_categoria) VALUES ('$nombre_categoria')";
    $conexion->query($sql);
}

// Agregar una nueva subcategoría
if (isset($_POST['agregar_subcategoria'])) {
    $nombre_subcategoria = $_POST['nombre_subcategoria'];
    $categoria_id = $_POST['categoria_id'];
    $sql = "INSERT INTO subcategoriasCabina (nombre_subcategoria, categoria_id) VALUES ('$nombre_subcategoria', $categoria_id)";
    $conexion->query($sql);
}

// Agregar un nuevo repuesto
if (isset($_POST['agregar_repuesto'])) {
    $nombre_repuesto = $_POST['nombre_repuesto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $subcategoria_id = $_POST['subcategoria_id'];
    
    // Obtener las rutas de las imágenes
    $imagenes = [];
    for ($i = 1; $i <= 1; $i++) {
        if ($_FILES["imagen$i"]["error"] == UPLOAD_ERR_OK) {
            $nombre_imagen = $_FILES["imagen$i"]["name"];
            $ruta_imagen = "../imagenes/" . basename($nombre_imagen);
            move_uploaded_file($_FILES["imagen$i"]["tmp_name"], $ruta_imagen);
            $imagenes[] = $ruta_imagen;
        }
    }

    // Insertar en la base de datos
    $num_imagenes = count($imagenes);
    $sql = "INSERT INTO repuestosCabina (nombre_repuesto, descripcion, precio, subcategoria_id";
    for ($i = 1; $i <= $num_imagenes; $i++) {
        $sql .= ", imagen$i";
    }
    $sql .= ") VALUES (?, ?, ?, ?";
    for ($i = 1; $i <= $num_imagenes; $i++) {
        $sql .= ", ?";
    }
    $sql .= ")";
    $statement = $conexion->prepare($sql);

    // Crear un array con los valores
    $valores = array_merge([$nombre_repuesto, $descripcion, $precio, $subcategoria_id], $imagenes);

    // Vincular parámetros
    $tipos = str_repeat("s", count($valores));
    $statement->bind_param($tipos, ...$valores);
    $statement->execute();
}

// Eliminar un repuesto
if (isset($_POST['eliminar_repuesto'])) {
    $repuesto_id = $_POST['repuesto_id'];
    $sql = "DELETE FROM repuestosCabina WHERE repuesto_id = $repuesto_id";
    if ($conexion->query($sql) === TRUE) {
        echo "El repuesto ha sido eliminado correctamente.";
    } else {
        echo "Error al eliminar el repuesto: " . $conexion->error;
    }
}

// Eliminar una categoría
if (isset($_POST['eliminar_categoria'])) {
    $categoria_id = $_POST['categoria_id'];
    $sql = "DELETE FROM categoriasCabina WHERE categoria_id = $categoria_id";
    if ($conexion->query($sql) === TRUE) {
        echo "La categoría ha sido eliminada correctamente.";
    } else {
        echo "Error al eliminar la categoría: " . $conexion->error;
    }
}

// Eliminar una subcategoría
if (isset($_POST['eliminar_subcategoria'])) {
    $subcategoria_id = $_POST['subcategoria_id'];
    $sql = "DELETE FROM subcategoriasCabina WHERE subcategoria_id = $subcategoria_id";
    if ($conexion->query($sql) === TRUE) {
        echo "La subcategoría ha sido eliminada correctamente.";
    } else {
        echo "Error al eliminar la subcategoría: " . $conexion->error;
    }
}

// Modificar una categoría
if (isset($_POST['modificar_categoria'])) {
    $categoria_id_modificar = $_POST['categoria_id_modificar'];
    $nuevo_nombre_categoria = $_POST['nuevo_nombre_categoria'];
    $sql = "UPDATE categoriasCabina SET nombre_categoria = '$nuevo_nombre_categoria' WHERE categoria_id = $categoria_id_modificar";
    if ($conexion->query($sql) === TRUE) {
        echo "La categoría ha sido modificada correctamente.";
    } else {
        echo "Error al modificar la categoría: " . $conexion->error;
    }
}

// Modificar una subcategoría
if (isset($_POST['modificar_subcategoria'])) {
    $subcategoria_id_modificar = $_POST['subcategoria_id_modificar'];
    $nuevo_nombre_subcategoria = $_POST['nuevo_nombre_subcategoria'];
    $sql = "UPDATE subcategoriasCabina SET nombre_subcategoria = '$nuevo_nombre_subcategoria' WHERE subcategoria_id = $subcategoria_id_modificar";
    if ($conexion->query($sql) === TRUE) {
        echo "La subcategoría ha sido modificada correctamente.";
    } else {
        echo "Error al modificar la subcategoría: " . $conexion->error;
    }
}


// Modificar un repuesto
if (isset($_POST['modificar_repuesto'])) {
    $repuesto_id_modificar = $_POST['repuesto_id_modificar'];
    $nuevo_nombre_repuesto = $_POST['nuevo_nombre_repuesto'];
    $nueva_descripcion = $_POST['nueva_descripcion'];
    $nuevo_precio = $_POST['nuevo_precio'];
    $sql = "UPDATE repuestosCabina SET nombre_repuesto = ?, descripcion = ?, precio = ? WHERE repuesto_id = ?";
    $statement = $conexion->prepare($sql);
    $statement->bind_param("ssdi", $nuevo_nombre_repuesto, $nueva_descripcion, $nuevo_precio, $repuesto_id_modificar);
    if ($statement->execute()) {
        echo "El repuesto ha sido modificado correctamente.";
    } else {
        echo "Error al modificar el repuesto: " . $conexion->error;
    }
}

// Modificar imagen de un repuesto
if (isset($_POST['modificar_imagen_repuesto'])) {
    $repuesto_id_modificar = $_POST['repuesto_id_modificar'];
    
    // Verificar si se cargó una nueva imagen
    if ($_FILES["nueva_imagen"]["error"] == UPLOAD_ERR_OK) {
        $nombre_imagen = $_FILES["nueva_imagen"]["name"];
        $ruta_imagen = "../imagenes/" . basename($nombre_imagen);
        // Mover la nueva imagen al directorio de imágenes
        move_uploaded_file($_FILES["nueva_imagen"]["tmp_name"], $ruta_imagen);
        
        // Actualizar la ruta de la imagen en la base de datos
        $sql = "UPDATE repuestosCabina SET imagen1 = ? WHERE repuesto_id = ?";
        $statement = $conexion->prepare($sql);
        $statement->bind_param("si", $ruta_imagen, $repuesto_id_modificar);
        if ($statement->execute()) {
            echo "La imagen del repuesto ha sido modificada correctamente.";
        } else {
            echo "Error al modificar la imagen del repuesto: " . $conexion->error;
        }
    } else {
        echo "Error al cargar la nueva imagen.";
    }
}
// Modificar la categoría de una subcategoría
if (isset($_POST['modificar_categoria_subcategoria'])) {
    $subcategoria_id_modificar_categoria = $_POST['subcategoria_id_modificar_categoria'];
    $nueva_categoria_id = $_POST['nueva_categoria_id'];
    $sql = "UPDATE subcategoriasCabina SET categoria_id = $nueva_categoria_id WHERE subcategoria_id = $subcategoria_id_modificar_categoria";
    if ($conexion->query($sql) === TRUE) {
        echo "La categoría de la subcategoría ha sido modificada correctamente.";
    } else {
        echo "Error al modificar la categoría de la subcategoría: " . $conexion->error;
    }
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euroman</title>  
    <link rel="stylesheet" href="../styles/repuestos/repuestosA.css">
    <style>
        /* Estilos para la ventana modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);      
            height:900px      
            
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius:20px;
            width: 40%;        
                
            flex-direction:column;  
            display:flex;
            justify-content: center;              
        }
        
        .modal-content form{
            flex-direction:column;     
            margin:0 25%;  
        }
        .modal-content h2{
            flex-direction:column;     
            margin:0 35%;  
            margin-bottom:30px;
        }
    </style>
</head>
<body>    
<div id="modal" class="modal">
        <div class="modal-content">                        
            <h2>INICIAR SESION</h2>
            <form>
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username"><br><br>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password"><br><br>
                <button type="button" onclick="iniciarSesion()">Iniciar sesión</button>
            </form>
        </div>
    </div>
    <div class="man">        
    <img src="../carpetaeuromanimagenes/repuestos/manlogo.png" alt="dDe">
    </div>
    <div class="contenido1">
        <div class="agregarCategoria">
            <h1>Agregar Categoría</h1>
            <div>
                <form method="POST">
                    <input type="text" name="nombre_categoria" placeholder="Nombre de la categoría" required>
                    <button type="submit" name="agregar_categoria">Agregar Categoría</button>
                </form>
            </div>
        </div>
        <div class="agregarCategoria">
        <h1>Agregar Subcategoría</h1>
        <form method="POST">
            <input type="text" name="nombre_subcategoria" placeholder="Nombre de la subcategoría" required>
            <select name="categoria_id">
                <?php
                // Obtener categorías
                $categorias_result = $conexion->query("SELECT * FROM categoriasCabina");
                $categorias = $categorias_result->fetch_all(MYSQLI_ASSOC);
                foreach ($categorias as $categoria):
                ?>
                    <option value="<?php echo $categoria['categoria_id']; ?>"><?php echo $categoria['nombre_categoria']; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="agregar_subcategoria">Agregar Subcategoría</button>
        </form>
        </div>
        <div class="agregarRepuesto">
        <h1>Agregar Repuesto</h1>
        <form class="agR" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre_repuesto" placeholder="Nombre del repuesto" required><br><br>
            <textarea name="descripcion" placeholder="Descripción del repuesto"></textarea><br><br>
            <input type="number" name="precio" placeholder="Precio del repuesto" step="0.01" required><br><br>
            <select name="subcategoria_id">
                <?php 
                // Obtener subcategorías
                $subcategorias_result = $conexion->query("SELECT * FROM subcategoriasCabina");
                $subcategorias = $subcategorias_result->fetch_all(MYSQLI_ASSOC);
                foreach ($subcategorias as $subcategoria): 
                ?>
                    <option value="<?php echo $subcategoria['subcategoria_id']; ?>"><?php echo $subcategoria['nombre_subcategoria']; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <div class="imgAR">
            <?php for ($i = 1; $i <= 10; $i++): ?>                
                <label for="imagen<?php echo $i; ?>">Imagen <?php echo $i; ?>:</label>
                <input type="file" name="imagen<?php echo $i; ?>" accept="image/*"><br><br>
            <?php endfor; ?>
            </div>
            <button class="bcl" type="submit" name="agregar_repuesto">Agregar Repuesto</button>
        </form>
        </div>
        <div class="agregarCategoria">
        <h1>Eliminar Repuesto</h1>
        <form method="POST">
            <select name="repuesto_id">
                <?php 
                // Obtener repuestos
                $repuestos_result = $conexion->query("SELECT * FROM repuestosCabina");
                $repuestos = $repuestos_result->fetch_all(MYSQLI_ASSOC);
                foreach ($repuestos as $repuesto): 
                ?>
                    <option value="<?php echo $repuesto['repuesto_id']; ?>"><?php echo $repuesto['nombre_repuesto']; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <button type="submit" name="eliminar_repuesto">Eliminar Repuesto</button>
        </form>
        </div>
        <div class="agregarCategoria">
        <h1>Eliminar Categoría</h1>
        <form method="POST">
            <select name="categoria_id">
                <?php 
                // Obtener categorías
                $categorias_result = $conexion->query("SELECT * FROM categoriasCabina");
                $categorias = $categorias_result->fetch_all(MYSQLI_ASSOC);
                foreach ($categorias as $categoria): 
                ?>
                    <option value="<?php echo $categoria['categoria_id']; ?>"><?php echo $categoria['nombre_categoria']; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <button type="submit" name="eliminar_categoria">Eliminar Categoría</button>
        </form>
        </div>
        <div class="agregarCategoria">
        <h1>Eliminar Subcategoría</h1>
        <form method="POST">
            <select name="subcategoria_id">
                <?php 
                // Obtener subcategorías
                $subcategorias_result = $conexion->query("SELECT * FROM subcategoriasCabina");
                $subcategorias = $subcategorias_result->fetch_all(MYSQLI_ASSOC);
                foreach ($subcategorias as $subcategoria): 
                ?>
                    <option value="<?php echo $subcategoria['subcategoria_id']; ?>"><?php echo $subcategoria['nombre_subcategoria']; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <button type="submit" name="eliminar_subcategoria">Eliminar Subcategoría</button>
        </form>
        </div>
        <div class="agregarCategoria">
        <h1>Modificar Categoría</h1>
        <form method="POST">
            <select name="categoria_id_modificar">
                <?php 
                // Obtener categorías
                $categorias_result = $conexion->query("SELECT * FROM categoriasCabina");
                $categorias = $categorias_result->fetch_all(MYSQLI_ASSOC);
                foreach ($categorias as $categoria): 
                ?>
                    <option value="<?php echo $categoria['categoria_id']; ?>"><?php echo $categoria['nombre_categoria']; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <input type="text" name="nuevo_nombre_categoria" placeholder="Nuevo nombre de la categoría" required><br><br>
            <button type="submit" name="modificar_categoria">Modificar Categoría</button>
        </form>
        </div>
        <div class="agregarCategoria">
        <h1>Modificar Subcategoría</h1>
        <form method="POST">
            <select name="subcategoria_id_modificar">
                <?php 
                // Obtener subcategorías
                $subcategorias_result = $conexion->query("SELECT * FROM subcategoriasCabina");
                $subcategorias = $subcategorias_result->fetch_all(MYSQLI_ASSOC);
                foreach ($subcategorias as $subcategoria): 
                ?>
                    <option value="<?php echo $subcategoria['subcategoria_id']; ?>"><?php echo $subcategoria['nombre_subcategoria']; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <input type="text" name="nuevo_nombre_subcategoria" placeholder="Nuevo nombre de la subcategoría" required><br><br>
            <button type="submit" name="modificar_subcategoria">Modificar Subcategoría</button>
        </form>
        </div>
        <div class="agregarCategoria">
    <h1>Modificar Repuesto</h1>
    <form method="POST">
        <select name="repuesto_id_modificar">
            <?php 
            // Obtener repuestos
            $repuestos_result = $conexion->query("SELECT * FROM repuestosCabina");
            $repuestos = $repuestos_result->fetch_all(MYSQLI_ASSOC);
            foreach ($repuestos as $repuesto): 
            ?>
                <option value="<?php echo $repuesto['repuesto_id']; ?>"><?php echo $repuesto['nombre_repuesto']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <!-- Agregar campos para modificar -->
        <input type="text" name="nuevo_nombre_repuesto" placeholder="Nuevo nombre del repuesto"><br><br>
        <textarea name="nueva_descripcion" placeholder="Nueva descripción del repuesto"></textarea><br><br>
        <input type="number" name="nuevo_precio" placeholder="Nuevo precio del repuesto" step="0.01"><br><br>
        <button type="submit" name="modificar_repuesto">Modificar Repuesto</button>
    </form>
</div>
<div class="agregarCategoria">
    <h1>Modificar Repuesto</h1>
    <form method="POST" enctype="multipart/form-data">
        <select name="repuesto_id_modificar">
            <?php 
            // Obtener repuestos
            $repuestos_result = $conexion->query("SELECT * FROM repuestosCabina");
            $repuestos = $repuestos_result->fetch_all(MYSQLI_ASSOC);
            foreach ($repuestos as $repuesto): 
            ?>
                <option value="<?php echo $repuesto['repuesto_id']; ?>"><?php echo $repuesto['nombre_repuesto']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <!-- Agregar campos para modificar -->
        <input type="file" name="nueva_imagen" accept="image/*"><br><br>
        <button type="submit" name="modificar_imagen_repuesto">Modificar Imagen Repuesto</button>
    </form>
</div>
<div class="agregarCategoria">
    <h1>Modificar Categoría de Subcategoría</h1>
    <form method="POST">
        <select name="subcategoria_id_modificar_categoria">
            <?php 
            // Obtener subcategorías
            $subcategorias_result = $conexion->query("SELECT * FROM subcategoriasCabina");
            $subcategorias = $subcategorias_result->fetch_all(MYSQLI_ASSOC);
            foreach ($subcategorias as $subcategoria): 
            ?>
                <option value="<?php echo $subcategoria['subcategoria_id']; ?>"><?php echo $subcategoria['nombre_subcategoria']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <select name="nueva_categoria_id">
            <?php 
            // Obtener categorías
            $categorias_result = $conexion->query("SELECT * FROM categoriasCabina");
            $categorias = $categorias_result->fetch_all(MYSQLI_ASSOC);
            foreach ($categorias as $categoria): 
            ?>
                <option value="<?php echo $categoria['categoria_id']; ?>"><?php echo $categoria['nombre_categoria']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <button type="submit" name="modificar_categoria_subcategoria">Modificar Categoría de Subcategoría</button>
    </form>
</div>


    </div>
    <script>
        // Definir usuario y contraseña
        const usuarioValido = "PAMJ";
        const contrasenaValida = "Euroman2023$";

        // Función para abrir la ventana modal
        function abrirModal() {
            const modal = document.getElementById('modal');
            modal.style.display = 'block';
        }

        // Función para cerrar la ventana modal
        function cerrarModal() {
            const modal = document.getElementById('modal');
            modal.style.display = 'none';
        }

        // Función para iniciar sesión
        function iniciarSesion() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Comprobar si el usuario y la contraseña son válidos
            if (username === usuarioValido && password === contrasenaValida) {
                console.log("Inicio de sesión exitoso");
                // Cerrar el modal solo si el inicio de sesión es exitoso
                cerrarModal();
                // Aquí puedes redirigir al usuario a una página específica, por ejemplo:
                // window.location.href = "pagina_de_inicio.php";
            } else {
                console.log("Usuario o contraseña incorrectos");
                // Aquí puedes mostrar un mensaje de error al usuario, por ejemplo:
                // alert("Usuario o contraseña incorrectos");
            }
        }

        // Mostrar la ventana modal al cargar la página
        window.onload = () => {
            abrirModal();
        };
        </script>        
</body>
</html>

<?php
// Cerrar la conexión
$conexion->close();
?>

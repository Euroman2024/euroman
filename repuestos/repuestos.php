<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repuestos - Euroman</title>    
    <link rel="stylesheet" href="../styles/repuestos/all_styles_repuestos.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <style>
        .selected {
            background-color: blue;
            color: red;
        }
        .buscarRepuestos {
            border-radius: 20px;
            height: 30px;
             width: 100%;
        }
        .imglW {
            position: absolute;
            width: 40px;
            height: 40px;
            top: 80%;
            left: 80%;
            z-index: 0;
        }
        .imglW img {
            width: 100%;
            height: 100%;
            object-fit: fill;
        }
        .what {
            position: absolute;   
            top: 0;
            left: 0;     
            width: 100%;
            height: 100%;        
        }
        .repuesto {
            cursor: default;
        }
        @media screen and (max-width: 767px) {
            /* Ajusta según sea necesario */
            .buscarRepuestos{
                width: 90%;
            }
        }
        p {
            color: white;
        }
    </style>
</head>
<body class="body2">
    <?php include "../templates/menu.php"; ?>
    <div class="body3">
        <div class="menu2">    
        <a href="#"><button class="bt-no-active izq">MECANICA</button></a>
            <a href="repuestosCabina.php"><button class="bt-active der">CABINA</button></a> 
            <div id="menu">                
                <h2 class="titulo-categoria">REPUESTOS MECANICA</h2>
                <ul id="lista-categorias">
                    <!-- Aquí se cargarán las categorías dinámicamente -->
                </ul>
            </div>
        </div>
        <div class="contenido2">
            <div id="contenido">
                <div id="rep-d">
                    <input class="buscarRepuestos" type="text" id="searchInput" placeholder="Buscar repuestos...">
                    <div id="detalles-repuesto">
                        Seleccione un repuesto para ver los detalles.
                    </div>
                    <div id="paginacion"></div> <!-- Contenedor para los botones de paginación -->
                </div>
            </div>
        </div>
    </div>

    <?php include "../templates/whatsapp.php";?>
    <?php include "../templates/footer.php";?> 
    
    <script src="../scripts/repuestos/all_sripts_repuestos.js"></script>
    <script src="../scripts/menu.js"></script>
    <script src="../scripts/whatsapp.js"></script>
    
</body>
</html>







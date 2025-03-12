<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repuestos - Euroman</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/repuestos/all_styles_repuestos.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/footer.css">   
    <style>

        .subcategorias {
    margin-top: 10px;
    list-style-type: none;
    padding-left: 20px;
    display: none;  /* Las subcategorías están ocultas inicialmente */
}

.subcategorias li {
    padding: 5px 0;
    cursor: pointer;
}

.subcategorias li:hover {
    background-color: #f0f0f0;
}

    </style>
    <style>
        /* Estilos generales del modal */
.modal-dialog {
    max-width: 50%;  /* Limitar el tamaño del modal al 80% de la pantalla */
    margin: 30px auto;  /* Centramos el modal y le damos margen superior */
}

.modal-content {
    border-radius: 10px;  /* Bordes redondeados para el modal */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);  /* Sombra suave */
}

/* Estilos de la imagen en el modal */
.modal-body {
    text-align: center;  /* Centra la imagen en el modal */
}

#imagenModal {
    width: 100%;  /* La imagen ocupará el 100% del ancho disponible */
    max-height: 50vh;  /* La imagen no excederá el 80% de la altura de la ventana */
    object-fit: contain;  /* La imagen se ajustará dentro del contenedor sin deformarse */
    border-radius: 5px;  /* Bordes redondeados en la imagen */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  /* Sombra suave en la imagen */
}



.modal-title{
    color: black;
}

    </style>  
    <style>
        .repuesto {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.repuesto:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
    </style>  
    <style>
         #titulo-subcategoria{
            display: none;
            width: 100%;
            height: 30px;                        
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="body2">
    <?php include "../templates/menu.php"; ?>
    <div class="body3">    
        <div style="display:flex;margin:0 auto;width:40%;height:90px;background-color:white;margin-top:150px;margin-bottom:50px;align-items:center;">
            <h1 style="color:#383c4c;margin:0 auto;font-family:fantasy;">REPUESTOS DE CABINA</h1>
        </div>
        
        <div class="contenido2">
        <div class="menu2">            
            <a href="repuestos_principal.php"><button class="bt-active izq" style="position: relative;width:250px;background-color:#383c4c;">REGRESAR</button></a>
            <div id="menu">                
                <h2 class="titulo-categoria">CATEGORIAS</h2>
                <ul id="lista-categorias">
                    <!-- Aquí se cargarán las categorías dinámicamente -->
                </ul>
            </div>
        </div>
            <div id="contenido">
                <div id="rep-d">
                    <input class="buscarRepuestos" type="text" id="searchInput" placeholder="Buscar repuestos...">
                    <div id="titulo-subcategoria">                        
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../scripts/repuestos/all_sripts_repuestos_cabina.js"></script>
    
    <script src="../scripts/menu.js"></script>
    <script src="../scripts/whatsapp.js"></script>
    
    
</body>
</html>

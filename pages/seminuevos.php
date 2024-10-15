<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminuevos - Euroman</title>
    <link rel="stylesheet" href="../styles/whatsapp.css">                
    <link rel="stylesheet" href="../styles/seminuevos/seminuevos.css">
    <link rel="stylesheet" href="../styles/seminuevos/seminuevos2.css">
    <link rel="stylesheet" href="../styles/seminuevos/seminuevos3.css">
    <link rel="stylesheet" href="../styles/seminuevos/seminuevos4.css">      
    <link rel="stylesheet" href="../styles/menu.css">     
    <link rel="stylesheet" href="../styles/footer.css">   
    <style>
        .green{
            color: rgb(0, 223, 0);
        }
        .red{
            color: red;
        }
        .h20{
            font-size: 20px;
        }
    </style>                           
</head>
<body class="body2">
<?php include "../templates/menu.php"; ?>
    <h1>CAMIONES SEMINUEVOS</h1>
    <div class="cont">
        
        <section class="sectionvision animated">
            <h5 class="h20">TGA 33.480BBS</h5>
            <p class="red">VENDIDO</p>
            <div class="imagen-centrada">            
            <img src="../carpetaeuromanimagenes/camion11111.jpg" alt="Descripcion de la imagen">
            </div>
            <a href="./seminuevos-producto1.php" ><button class="blue-button">Ver Seminuevo</button></a>      
        </section>    
        <section class="sectionvision animated">
            <h5 class="h20">TGS 33.480</h5>
            <p class="red">VENDIDO</p>
            <div class="imagen-centrada">            
            <img src="../carpetaeuromanimagenes/seminuevos/producto2/tgs8.jpg" alt="Descripcion de la imagen">
            </div>
            <a href="./seminuevos-producto2.php" ><button class="blue-button">Ver Seminuevo</button></a>      
        </section>         
        
        <section class="sectionvision animated">
            <h5 class="h20">TGA 33.480</h5>
            <p class="red">VENDIDO</p>
            <div class="imagen-centrada">            
            <img src="../carpetaeuromanimagenes/seminuevos/producto3/tga2.jpeg" alt="Descripcion de la imagen">
            </div>
            <a href="./seminuevos-producto3.php" ><button class="blue-button">Ver Seminuevo</button></a>      
        </section> 
    </div>
    <?php include "../templates/whatsapp.php";?>
    <?php include "../templates/footer.php"; ?>
    <script src="../scripts/whatsapp.js"></script>
    <script src="../scripts/seminuevos/animated.js"></script>
    <script src="../scripts/menu.js"></script>
</body>
</html>
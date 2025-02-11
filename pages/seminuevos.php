<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminuevos - Euroman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/whatsapp.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <style>
        /* Fondo general */
        .body2 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://media.licdn.com/dms/image/C4D1BAQGHkvN5na3Q5Q/company-background_10000/0/1583733380340/man_camionesybuses_cover?e=2147483647&v=beta&t=uqLHFOKjoJI3bsYU3gqSsEGHxBa0a1Qha4Mle5XZ-9M') center;
            background-size: cover;
            position: relative;
        }

        /* Contenedor principal */
        .container {
            padding: 50px 15px;
        }

        /* Títulos */
        .display-4 {
            font-weight: 700;
            color: #0056b3;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Contenedor de secciones */
        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(18rem, 1fr));
            gap: 20px;
            padding: 20px;
        }

        /* Sección individual */
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;            
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Imagen dentro de cada sección */
        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: cover;            
        }

        /* Títulos y etiquetas dentro de la sección */
        .section-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 10px;
        }

        .status-label {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .red {
            color: red;
        }

        /* Botones */
        .blue-button {
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .blue-button:hover {
            background-color: #004494;
            transform: scale(1.05);
        }
    </style>

<style>
        .container{                        
            margin-bottom: 40px;
            width: 75%;            
           
        }
        .card{
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .card-body{
            background-color:  #383c4c;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .section-title{
            color: white;            
        }
    </style>

<style>
        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 70%;
            /* Para que ocupe toda la altura de la ventana */
            margin: 0 auto;
            margin-top: 30px;
            /* Fondo claro */
        }

        .carousel-container {
            width: 100%;
            /* Ocupa el 80% del ancho del contenedor */
            height: 100%;
            /* Ocupa el 80% de la altura del contenedor */

        }

        .carousel-wrapper {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .carousel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Para que la imagen se ajuste manteniendo la proporción */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .carousel-control-prev,
        .carousel-control-next {
            filter: invert(100%);
        }
    </style>
</head>
<body class="body2">

    <?php include "../templates/menu.php"; ?>
    <div style="display:flex;margin-top:120px;"></div>

    <!--<div style="display: flex; width: 73%; background-color: white; margin:0 auto; align-items: center; justify-content: center; clip-path: polygon(0 1%, 100% 0, 98% 50%, 100% 100%, 0 100%, 2% 50%);">
    <h1 class="display-4" style="color:#383c4c; width: 80%; text-align: center; display: flex; justify-content: space-between; white-space: nowrap;margin:auto 0;margin-top:5px;margin-bottom:6px;">
        <span>C</span>
        <span>A</span>
        <span>M</span>
        <span>I</span>
        <span>O</span>
        <span>N</span>
        <span>E</span>
        <span>S</span>
        <span> </span>
        <span> </span>
        <span>S</span>
        <span>E</span>
        <span>M</span>
        <span>I</span>
        <span>N</span>
        <span>U</span>
        <span>E</span>
        <span>V</span>
        <span>O</span>
        <span>S</span>
    </h1>
</div>-->

<div class="flex-container">
    <div class="carousel-container">
        <div class="carousel-wrapper">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../carpetaeuromanimagenes/seminuevos/fondo.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../carpetaeuromanimagenes/camionesNuevos/fondo2.jpg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../carpetaeuromanimagenes/seminuevos/fondo3.jpg" class="d-block w-100" alt="Imagen 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container">
        <!-- Título principal -->
        

        <!-- Contenedor de tarjetas -->
        <div class="cards-container">
            <!-- Sección 1 -->
            <div class="card" style="background-color:#383c4c;">
                <img style="object-fit:contain;" src="../carpetaeuromanimagenes/camion11111.jpg" alt="Camión TGA 33.480BBS">
                <div class="card-body text-center">
                <h5 class="section-title">TGA 33.480BBS</h5>
                <p class="status-label red">VENDIDO</p>
                <a href="./seminuevos-producto1.php" class="blue-button">Ver Seminuevo</a>
                </div>
            </div>

            <!-- Sección 2 -->
            <div class="card">
                <img src="../carpetaeuromanimagenes/seminuevos/producto2/tgs8.jpg" alt="Camión TGS 33.480">
                <div class="card-body text-center">
                <h5 class="section-title">TGS 33.480</h5>
                <p class="status-label red">VENDIDO</p>
                <a href="./seminuevos-producto2.php" class="blue-button">Ver Seminuevo</a>
                </div>
            </div>

            <!-- Sección 3 -->
            <div class="card">
                <img src="../carpetaeuromanimagenes/seminuevos/producto3/tga2.jpeg" alt="Camión TGA 33.480">
                <div class="card-body text-center">
                <h5 class="section-title">TGA 33.480</h5>
                <p class="status-label red">VENDIDO</p>
                <a href="./seminuevos-producto3.php" class="blue-button">Ver Seminuevo</a>
                </div>
            </div>


            <div class="card">
                <img src="../carpetaeuromanimagenes/camionesNuevos/proximamente.jpg" alt="">
                <div class="card-body text-center">
                <h5 class="section-title"></h5>
                <p class="status-label red" style="color:white;">PROXIMAMENTE</p>
                
                </div>
            </div>

           

            
        </div>
    </div>

    <?php include "../templates/whatsapp.php"; ?>
    <?php include "../templates/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scripts -->
    <script src="../scripts/whatsapp.js"></script>
    <script src="../scripts/seminuevos/animated.js"></script>
    <script src="../scripts/menu.js"></script>
</body>
</html>

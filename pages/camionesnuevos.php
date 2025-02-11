<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camiones Nuevos - Euroman</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/whatsapp.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <style>
        /* Fondo de la página */
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
            /* Azul moderno */
            text-align: center;
            margin-bottom: 30px;
        }

        /* Diseño de las tarjetas */
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Imagen de las tarjetas */
        .card-img-top {
            border-radius: 10px 10px 0 0;
            height: 200px;
            object-fit: cover;
        }

        /* Textos dentro de las tarjetas */
        .section-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 10px;
        }

        .offer-label {
            font-size: 1rem;
            color: #28a745;
            font-weight: bold;
            margin-bottom: 15px;
        }

        /* Botones */
        .btn-custom {
            background-color: #0056b3;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #004494;
            transform: scale(1.05);
        }

        /* Contenedor de tarjetas */
        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(18rem, 1fr));
            gap: 20px;
        }
    </style>



    <style>
        .container {
            margin-bottom: 40px;
            width:72%;
        }

        .card {
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .card-body {
            background-color: #383c4c;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .section-title {
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
    <div style="display: flex;margin-top:120px;"></div>
    <!--<div style="display: flex; width: 73%; background-color: white; margin:0 auto; align-items: center; justify-content: center; clip-path: polygon(0 1%, 100% 0, 98% 50%, 100% 100%, 0 100%, 2% 50%);">
        <h1 class="display-4" style="color:#383c4c; width: 70%; text-align: center; display: flex; justify-content: space-between; white-space: nowrap;margin:auto 0;margin-top:5px;margin-bottom:6px;">
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
                        <img src="../carpetaeuromanimagenes/camionesNuevos/fondo.jpg" class="d-block w-100" alt="Imagen 1">
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
        <!-- Título Principal -->


        <!-- Contenedor de tarjetas -->
        <div class="cards-container">
            <!-- Card del Camión 1 -->
            <div class="card">
                <img src="../carpetaeuromanimagenes/camionesNuevos/producto1/camion1.jpeg" class="card-img-top" alt="Camión Modelo 33.440">
                <div class="card-body text-center">
                    <h5 class="section-title">MODELO MAN TGS | SERIE 33.440</h5>
                    <p class="offer-label">OFERTA</p>
                    <a href="camionesnuevos-camion1.php" class="btn btn-custom">Ver Camión</a>
                </div>
            </div>

            <!-- Card del Camión 2 -->
            <div class="card">
                <img src="../carpetaeuromanimagenes/camionesNuevos/producto2/camion2.jpg" class="card-img-top" alt="Camión Modelo 33.480">
                <div class="card-body text-center">
                    <h5 class="section-title">MODELO MAN TGS | SERIE 33.480</h5>
                    <p class="offer-label">OFERTA</p>
                    <a href="camionesnuevos-camion2.php" class="btn btn-custom">Ver Camión</a>
                </div>
            </div>

            <!-- Card del Camión 2 -->
            <div class="card">
                <img src="../carpetaeuromanimagenes/camionesNuevos/proximamente.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="section-title">PROXIMAMENTE</h5>
                </div>
            </div>
        </div>
    </div>

    <?php include "../templates/whatsapp.php"; ?>
    <?php include "../templates/footer.php"; ?>

    <!-- Bootstrap JS y Dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../scripts/whatsapp.js"></script>
    <script src="../scripts/camionesnuevos/animated.js"></script>
    <script src="../scripts/menu.js"></script>
</body>

</html>
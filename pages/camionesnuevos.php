<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camiones Nuevos - Euroman</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
</head>

<body class="body2">

    <?php include "../templates/menu.php"; ?>
    <div style="display: flex;margin-top:40px;"></div>
    <div class="container">
        <!-- Título Principal -->
        <h1 class="display-4" style="color:white;">Camiones Nuevos</h1>

        <!-- Contenedor de tarjetas -->
        <div class="cards-container">
            <!-- Card del Camión 1 -->
            <div class="card">
                <img src="../carpetaeuromanimagenes/camionesNuevos/producto1/camion1.jpeg" class="card-img-top" alt="Camión Modelo 33.440">
                <div class="card-body text-center">
                    <h5 class="section-title">MODELO MAN TGS | SERIE 33.440</h5>
                    <p class="offer-label" >OFERTA</p>
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
                <img src="../carpetaeuromanimagenes/camionesNuevos/producto2/" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="section-title">PROXIMAMENTE</h5>
                    <p class="offer-label">OFERTA</p>
                    <a href="camionesnuevos-camion2.php" class="btn btn-custom">Ver Camión</a>
                </div>
            </div>
        </div>
    </div>

    <?php include "../templates/whatsapp.php"; ?>
    <?php include "../templates/footer.php"; ?>

    <!-- Bootstrap JS y Dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../scripts/whatsapp.js"></script>
    <script src="../scripts/camionesnuevos/animated.js"></script>
    <script src="../scripts/menu.js"></script>
</body>

</html>
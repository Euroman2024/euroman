<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminuevos - Euroman</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            padding: 15px;
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
            border-radius: 10px;
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: cover;
            margin-bottom: 15px;
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
</head>
<body class="body2">

    <?php include "../templates/menu.php"; ?>
    <div style="display:flex;margin-top:45px;"></div>

    <div class="container">
        <!-- Título principal -->
        <h1 class="display-4" style="color:white;">Camiones Seminuevos</h1>

        <!-- Contenedor de tarjetas -->
        <div class="cards-container">
            <!-- Sección 1 -->
            <div class="card">
                <img style="object-fit:contain;" src="../carpetaeuromanimagenes/camion11111.jpg" alt="Camión TGA 33.480BBS">
                <h5 class="section-title">TGA 33.480BBS</h5>
                <p class="status-label red">VENDIDO</p>
                <a href="./seminuevos-producto1.php" class="blue-button">Ver Seminuevo</a>
            </div>

            <!-- Sección 2 -->
            <div class="card">
                <img src="../carpetaeuromanimagenes/seminuevos/producto2/tgs8.jpg" alt="Camión TGS 33.480">
                <h5 class="section-title">TGS 33.480</h5>
                <p class="status-label red">VENDIDO</p>
                <a href="./seminuevos-producto2.php" class="blue-button">Ver Seminuevo</a>
            </div>

            <!-- Sección 3 -->
            <div class="card">
                <img src="../carpetaeuromanimagenes/seminuevos/producto3/tga2.jpeg" alt="Camión TGA 33.480">
                <h5 class="section-title">TGA 33.480</h5>
                <p class="status-label red">VENDIDO</p>
                <a href="./seminuevos-producto3.php" class="blue-button">Ver Seminuevo</a>
            </div>


            <div class="card">
                <img src="../carpetaeuromanimagenes/seminuevos/producto3/" alt="">
                <h5 class="section-title"></h5>
                <p class="status-label red" style="color:green;">PROXIMAMENTE</p>
                <a href="./seminuevos-producto3.php" class="blue-button">Ver Seminuevo</a>
            </div>

           

            
        </div>
    </div>

    <?php include "../templates/whatsapp.php"; ?>
    <?php include "../templates/footer.php"; ?>

    <!-- Scripts -->
    <script src="../scripts/whatsapp.js"></script>
    <script src="../scripts/seminuevos/animated.js"></script>
    <script src="../scripts/menu.js"></script>
</body>
</html>

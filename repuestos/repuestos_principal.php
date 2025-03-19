<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repuestos Tren Motriz - Euroman</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/repuestos/all_styles_repuestos.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/footer.css"> 
    <link rel="stylesheet" href="../styles/servicios.css">   
    <style>
        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;            
            /* Para que ocupe toda la altura de la ventana */
        
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
    <style>
    .service-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        height: 100%; /* Hace que todas las tarjetas tengan la misma altura */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .service-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .service-card .card-body {
        text-align: center;
        background: #f8f9fa;
        padding: 20px;
        flex-grow: 1; /* Hace que el contenido interno se distribuya de forma uniforme */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .service-card h5 {
        font-weight: bold;
        color: #333;
    }

    .service-card p {
        color: #666;
        font-size: 14px;
        flex-grow: 1; /* Ajusta el espacio para que los botones estén alineados */
    }

    .service-card .btn {
        background: #383c4c;
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .service-card .btn:hover {
        background: #0056b3;
    }
</style>
</head>
<body class="body2">
    <?php include "../templates/menu.php"; ?>
    
    <div class="flex-container">
    <div class="carousel-container">
        <div class="carousel-wrapper">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../carpetaeuromanimagenes/repuestos/fondo.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../carpetaeuromanimagenes/repuestos/fondo2.jpg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../carpetaeuromanimagenes/repuestos/fondo3.jpg" class="d-block w-100" alt="Imagen 3">
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



    <div class="container mt-5">
    <div class="row justify-content-center">
         <!-- Card de Mecánica -->
         <div class="col-md-4 d-flex">
            <div class="card service-card w-100">
                <img src="../carpetaeuromanimagenes/repuestos/tren.png" alt="Mecánica">
                <div class="card-body">
                    <h5>Tren motriz</h5>
                    <p>Descubre nuestros repuestos de tren motriz especializados para tu camion MAN.</p>
                    <a href="repuestos.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        <!-- Card de Cabina -->
        <div class="col-md-4 d-flex">
            <div class="card service-card w-100">
                <img src="https://www.modellbahnshop-lippe.com/article_data/images/62/393257_e.jpg" alt="Cabina">
                <div class="card-body">
                    <h5>Cabina</h5>
                    <p>Descubre nuestros repuestos de cabina para el mantenimiento y reparación.</p>
                    <a href="repuestosCabina.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

       
    </div>
</div>




    <?php include "../templates/whatsapp.php";?>
    <?php include "../templates/footer.php";?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="../scripts/menu.js"></script>
    <script src="../scripts/whatsapp.js"></script>
    
</body>
</html>





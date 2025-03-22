<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Euroman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/servicios.css">
    <link rel="stylesheet" href="../styles/whatsapp.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <style>
        .body2 {
            background-color: #0c0c29;
        }
    </style>
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
</head>

<body class="body2">

    <div class="background">
        <div class="bubble"><img src="../carpetaeuromanimagenes/inicio/logoblanco.png" alt=""></div>
        <div class="bubble"><img src="../carpetaeuromanimagenes/inicio/logoblanco.png" alt=""></div>
        <div class="bubble"><img src="../carpetaeuromanimagenes/inicio/logoblanco.png" alt=""></div>
        <div class="bubble"><img src="../carpetaeuromanimagenes/inicio/logoblanco.png" alt=""></div>
    </div>

    <div class="flex-container">
    <div class="carousel-container">
        <div class="carousel-wrapper">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../carpetaeuromanimagenes/servicios/fondo.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../carpetaeuromanimagenes/servicios/fondo2.jpg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../carpetaeuromanimagenes/servicios/fondo3.jpg" class="d-block w-100" alt="Imagen 3">
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
    <?php include "../templates/menu.php"; ?>


    <div class="principal">
        <div class="tittle">
            <h1 class="titletheme">Servicio Tecnico</h1>
        </div>
        
        <div class="prymary">
            <div class="prymary--second">
                <div class="prymary--second card"></div>
                <div class="prymary--second card"></div>
                <div class="prymary--second card"></div>
                <div class="prymary--second card"></div>
            </div>
        <div class="second-1">

            <div class="third-2">
                <h1 class="tittle1">Talleres Reparacion</h1>
                <!--<h1 class="tittle1">-Motores</h1>
                <h1 class="tittle1">-Caja de Cambios</h1>
                <h1 class="tittle1">-Diferenciales</h1>-->
                <h2 class="descriptiontheme">Nuestro equipo altamente capacitado, respaldado por tecnología de diagnóstico avanzada, garantiza reparaciones precisas y eficientes. Utilizamos exclusivamente repuestos originales MAN para asegurar la durabilidad y rendimiento de cada vehículo. Con un enfoque en la rapidez y la eficiencia, minimizamos el tiempo de inactividad de su flota. Además, proporcionamos asesoramiento personalizado para optimizar el rendimiento y la longevidad de sus camiones. Confíe en nosotros para mantener sus vehículos en la carretera con la máxima confiabilidad.</h2>
            </div>
            <div class="third-1">
                <img src="https://www.sinotruk-howo-peru.com/data/attachment/202311/29/c9f3af55078603c14b3c061ed1ad7cc8.jpg" alt="D">
            </div>
        </div>
        <div class="second-1">
            <div class="third-2">
                <h1 class="tittle1">Enderezado y pintura</h1>
                <h2 class="descriptiontheme">En Euroman, nuestro compromiso con la excelencia se refleja en nuestro servicio completo de enderezado y pintura para camiones Man. Con técnicas avanzadas y materiales de primera calidad, restauramos la estética y la integridad estructural de su vehículo comercial con resultados impecables y duraderos. Confíe en nosotros para devolverle a su camión Man su esplendor original y una protección duradera contra los elementos del camino.</h2>
            </div>
            <div class="third-1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRchI0ybdRXkWGeiM9BS3aBFl9dHUWfyHck0vp1Sq8aDKTdqwuh79koTCvl3DT5pQEn1gU&usqp=CAU" alt="D">
            </div>
        </div>
        <div class="second-1">
            <div class="third-2">
                <h1 class="tittle1">Reparaciones electricas</h1>
                <h2 class="descriptiontheme">En Euroman, destacamos por nuestra especialización en reparaciones eléctricas para camiones Man. Nuestros expertos ofrecen diagnósticos detallados y soluciones eficaces para asegurar el funcionamiento óptimo de los sistemas eléctricos de su vehículo comercial. Confíe en nuestra experiencia probada para mantener su camión en la carretera de manera segura y eficiente, garantizando su tranquilidad y rendimiento continuo.</h2>
            </div>
            <div class="third-1">
                <img src="../carpetaeuromanimagenes/inicio/electrico.jpg" alt="D">
            </div>
        </div>
        <div class="second-1">
            <div class="third-2">
                <h1 class="tittle1">Sistemas Electronicos</h1>
                <h2 class="descriptiontheme">Euroman sobresale en la especialización de sistemas electrónicos para camiones Man. Nuestro equipo altamente capacitado ofrece diagnósticos avanzados y soluciones técnicas precisas para optimizar y mantener los sistemas electrónicos de su vehículo comercial. Confíe en nuestra experiencia para garantizar el rendimiento confiable y la seguridad de su camión en todo momento.</h2>
            </div>
            <div class="third-1">
                <img src="../carpetaeuromanimagenes/inicio/electronicos.jpg" alt="D">
            </div>

        </div>
        </div>

        <?php include "../templates/whatsapp.php"; ?>
        <?php include "../templates/footer.php"; ?>
        <script src="../scripts/whatsapp.js"></script>
        <script src="../scripts/menu.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
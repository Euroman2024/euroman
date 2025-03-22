<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - Euroman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../styles/whatsapp.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <style>
        .body2 {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://www.transporteprofesional.es/media/k2/items/cache/020f5bdda5e609eb70e175a012fe996c_XL.jpg') center fixed;
            background-size: cover;
            position: relative;

        }

        .social-link {
            text-decoration: none;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }


        /* Estilo de las tarjetas */
        .social-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
            text-align: center;
        }

        .social-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.15);
        }

        /* Contenedor de los iconos */
        .icon-container {
            background-color: #F0F0F0;
            border-radius: 50%;
            padding: 15px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .icon-container:hover {
            background-color: #f8f8f8;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            object-fit: contain;
            transition: transform 0.3s ease-in-out;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }

        /* Estilo del nombre de usuario */
        .social-name {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            transition: color 0.3s ease-in-out;
        }

        .social-link:hover .social-name {
            color: #007bff;
        }

        .card-body {
            background-color: rgb(255, 255, 255);
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .section-container {
            display: flex;
            justify-content: center;
            width: 40%;
            /* Centra las secciones en la página */            
            /* Espacio entre las secciones */
            flex-direction: column;
        }

        .sectionvision {
            width: 90%;
            background-color: rgb(56, 60, 76);
            border-radius: 20px;

        }

        .sectionmision {
            width: 90%;;
            background-color: rgb(56, 60, 76);
            border-radius: 20px;            

        }

        .sectionredes {
            width: 100%;
            background-color: rgb(56, 60, 76);
            border-radius: 20px;
        }

        .sectionredes2 {
            width: 48%;
            background-color: rgb(56, 60, 76);
            border-radius: 20px;
        }

        .mb-4 {
            color: white;
            margin-bottom: 0rem !important;
        }

        .redC {
            margin-top: 10px;
            background-color: white;
            margin-right: 0px;
            margin-left: 0px;

        }

        .redesI {
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .hf2 {
            font-size: 25px;
        }
        .lead{
            font-size: 0.9rem;
            margin-bottom: 0;
        }
        .titleV{
            font-size: 1.2rem;
        }
    </style>
    <style>
        .container-flex-container{
            
            display: flex;
            width: 100%;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            
            margin-top: 80px;
            
        }
        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 55%;
            /* Para que ocupe toda la altura de la ventana */                        
            /* Fondo claro */            
            margin: 0 auto;
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
        @media screen and (max-width: 768px) {
            .container-flex-container{
                flex-direction: column;            
            }
        .section-container {
            width: 90%;
            margin: 0 auto ;
             margin-top: 20px;
        }

        }
    </style>
</head>

<body class="body2">
    <?php include "../templates/menu.php"; ?>
    <div style="display: flex;margin-top:45px;"></div>

    <div class="container-flex-container">
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


    <div class="section-container">
        <section class="sectionvision animated">
            <h2 class="text-center mb-4 titleV">Visión</h2>
            <div class="car shadow-sm">
                <div class="card-body">
                    <p class="lead text-justify" style="color:rgb(56, 60, 76)">Nos vemos como pioneros en el desarrollo económico y tecnológico de Ambato y sus alrededores. En Euroman, aspiramos a ser reconocidos por nuestra excelencia, integridad y compromiso con la sostenibilidad. Buscamos no solo satisfacer las necesidades actuales de nuestros clientes, sino también anticipar y abordar proactivamente los desafíos futuros. Euroman se esfuerza por ser un motor de crecimiento, promoviendo la innovación y elevando los estándares de calidad en nuestro sector.</p>
                    <div class="text-center">
                        <img src="../carpetaeuromanimagenes/logo.png" alt="Descripción de la imagen" class="img-fluid rounded-circle" style="max-width: 100px;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Misión -->
        <section class="sectionmision animated mt-5">
            <h2 class="text-center mb-4 titleV">Misión</h2>
            <div class="car shadow-sm">
                <div class="card-body">
                    <p class="lead text-justify" style="color:rgb(56, 60, 76)">En Euroman, nos dedicamos a ofrecer soluciones innovadoras y servicios de alta calidad en sector de vehículos pesados, fortaleciendo así el tejido empresarial de Ambato y contribuyendo al bienestar de nuestra comunidad. Nuestra misión es ser líderes en la entrega de productos y servicios excepcionales, superando las expectativas de nuestros clientes y generando un impacto positivo en la sociedad.</p>
                    <div class="text-center">
                        <img src="../carpetaeuromanimagenes/logo.png" alt="Descripción de la imagen" class="img-fluid rounded-circle" style="max-width: 100px;">
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>

    

    <div style="display:flex;width:94%;margin:0 auto;flex-direction:column;">
        <section class="sectionredes animated mt-5">
            <h2 class="text-center mb-4">Ubicacion</h2>
            <div class="car shadow-sm">
                <div class="card-body">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.916140398168!2d-78.58998612444155!3d-1.2184727987698987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d381fbaf691c2f%3A0x952658047d9b4617!2sEuroman%20-%20Repuestos%20y%20servicio%20t%C3%A9cnico%20MAN!5e0!3m2!1ses!2sec!4v1720811362175!5m2!1ses!2sec"
                        width="100%" height="300px" style="border:0;margin:0 auto;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </section>
    </div>


    <div style="display:flex;width:94%;margin:0 auto;flex-direction:row;justify-content:space-between;">
  
        <section class="sectionredes2 animated mt-5" >
            <h2 class="text-center mb-4">Telefonos</h2>            
            <div class="car shadow-sm">
                <div class="card-body">
                    <p class="lead " style="color:rgb(56, 60, 76);text-align: center;">   
                        <br>                 
                        <span class="hf2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                            </svg>
                            0993249756
                        </span>                        
                        <br>
                        <br>
                        <br>
                        <span class="hf2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                            </svg>
                            0985359894
                        </span>                        
                        <br>
                        <br>
                        <br>
                        <span class="hf2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                            </svg>
                            0994658275
                        </span>
                        <br>
                        <br>

                    </p>

                </div>
            </div>
        </section>
        <section class="sectionredes2 animated mt-5">
            <h2 class="text-center mb-4">Nuestras redes sociales</h2>        
            <div class="redC row justify-content-center">
                <!-- TikTok -->
                <div class="redesI col-md-3 ">
                    <div class="social-card d-flex flex-column align-items-center p-4">
                        <a href="https://www.tiktok.com/@euromanambato" target="_blank" class="social-link">
                            <div class="icon-container">
                                <img src="https://e7.pngegg.com/pngimages/545/550/png-clipart-tik-tok-icon-circle-tech-companies-thumbnail.png" alt="Logo de TikTok" class="social-icon">
                            </div>
                            <h5 class="social-name">euromanambato</h5>
                        </a>
                    </div>
                </div>

                <!-- Facebook -->
                <div class="redesI col-md-3 ">
                    <div class="social-card d-flex flex-column align-items-center p-4">
                        <a href="https://www.facebook.com/euroman.ambato.1/" target="_blank" class="social-link">
                            <div class="icon-container">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/480px-Facebook_Logo_%282019%29.png" alt="Logo de Facebook" class="social-icon">
                            </div>
                            <h5 class="social-name">euroman.ambato.1</h5>
                        </a>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="redesI col-md-3 ">
                    <div class="social-card d-flex flex-column align-items-center p-4">
                        <a href="https://www.instagram.com/euroman_ec/" target="_blank" class="social-link">
                            <div class="icon-container">
                                <img src="https://static.vecteezy.com/system/resources/previews/017/743/717/non_2x/instagram-icon-logo-free-png.png" alt="Logo de Instagram" class="social-icon">
                            </div>
                            <h5 class="social-name">euroman_ec</h5>
                        </a>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="redesI col-md-3">
                    <div class="social-card d-flex flex-column align-items-center p-4">
                        <a href="https://wa.me/593993249756" target="_blank" class="social-link">
                            <div class="icon-container">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/WhatsApp_icon.png/479px-WhatsApp_icon.png" alt="Logo de WhatsApp" class="social-icon">
                            </div>
                            <h5 class="social-name"><!--+593 993249756-->Euroman</h5>
                        </a>
                    </div>
                </div>
            </div> <!-- End row -->
        </section>
    </div>


    <?php include "../templates/whatsapp.php"; ?>
    <?php include "../templates/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="../scripts/whatsapp.js"></script>
    <script src="../scripts/quienesSomos/animated.js"></script>
    <script src="../scripts/menu.js"></script>

</body>

</html>
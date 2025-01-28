<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - Euroman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/whatsapp.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="../styles/footer.css">    
    <style>
        .body2 {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://www.transporteprofesional.es/media/k2/items/cache/020f5bdda5e609eb70e175a012fe996c_XL.jpg') center fixed;
            background-size: cover;
            position: relative;

        }
        .social-link{
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
        .card-body{
            background-color:rgb(255, 255, 255);
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .sectionvision{
            margin-top: 100px;
            background-color: rgb(56, 60, 76);
            border-radius: 20px;
        }
        .sectionmision{
            background-color: rgb(56, 60, 76);
            border-radius: 20px;
        }
        .mb-4{
            color: white;
            margin-bottom: 0rem !important;                       
        }
        .redC{
            margin-top: 20px;
        }
        
    </style>
</head>

<body class="body2">
    <?php include "../templates/menu.php"; ?>
    <div style="display: flex;margin-top:45px;"></div>
    <div class="container mt-5" style="margin-top:440px">
        <!-- Sección de Visión -->
        <section class="sectionvision animated">
            <h2 class="text-center mb-4">Visión</h2>
            <div class="car shadow-sm">
                <div class="card-body">
                    <p class="lead text-justify" style="color:rgb(56, 60, 76)">Nos vemos como pioneros en el desarrollo económico y tecnológico de Ambato y sus alrededores. En Euroman, aspiramos a ser reconocidos por nuestra excelencia, integridad y compromiso con la sostenibilidad. Buscamos no solo satisfacer las necesidades actuales de nuestros clientes, sino también anticipar y abordar proactivamente los desafíos futuros. Euroman se esfuerza por ser un motor de crecimiento, promoviendo la innovación y elevando los estándares de calidad en nuestro sector.</p>                   
                    <div class="text-center">
                        <img src="../carpetaeuromanimagenes/logo.png" alt="Descripción de la imagen" class="img-fluid rounded-circle" style="max-width: 200px;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Misión -->
        <section class="sectionmision animated mt-5">
            <h2 class="text-center mb-4">Misión</h2>
            <div class="car shadow-sm">
                <div class="card-body">
                    <p class="lead text-justify" style="color:rgb(56, 60, 76)">En Euroman, nos dedicamos a ofrecer soluciones innovadoras y servicios de alta calidad en sector de vehículos pesados, fortaleciendo así el tejido empresarial de Ambato y contribuyendo al bienestar de nuestra comunidad. Nuestra misión es ser líderes en la entrega de productos y servicios excepcionales, superando las expectativas de nuestros clientes y generando un impacto positivo en la sociedad.</p>                    
                    <div class="text-center">
                        <img src="../carpetaeuromanimagenes/logo.png" alt="Descripción de la imagen" class="img-fluid rounded-circle" style="max-width: 200px;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Redes Sociales -->
        <section class="sectionredes animated mt-5">
            <h2 class="text-center mb-4">Síguenos en Redes Sociales</h2>
            <div class="redC row justify-content-center">
                <!-- TikTok -->
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mb-4">
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
                <div class="col-md-3 mb-4">
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
        </section> <!-- End Redes Sociales -->




    </div> <!-- End container -->

    <?php include "../templates/whatsapp.php"; ?>
    <?php include "../templates/footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../scripts/whatsapp.js"></script>
    <script src="../scripts/quienesSomos/animated.js"></script>
    <script src="../scripts/menu.js"></script>
    
</body>

</html>
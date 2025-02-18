<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Repuesto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/menu.css">
    <style>
        .bg-light {
            margin: 0;
            margin-top: 100px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            /*background:radial-gradient(circle, rgb(219, 225, 255), rgb(255, 255, 255)) ;*/
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://media.licdn.com/dms/image/C4D1BAQGHkvN5na3Q5Q/company-background_10000/0/1583733380340/man_camionesybuses_cover?e=2147483647&v=beta&t=uqLHFOKjoJI3bsYU3gqSsEGHxBa0a1Qha4Mle5XZ-9M') center;
            background-size: cover;
            color: #252525;
        }
    </style>
    <style>
        .detalle-container {
            max-width: 900px;
            margin: auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .detalle-imagen img {
            width: 100%;
            border-radius: 8px;
            object-fit: cover;
        }

        .detalle-info h2 {
            font-weight: 700;
            color: #0056b3;
        }

        .detalle-precio {
            font-size: 2rem;
            font-weight: bold;
            color: #28a745;
        }

        .btn-back {
            display: inline-block;
            margin-bottom: 15px;
            font-size: 1rem;
        }
    </style>
</head>

<body class="bg-light">
    <div style="display:flex;width:100%;margin-top:100px;"></div>
    <?php include "../templates/menu.php"; ?>
    <div class="container py-5">
        <div class="detalle-container">
            <a href="javascript:history.back()" class="btn btn-secondary btn-back">
                <i class="bi bi-arrow-left"></i> Regresar
            </a>
            <div class="row g-4 align-items-center" id="detalle-repuesto">
                <div class="col-12 text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Cargando...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const params = new URLSearchParams(window.location.search);
            const repuestoId = params.get("repuesto_id");

            if (repuestoId) {
                fetch(`obtener_repuestoC.php?repuesto_id=${repuestoId}`)
                    .then(response => response.json())
                    .then(repuesto => {
                        const detalleRepuesto = document.getElementById("detalle-repuesto");
                        detalleRepuesto.innerHTML = `
                            <div class="col-md-6 detalle-imagen">
                                <img src="../imagenes/${repuesto.imagen1}" alt="${repuesto.nombre_repuesto}" class="img-fluid shadow-sm">
                            </div>
                            <div class="col-md-6 detalle-info">
                                <h2>${repuesto.nombre_repuesto}</h2>
                                <p class="text-muted"><strong>Descripción:</strong> ${repuesto.descripcion}</p>                                
                                <a href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ${repuesto.nombre_repuesto} y quiero obtener más información sobre el producto."
                                   class="btn btn-success mt-3">
                                    <i class="bi bi-whatsapp"></i> Cotizar por WhatsApp
                                </a>
                            </div>
                        `;
                    })
                    .catch(error => {
                        document.getElementById("detalle-repuesto").innerHTML = `
                            <div class="col-12 text-center">
                                <div class="alert alert-danger" role="alert">
                                    Error al cargar los detalles del repuesto.
                                </div>
                            </div>
                        `;
                        console.error("Error al obtener detalles del repuesto:", error);
                    });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
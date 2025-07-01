<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        .carousel-inner img {
            height: 400px;
            object-fit: cover;
            border-radius: 1rem;
        }
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand img {
            max-height: 50px;
        }
        .section-box {
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .section-title {
            color: #4e342e;
            font-weight: bold;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-nav .nav-link {
            color: #4e342e;
        }
        .navbar-nav .nav-link:hover {
            color: #a0522d;
        }
        .navbar-brand {
            color: #4e342e;
        }
        .navbar-brand:hover {
            color: #a0522d;
        }   
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="?pid=<?php echo base64_encode("presentacion/Inicio.php") ?>">
                <img src="img/LogoAplicacion.png" alt="Logo" style="max-height: 50px;" class="img-fluid me-2" />
                <span>TheWalkingPets</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="?pid=<?php echo base64_encode("presentacion/Inicio.php") ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="?pid=<?php echo base64_encode("presentacion/InicioContactenos.php") ?>">Contáctenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pid=<?php echo base64_encode("presentacion/Autenticar.php") ?>">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pid=<?php echo base64_encode("presentacion/CrearCuenta.php") ?>">Crear cuenta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

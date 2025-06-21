<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-inner img {
            height: 400px;
            object-fit: cover;
            border-radius: 1rem;
        }
    </style>
</head>

<body>
    <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="img/LogoAplicacion.png" alt="Logo" style="max-height: 100px;" class="img-fluid me-2" />
        <span class="fw-bold">TheWalkingPets</span>
    </a>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold"
                href="?pid=<?php echo base64_encode("presentacion/Inicio.php") ?>">TheWalkingPets</a>
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
                        <a class="nav-link" href="presentacion/Autenticar.php">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
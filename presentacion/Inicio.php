<?php include("Extremos/Cabeza.php"); ?>
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="container-fluid p-0">
                <div class="position-relative">
                    <!-- Imagen principal -->
                    <img id="imgPrincipal"
                        src="https://images.unsplash.com/photo-1601758003122-58e5f2b28597?auto=format&fit=crop&w=1200&h=400&q=80"
                        alt="Paseador de mascotas" class="img-fluid w-100 imagen-principal">
                    <!-- Asegura el ancho total -->

                    <!-- Texto encima -->
                    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
                        <h1 class="display-4">Bienvenido</h1>
                        <p class="lead">¡Caminamos con amor, ladrido tras ladrido!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Secciones: Misión, Visión y Objetivos -->
    <!-- Secciones: Misión, Visión y Objetivos -->
    <div class="row justify-content-center text-center mt-5">
        <div class="col-12 col-md-4 mb-4 p-3 bg-light-brown text-dark rounded-4 shadow">
            <h3>Misión</h3>
            <p>
                En <strong>The WalkingPets</strong>, nos dedicamos a ofrecer servicios profesionales de paseo y cuidado
                de mascotas con amor, responsabilidad y compromiso, asegurando su bienestar físico, emocional y social,
                mientras facilitamos la vida diaria de sus dueños.
            </p>
        </div>
        <div class="col-12 col-md-4 mb-4 p-3 bg-light-brown text-dark rounded-4 shadow">
            <h3>Visión</h3>
            <p>
                Ser la empresa de referencia en paseo y atención de mascotas a nivel local y regional, reconocida por su
                calidad de servicio, su trato humano y responsable, y por ser un aliado confiable para cada familia con
                mascotas.
            </p>
        </div>
        <div class="col-12 col-md-4 mb-4 p-3 bg-light-brown text-dark rounded-4 shadow">
            <h3>Objetivos</h3>
            <ul class="text-start">
                <li>Brindar paseos seguros, divertidos y adaptados a las necesidades específicas de cada mascota.</li>
                <li>Promover el bienestar integral de los animales a través de ejercicio regular, juego y socialización.
                </li>
                <li>Establecer relaciones de confianza con los clientes mediante atención personalizada y reportes
                    diarios.</li>
                <li>Capacitar continuamente al equipo en manejo animal, comportamiento canino y primeros auxilios.</li>
                <li>Incorporar tecnología (app o sistema de seguimiento) para mejorar la experiencia del cliente.</li>
                <li>Expandir servicios de <strong>The WalkingPets</strong> incluyendo guardería, entrenamiento básico y
                    asesoría veterinaria.</li>
                <li>Implementar prácticas sostenibles y éticas en todas nuestras actividades.</li>
            </ul>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para cambiar imagen aleatoriamente -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const imagenes = [
            "img/Presentacion1.webp"
        ];
        const aleatoria = imagenes[Math.floor(Math.random() * imagenes.length)];
        document.getElementById("imgPrincipal").src = aleatoria;
    });
</script>

<?php include("Extremos/Pie.php"); ?>
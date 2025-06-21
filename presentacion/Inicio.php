<?php include("presentacion/Extremos/Cabeza.php"); ?>

<div class="container py-5">

  <!-- Imagen principal con texto encima -->
  <div class="row">
    <div class="col">
      <div class="position-relative rounded-4 overflow-hidden shadow">
        <img id="imgPrincipal"
             src="https://images.unsplash.com/photo-1601758003122-58e5f2b28597?auto=format&fit=crop&w=1200&h=400&q=80"
             alt="Paseador de mascotas"
             class="img-fluid w-100 imagen-principal">
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center text-white-shadow">
          <h1 class="display-4 fw-bold">Bienvenido</h1>
          <p class="lead fs-5">¡Caminamos con amor, ladrido tras ladrido!</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Secciones: Misión, Visión, Objetivos -->
  <div class="row justify-content-center text-center mt-5 g-4">
    <div class="col-12 col-md-4 p-4 rounded-4 shadow section-box">
      <h3 class="section-title mb-3">Misión</h3>
      <p>
        En <strong>The WalkingPets</strong>, nos dedicamos a ofrecer servicios profesionales de paseo y cuidado
        de mascotas con amor, responsabilidad y compromiso, asegurando su bienestar físico, emocional y social,
        mientras facilitamos la vida diaria de sus dueños.
      </p>
    </div>

    <div class="col-12 col-md-4 p-4 rounded-4 shadow section-box">
      <h3 class="section-title mb-3">Visión</h3>
      <p>
        Ser la empresa de referencia en paseo y atención de mascotas a nivel local y regional, reconocida por su
        calidad de servicio, su trato humano y responsable, y por ser un aliado confiable para cada familia con
        mascotas.
      </p>
    </div>

    <div class="col-12 col-md-4 p-4 rounded-4 shadow section-box text-start">
      <h3 class="section-title mb-3 text-center">Objetivos</h3>
      <ul>
        <li>Brindar paseos seguros, divertidos y adaptados a cada mascota.</li>
        <li>Promover el bienestar integral con ejercicio y socialización.</li>
        <li>Establecer relaciones de confianza con atención personalizada.</li>
        <li>Capacitar al equipo en manejo animal y primeros auxilios.</li>
        <li>Incorporar tecnología para mejorar la experiencia del cliente.</li>
        <li>Expandir servicios: guardería, entrenamiento y asesoría veterinaria.</li>
        <li>Implementar prácticas sostenibles y éticas.</li>
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

<?php include("presentacion/Extremos/Pie.php"); ?>
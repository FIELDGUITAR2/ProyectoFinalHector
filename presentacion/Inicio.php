<?php include("presentacion/Extremos/Cabeza.php"); ?>

<div class="container py-5">

    <div class="container my-5">
    <h2 class="text-center mb-4" style="color: #4e342e;">Galería de The WalkingPets</h2>

    <div id="carruselMascotas" class="carousel slide shadow rounded" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Presentacion1.webp" class="d-block w-100" alt="Perro 1">
        </div>
        <div class="carousel-item">
          <img src="img/Presentacion3.webp" class="d-block w-100" alt="Perro 2">
        </div>
        <div class="carousel-item">
          <img src="img/Presentacion2.jpg" class="d-block w-100" alt="Perro 3">
        </div>
      </div>

      <!-- Botones de control -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carruselMascotas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carruselMascotas" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

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
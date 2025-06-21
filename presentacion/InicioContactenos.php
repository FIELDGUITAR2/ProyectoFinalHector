<?php
include("presentacion/Extremos/Cabeza.php");
?>
<div class="container my-5">
  <div class="row">
    <!-- Columna del Mapa -->
    <div class="col-md-6 mb-4">
      <h4 class="mb-3">Ubicación</h4>
      <div class="ratio ratio-4x3">
        <iframe
          src="https://www.google.com/maps/embed?pb=!4v1750528449017!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQ2s1SWpsbWdF!2m2!1d4.629365711660336!2d-74.05051642264509!3f296.25330423353756!4f1.9076132031608637!5f0.7820865974627469"
          style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <!-- Columna de la Tabla -->
    <div class="col-md-6">
      <h4 class="mb-3">Administradores</h4>
      <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contacto</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jose Samir Gonzalez Ortiz</td>
            <td>josagoor@gmail.com</td>
            <td>123456789</td>
          </tr>
          <tr>
            <td>Natalia Guzman</td>
            <td>NatGuz@gmail.com</td>
            <td>987654321</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include("presentacion/Extremos/Pie.php");
?>
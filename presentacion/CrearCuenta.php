<?php
    include("presentacion/Extremos/Cabeza.php");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow" style="background-color: #f5f5dc; border: none;">
                <div class="card-header text-center" style="background-color: #3e2723; color: #fff;">
                    <h4>Crear Cuenta</h4>
                </div>
                <div class="card-body">
                    <form action="procesar_crear_duenio.php" method="post" novalidate></form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label" style="color: #3e2723;">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required style="background-color: #fff; border-color: #795548;">
                            <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color: #3e2723;">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" required style="background-color: #fff; border-color: #795548;">
                            <div class="invalid-feedback">Por favor, ingrese su apellido.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: #3e2723;">Correo electrónico:</label>
                            <input type="email" id="email" name="email" class="form-control" required style="background-color: #fff; border-color: #795548;">
                            <div class="invalid-feedback">Por favor, ingrese un correo electrónico válido.</div>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label" style="color: #3e2723;">Teléfono:</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" required style="background-color: #fff; border-color: #795548;">
                            <div class="invalid-feedback">Por favor, ingrese su teléfono.</div>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label" style="color: #3e2723;">Dirección:</label>
                            <input type="text" id="direccion" name="direccion" class="form-control" required style="background-color: #fff; border-color: #795548;">
                            <div class="invalid-feedback">Por favor, ingrese su dirección.</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn" style="background-color: #795548; color: #fff;">Crear Cuenta</button>
                            <button type="reset" class="btn btn-secondary" style="background-color: #fff; color: #3e2723; border-color: #795548;">Limpiar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Bootstrap 5 validation
(function () {
    'use strict'
    var forms = document.querySelectorAll('form')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
<?php
    include("presentacion/Extremos/Pie.php");
?>
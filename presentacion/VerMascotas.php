<?php
    include "ExtremosRol/Cabeza.php";  

    $idDuenio = $_SESSION["id"];

    require_once "logica/Mascota.php";

    if (isset($_POST["Eliminar"])) {
        $idEliminar = intval($_POST["Eliminar"]);// Para depuración, puedes eliminar esta línea después
        $mascotaEliminar = new Mascota();
        $mascotaEliminar->setId($idEliminar);
        $mascotaEliminar->MatarMascota();
        $mensaje = "Mascota eliminada correctamente.";
        $mensajeTipo = "success";
    }
?>

<div class="container mt-4">
    <h2>Mascotas</h2>
    <div id="mensajeAjax"></div>
    <form id="formMascotas" class="needs-validation" novalidate>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Estado Perrito</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaMascotas">
                <?php
                $mascota = new Mascota();
                $mascota->setIdDuenio($idDuenio);
                $mascotas = $mascota->VerMascota();
                if ($mascotas) {
                    foreach ($mascotas as $mas) {
                        $desactivar = ($mas->getIdEstadoPerrito() == 'Morido');
                        echo "<tr data-id='" . $mas->getId() . "'>";
                        echo "<td>" . $mas->getId() . "</td>";
                        echo "<td>" . $mas->getNombre() . "</td>";
                        echo "<td>" . $mas->getRaza() . "</td>";
                        echo "<td>" . $mas->getFechaNacimiento() . "</td>";
                        echo "<td>" . $mas->getIdEstadoPerrito() . "</td>";
                        echo "<td>
                            <button type='button' class='btn btn-danger btnEliminar' data-id='" . $mas->getId() . "' ".($desactivar ? 'disabled' : '').">en el mas alla</button>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No hay mascotas registradas.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btnEliminar').forEach(function(btn) {
        btn.addEventListener('click', function() {
            if (!confirm('¿Estás seguro de eliminar esta mascota?')) return;
            var id = this.getAttribute('data-id');
            var formData = new FormData();
            formData.append('Eliminar', id);

            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(resp => resp.text())
            .then(html => {
                var parser = new DOMParser();
                var doc = parser.parseFromString(html, 'text/html');
                var nuevoTbody = doc.querySelector('#tablaMascotas');
                var mensaje = doc.querySelector('#mensajeAjax');
                if (nuevoTbody) {
                    document.querySelector('#tablaMascotas').innerHTML = nuevoTbody.innerHTML;
                }
                if (mensaje) {
                    document.querySelector('#mensajeAjax').innerHTML = mensaje.innerHTML;
                }
                document.querySelectorAll('.btnEliminar').forEach(function(btn) {
                    btn.addEventListener('click', arguments.callee);
                });
            });
        });
    });
});
</script>

<?php if (isset($mensaje)): ?>
    <div class="alert alert-<?php echo $mensajeTipo; ?>" id="mensajeAjax">
        <?php echo $mensaje; ?>
    </div>
<?php endif; ?>

<?php
    include "ExtremosRol/Pie.php";
?>

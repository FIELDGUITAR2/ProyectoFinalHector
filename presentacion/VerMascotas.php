<?php
    include "ExtremosRol/Cabeza.php";  

    $idDuenio = $_SESSION["id"];

    require_once "logica/Mascota.php";

    // Eliminar mascota si se recibe el parámetro por GET
    if (isset($_GET["eliminar_id"])) {
        $idEliminar = intval($_GET["eliminar_id"]);
        $mascotaEliminar = new Mascota();
        $mascotaEliminar->setId($idEliminar);
        $mascotaEliminar->EliminarMascota();
        $mensaje = "Mascota eliminada correctamente.";
        $mensajeTipo = "success";
    }
?>

<div class="container mt-4">
    <h2>Mascotas</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mascota = new Mascota();
            $mascota->setIdDuenio($idDuenio);
            $mascotas = $mascota->VerMascota();
            if ($mascotas) {
                foreach ($mascotas as $mas) {
                    echo "<tr>";
                    echo "<td>" . $mas->getId() . "</td>";
                    echo "<td>" . $mas->getNombre() . "</td>";
                    echo "<td>" . $mas->getRaza() . "</td>";
                    echo "<td>" . $mas->getFechaNacimiento() . "</td>";
                    echo "<td>
                        <a href='VerMascotas.php?eliminar_id=" . $mas->getId() . "' class='btn btn-danger btn-sm' onclick=\"return confirm('¿Seguro que deseas eliminar esta mascota?');\">Eliminar</a>
                      </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay mascotas registradas.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
    include "ExtremosRol/Pie.php";
?>

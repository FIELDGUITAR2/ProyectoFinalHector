<?php
    include "ExtremosRol/Cabeza.php";  

    $idDuenio = $_SESSION["id"];

    require_once "logica/Mascota.php";

    // Eliminar mascota si se recibe el parámetro por GET
    if (isset($_POST["Eliminar"])) {
        $idEliminar = intval($_POST["Eliminar"]);// Para depuración, puedes eliminar esta línea después
        $mascotaEliminar = new Mascota();
        $mascotaEliminar->EliminarMascota($idEliminar);
        $mensaje = "Mascota eliminada correctamente.";
        $mensajeTipo = "success";
    }
?>

<div class="container mt-4">
    <h2>Mascotas</h2>
    <form action="" method="post" class="needs-validation" novalidate>
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
                            <button type='submit' name='Eliminar' value='" . $mas->getId() . "' class='btn btn-danger'>en el mas alla</button>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No hay mascotas registradas.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
</div>

<?php
    include "ExtremosRol/Pie.php";
?>

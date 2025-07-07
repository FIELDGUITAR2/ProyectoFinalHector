<?php
    include("ExtremosRol/Cabeza.php");  

    if (!isset($_SESSION["id"])) {
        header("Location: /login.php");
        exit();
    }

    $idDuenio = $_SESSION["id"];
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
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("logica/Mascota.php");
            
            $mascota = new Mascota();
            $mascota->setIdDuenio($idDuenio);
            $mascotas = $mascota->VerMascota();
            if ($mascotas) {
                foreach ($mascotas as $mas) {
                    echo "<tr>";
                    echo "<td>" .$mas->getId() . "</td>";
                    echo "<td>" .$mas->getNombre() . "</td>";
                    echo "<td>" .$mas->getRaza() . "</td>";
                    echo "<td>" .$mas->getFechaNacimiento() . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay mascotas registradas.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
    include("ExtremosRol/Pie.php");
?>

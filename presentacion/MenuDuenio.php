<?php
    require_once("logica/Duenio.php");
    $id = $_SESSION["id"];
    $duenio = new Duenio($id);
    $duenio->Consultar();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h2 class="mb-4">Información del Dueño</h2>
    <table class="table table-striped table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?php echo $duenio->getId(); ?></td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td><?php echo $duenio->getNombre(); ?></td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td><?php echo $duenio->getApellido(); ?></td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td><?php echo $duenio->getTelefono(); ?></td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td><?php echo $duenio->getDireccion(); ?></td>
            </tr>
            <tr>
                <th>Foto</th>
                <td><?php echo $duenio->getFoto(); ?></td>
            </tr>

            <!-- Agrega más filas según los atributos de la clase Duenio -->
        </tbody>
    </table>
</div>

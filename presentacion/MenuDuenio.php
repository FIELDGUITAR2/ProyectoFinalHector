<?php
    require_once("logica/Duenio.php");
    $id = $_SESSION["id"];
    $duenio = new Duenio($id);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h2 class="mb-4">Mascotas</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo htmlspecialchars($duenio->getId()); ?></td>
                <td><?php echo htmlspecialchars($duenio->getNombre()); ?></td>
                <td><?php echo htmlspecialchars($duenio->getApellido()); ?></td>
                <td><?php echo htmlspecialchars($duenio->getEmail()); ?></td>
                
            </tr>
        </tbody>
    </table>
</div>

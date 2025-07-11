<?php
include "presentacion/ExtremosRol/Cabeza.php";
require_once "logica/Raza.php";
require_once "logica/EstadoPerrito.php";

$idDuenio = $_SESSION['id'] ?? '';

$nombreMascota = trim($_POST['nombreMascota'] ?? '');
$peso = $_POST['peso'] ?? '';
$observacion = trim($_POST['observacion'] ?? '');
$estadoPerrito = $_POST['estadoPerrito'] ?? '';
$raza = $_POST['raza'] ?? '';
$fechaNacimiento = $_POST['fechaNacimiento'] ?? '';
$mensaje = '';
$mensajeTipo = '';
$rutaCompleta = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "logica/Mascota.php";

    if (isset($_POST['submit'])) {
        $carpetaDestino = "imagenes/";

        // Obtener info del archivo
        $nombreArchivo = basename($_FILES["imagen"]["name"]);
        $rutaCompleta = $carpetaDestino . $nombreArchivo;

        // Validar que sea una imagen
        $tipoArchivo = strtolower(pathinfo($rutaCompleta, PATHINFO_EXTENSION));
        $permitidos = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (in_array($tipoArchivo, $permitidos)) {
            // Mover el archivo al destino
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaCompleta)) {
                echo "<p>Imagen subida exitosamente.</p>";
                echo "<img src='$rutaCompleta' alt='Imagen subida' width='300'>";
            } else {
                echo "<p>Error al subir la imagen.</p>";
            }
        } else {
            echo "<p>Solo se permiten imágenes JPG, PNG, GIF, WEBP.</p>";
        }
    }

    $mascota = new Mascota(
        "",
        $nombreMascota,
        $raza,
        $fechaNacimiento,
        $rutaCompleta,
        $peso,
        $idDuenio,
        $estadoPerrito,
        $observacion
    );
    if ($mascota->InsertarMascota()) {
        $mensaje = "Mascota añadida correctamente.";
        $mensajeTipo = "success";
        $nombreMascota = $peso = $observacion = $estadoPerrito = $raza = '';
    } else {
        $mensaje = "Error al añadir la mascota.";
        $mensajeTipo = "danger";
    }
}

/*if (isset($_POST['submit'])) {
    $carpetaDestino = "imagenes/";

    // Obtener info del archivo
    $nombreArchivo = basename($_FILES["imagen"]["name"]);
    $rutaCompleta = $carpetaDestino . $nombreArchivo;

    // Validar que sea una imagen
    $tipoArchivo = strtolower(pathinfo($rutaCompleta, PATHINFO_EXTENSION));
    $permitidos = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (in_array($tipoArchivo, $permitidos)) {
        // Mover el archivo al destino
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaCompleta)) {
            echo "<p>Imagen subida exitosamente.</p>";
            echo "<img src='$rutaCompleta' alt='Imagen subida' width='300'>";
        } else {
            echo "<p>Error al subir la imagen.</p>";
        }
    } else {
        echo "<p>Solo se permiten imágenes JPG, PNG, GIF, WEBP.</p>";
    }
}*/
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <h2 class="mb-4 text-center">Añadir o editar</h2>
            <p class="text-center">Esta sección permite a los dueños añadir mascotas a su cuenta</p>
            <p class="text-center">o editar los datos de su mascota.</p>
            <?php if ($mensaje): ?>
                <div class="alert alert-<?= $mensajeTipo ?> mt-3"><?= $mensaje ?></div>
            <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="nombreMascota" class="form-label">Nombre de la Mascota:</label>
                    <input type="text" id="nombreMascota" name="nombreMascota" class="form-control" required
                        value="<?= htmlspecialchars($nombreMascota) ?>">
                    <div class="invalid-feedback">Por favor, ingrese el nombre de la mascota.</div>
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso:</label>
                    <input type="number" id="peso" name="peso" class="form-control" required step="0.01" min="0"
                        value="<?= htmlspecialchars($peso) ?>">
                    <div class="invalid-feedback">Por favor, ingrese el peso de la mascota.</div>
                </div>
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" required
                        value="<?= htmlspecialchars($_POST['fechaNacimiento'] ?? '') ?>" pattern="\d{4}-\d{2}-\d{2}">
                    <div class="invalid-feedback">Por favor, seleccione la fecha de nacimiento (aaaa-mm-dd).</div>
                </div>
                <div class="mb-3">
                    <label for="observacion" class="form-label">Observación:</label>
                    <textarea id="observacion" name="observacion" class="form-control" rows="3"
                        required><?= htmlspecialchars($observacion) ?></textarea>
                    <div class="invalid-feedback">Por favor, ingrese una observación.</div>
                </div>
                <div class="mb-3">
                    <label for="estadoPerrito" class="form-label">Estado del Perrito:</label>
                    <select id="estadoPerrito" name="estadoPerrito" class="form-select" required>
                        <option value="" disabled <?= $estadoPerrito == '' ? 'selected' : '' ?>>Seleccione el estado
                        </option>
                        <?php
                        $estadoPerritoObj = new EstadoPerrito();
                        $estados = $estadoPerritoObj->MostrarEstados();
                        if ($estados && is_array($estados)) {
                            foreach ($estados as $estado) {
                                $selected = ($estadoPerrito == $estado->getId()) ? 'selected' : '';
                                //echo "<option value='{$estado->getId()}' $selected>{$estado->getValor()}</option>";
                                echo "<option value='{$estado->getId()}' >{$estado->getValor()}</option>";
                            }
                        } else {
                            echo "<option value=''>No hay estados disponibles</option>";
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">Por favor, seleccione el estado del perrito.</div>
                </div>
                <div class="mb-3">
                    <label for="raza" class="form-label">Raza:</label>
                    <select id="raza" name="raza" class="form-select" required>
                        <option value="" disabled <?= $raza == '' ? 'selected' : '' ?>>Seleccione la raza</option>
                        <?php
                        $razaObj = new Raza();
                        $razas = $razaObj->MostrarRazas();
                        if ($razas && is_array($razas)) {
                            foreach ($razas as $r) {
                                $selected = ($raza == $r->getId()) ? 'selected' : '';
                                echo "<option value='{$r->getId()}' $selected>{$r->getNombre()}</option>";
                            }
                        } else {
                            echo "<option value=''>No hay razas disponibles</option>";
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">Por favor, seleccione la raza.</div>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen de la Mascota:</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*" required>
                    <div class="invalid-feedback">Por favor, seleccione una imagen.</div>
                </div>

                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary">Insertar mascota</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "presentacion/ExtremosRol/Pie.php";
?>
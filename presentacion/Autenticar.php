<?php
if (isset($_GET["sesion"])) {
    if ($_GET["sesion"] == "false") {
        session_destroy();
    }
}
$error = false;
if (isset($_POST["autenticar"])) {
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];
    $admin = new Admin("", "", "", $correo, $clave);
    if ($admin->autenticar()) {
        $_SESSION["id"] = $admin->getId();
        $_SESSION["rol"] = "admin";
        header("Location: ?pid=" . base64_encode("presentacion/sesionAdmin.php"));
    } else {
        $medico = new Medico("", "", "", $correo, $clave);
        if ($medico->autenticar()) {
            $_SESSION["id"] = $medico->getId();
            $_SESSION["rol"] = "medico";
            header("Location: ?pid=" . base64_encode("presentacion/sesionMedico.php"));
        } else {
            $paciente = new Paciente("", "", "", $correo, $clave);
            if ($paciente->autenticar()) {
                $_SESSION["id"] = $paciente->getId();
                $_SESSION["rol"] = "paciente";
                header("Location: ?pid=" . base64_encode("presentacion/sesionPaciente.php"));
            } else {
                $error = true;
            }
        }
    }
}
?>
<?php
include("presentacion/Extremos/Cabeza.php");
    ?>

<div class="login-container">
    <h2 class="text-center mb-4 login-title">Iniciar Sesión</h2>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="••••••••" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-dark-brown">Ingresar</button>
      </div>
    </form>
  </div>

<?php
include("presentacion/Extremos/Pie.php");
    ?>
<?php
    // Solo si se nesesita
    
    require_once("logica/Admin.php");
    require_once("logica/Duenio.php");
    require_once("persistencia/Conexion.php");
    require_once("persistencia/AdminDAO.php");
    require_once("persistencia/DuenioDAO.php");
    

    // Iniciar sesión si no está iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Manejo de cierre de sesión
    if (isset($_GET["sesion"]) && $_GET["sesion"] == "false") {
        session_destroy();
    }

    $error = false;

    // Lógica de autenticación
    if (isset($_POST["autenticar"])) {
        $correo = $_POST["correo"];
        $clave = $_POST["clave"];
        $admin = new Admin();
        $admin->setTelefono($correo);
        if ($admin->Autenticar()) {
            $_SESSION["id"] = $admin->getId();
            $_SESSION["rol"] = "admin";
            header("Location: ?pid=" . base64_encode("presentacion/SesionAdmin.php"));
            exit();
        } else {
            $Duenio = new Duenio();
            $Duenio->setTelefono($correo);
            $Duenio->setClave($clave);
            if ($Duenio->Autenticar()) {
                $_SESSION["id"] = $Duenio->getId();
                $_SESSION["rol"] = "Duenio";
                header("Location: ?pid=" . base64_encode("presentacion/SesionDuenio.php"));
                exit();
            } else {
                // $paciente = new Paciente("", "", "", $correo, $clave);
                /* if ($paciente->autenticar()) {
                    $_SESSION["id"] = $paciente->getId();
                    $_SESSION["rol"] = "paciente";
                    header("Location: ?pid=" . base64_encode("presentacion/sesionPaciente.php"));
                    exit();
                } else {
                    $error = true;
                }*/
            }
        }
    }
?>
<?php include("presentacion/Extremos/Cabeza.php"); ?>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="w-100" style="max-width: 400px;">
        <div class="login-container p-4 shadow rounded bg-white">
            <h2 class="text-center mb-4 login-title">Iniciar Sesión</h2>
            <?php if ($error) { ?>
                <div class="alert alert-danger" role="alert">
                    Correo o contraseña incorrectos.
                </div>
            <?php } ?>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="correo" class="form-label">Numero Celular</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="3000000000" required>
                </div>
                <div class="mb-3">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave" placeholder="••••••••" required>
                </div>
                <div class="d-grid">
                    <button type="submit" name="autenticar" class="btn btn-dark-brown">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("presentacion/Extremos/Pie.php"); ?>

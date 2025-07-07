<?php
session_start();

// Si necesitas los require, descomenta y organiza aquí:
/*
require_once("logica/Conexion.php");
require_once("logica/Admin.php");
require_once("logica/Duenio.php");
require_once("logica/FechaRegistro.php");
require_once("logica/Mascota.php");
*/

$paginas_sin_autenticacion = [
    "presentacion/Inicio.php",
    "presentacion/InicioContactenos.php",
    "presentacion/Autenticar.php",
    "presentacion/Extremos/Cabeza.php",
    "presentacion/Extremos/Pie.php",
    "presentacion/ExtremosRol/Cabeza.php",
    "presentacion/ExtremosRol/Pie.php",
    "presentacion/CrearCuenta.php"
];

$paginas_con_autenticacion = [
    "presentacion/SesionAdmin.php",
    "presentacion/SesionDuenio.php",
    "presentacion/AniadirEliminarMascota.php",
    "presentacion/VerMascotas.php",
    "presentacion/MisPaseadores.php",
    // Agrega aquí las páginas que requieren autenticación
];
?>

<?php
if (!isset($_GET["pid"])) {
    include("presentacion/Inicio.php");
} else {
    $pid = base64_decode($_GET["pid"]);
    if (in_array($pid, $paginas_sin_autenticacion)) {
        include $pid;
    } elseif (in_array($pid, $paginas_con_autenticacion)) {
        if (!isset($_SESSION["id"])) {
            include "presentacion/Autenticar.php";
        } else {
            include $pid;
        }
    } else {
        echo "Error 404";
    }
}
?>
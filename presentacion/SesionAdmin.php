<?php
if($_SESSION["rol"] != "admin"){
    header("Location: ?pid=" . base64_encode("presentacion/noAutorizado.php"));
}
?>

sesion admin

<?php
include("presentacion/ExtremosRol/Cabeza.php");
?>

sesion admin

<?php
include("presentacion/ExtremosRol/Pie.php");
?>
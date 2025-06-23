<?php
require_once("persistencia/AdminDAO.php");
require_once("persistencia/Conexion.php");
require_once("logica/Persona.php");
class Admin extends Persona
{
    private $Clave;
    private $FechaRegistro;

    public function __construct($Id, $Nombre, $Apellido, $Telefono, $Direccion, $Foto, $Clave, $FechaRegistro)
    {
        parent::__construct($Id, $Nombre, $Apellido, $Telefono, $Direccion, $Foto);
        $this->Clave = $Clave;
        $this->FechaRegistro = $FechaRegistro;
    }

    public function Autenticar()
    {
        $conexion = new Conexion();
        $adminDAO = new AdminDAO("","","",$this->Telefono,"",
        "",$this->Clave,"");
        $conexion->abrir();
        $conexion->ejecutar($adminDAO->Autenticar());
        if ($conexion->filas() == 1) {
            $this->Id = $conexion->registro()[0];
            $conexion->cerrar();
            return true;
        } else {
            $conexion->cerrar();
            return false;
        }
    }
}

?>
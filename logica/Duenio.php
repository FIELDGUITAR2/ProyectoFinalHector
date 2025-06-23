<?php

require_once("persistencia/DuenioDAO.php");
require_once("logica/Persona.php");
require_once("persistencia/Conexion.php");
class Duenio extends Persona
{
    private $Clave;
    private $FechaRegistro;
    private $IdEstadoDuenio;

    public function __construct($Id, $Nombre, $Apellido, $Telefono, $Direccion, $Foto, $Clave, $FechaRegistro)
    {
        parent::__construct($Id, $Nombre, $Apellido, $Telefono, $Direccion,
         $Foto);
        $this->Clave = $Clave;
        $this->FechaRegistro = $FechaRegistro;
    }

    public function Autenticar()
    {
        $conexion = new Conexion();
        $duenioDAO = new DuenioDAO("", "", "", 
            $this->Telefono, "","", $this->Clave, 
            "");
        $conexion->abrir();
        $conexion->ejecutar($duenioDAO->Autenticar());
        if ($conexion->filas() == 1) {
            $registro = $conexion->registro();
            $this->Id = $registro[0];
            $conexion->cerrar();
            return true;
        } else {
            $conexion->cerrar();
            return false;
        }
    }
    
    /**
     * Get the value of Clave
     */ 
    public function getClave()
    {
        return $this->Clave;
    }

    /**
     * Get the value of FechaRegistro
     */ 
    public function getFechaRegistro()
    {
        return $this->FechaRegistro;
    }

    /**
     * Get the value of IdEstadoDuenio
     */ 
    public function getIdEstadoDuenio()
    {
        return $this->IdEstadoDuenio;
    }
}
?>
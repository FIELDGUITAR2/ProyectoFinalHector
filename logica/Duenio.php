<?php

require_once("persistencia/DuenioDAO.php");
require_once("logica/Persona.php");
require_once("persistencia/Conexion.php");
class Duenio extends Persona
{
    private $Clave;
    private $FechaRegistro;
    private $IdEstadoDuenio;

    public function __construct($Id = "", $Nombre = "", $Apellido = "", $Telefono = "", $Direccion = "", $Foto = "", $Correo = "", $Clave = "", $FechaRegistro ="", $IdEstadoDuenio = "")
    {
        parent::__construct($Id, $Nombre, $Apellido, $Telefono, $Direccion,
         $Foto, $Correo);
        $this->Clave = $Clave;
        $this->FechaRegistro = $FechaRegistro;
        $this->IdEstadoDuenio = $IdEstadoDuenio;
    }

    public function Autenticar()
    {
        $conexion = new Conexion();
        $duenioDAO = new DuenioDAO();
        $duenioDAO->setTelefono($this->Telefono);
        $duenioDAO->setClave($this->Clave);
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
    
    public function Consultar()
    {
        $conexion = new Conexion();
        $duenioDAO = new DuenioDAO($this->Id, "", "", 
            "", "", "", "", "");
        $conexion->abrir();
        $conexion->ejecutar($duenioDAO->Consultar());
        $registro = $conexion->registro();
        if ($conexion->filas() == 1 && $registro !== null) {
            $this->Nombre = $registro[0];
            $this->Apellido = $registro[1];
            $this->Telefono = $registro[2];
            $this->Direccion = $registro[3];
            $this->Foto = $registro[4];
            $this->Clave = $registro[5];
            $this->FechaRegistro = $registro[6];
            $this->IdEstadoDuenio = $registro[7];
            return true;
        } else {
            return false;
        }
    }

    public function Crear()
    {
        $conexion = new Conexion();
        $duenioDAO = new DuenioDAO($this->Id, $this->Nombre, $this->Apellido, 
            $this->Telefono, $this->Direccion, $this->Foto, 
            $this->Clave, $this->FechaRegistro);
        $conexion->abrir();
        $conexion->ejecutar($duenioDAO->Insertar());
        $conexion->cerrar();
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

    /**
     * Set the value of Clave
     *
     * @return  self
     */ 
    public function setClave($Clave)
    {
        $this->Clave = $Clave;

        return $this;
    }
}
?>

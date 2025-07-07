<?php
require_once("persistencia/Conexion.php");
require_once("persistencia/RazaDAO.php");
class Raza
{
    private $Id;
    private $Nombre;

    public function __construct($Id = "", $Nombre = "")
    {
        $this->Id = $Id;
        $this->Nombre = $Nombre;
    }

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    public function MostrarRazas()
    {
        $conexion = new Conexion();
        $razaDAO = new RazaDAO();
        $conexion->abrir();
        $conexion->ejecutar($razaDAO->MostrarRazas());
        $razas = array();
        while (($datos = $conexion->registro()) !== null) {
            $raza = new Raza(
                $datos[0],  // IdRaza
                $datos[1]   // ValorRaza
            );
            array_push($razas, $raza);
        }
        $conexion->cerrar();
        return $razas;
    }

}
?>
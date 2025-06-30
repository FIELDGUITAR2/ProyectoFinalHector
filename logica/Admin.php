<?php
require_once("persistencia/AdminDAO.php");
require_once("persistencia/Conexion.php");
require_once("logica/Persona.php");
class Admin extends Persona
{
    private $Clave;
    private $FechaRegistro;

    public function __construct($Id = "", $Nombre = "", $Apellido = "", $Telefono = "", $Direccion = "", $Foto = "", $Clave = "", $FechaRegistro = "")
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

    public function MostrarAdmins(){
        $conexion = new Conexion();
        $adminDAO = new AdminDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($adminDAO -> MostrarAdmins());
        $Admins = array();
        while(($datos = $conexion -> registro()) != null){
            
            $admin = new Admin("$datos[0]", $datos[2], $datos[1], $datos[3], "", "", "", "");
            array_push($Admins, $admin);
        }
        $conexion -> cerrar();
        return $Admins;
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
}

?>
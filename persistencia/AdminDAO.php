<?php
    class AdminDAO{
        private $Nombre;
        private $Apellido;
        private $Telefono;
        private $Direccion;
        private $Id;
        private $Foto;
        private $Clave;
        private $FechaRegistro;

        public function __construct($Id = 0, $Nombre = "", $Apellido = "", $Telefono = "", $Direccion = "", $Foto = "", $Clave = "", $FechaRegistro = "")
        {
            $this->Id = $Id;
            $this->Nombre = $Nombre;
            $this->Apellido = $Apellido;
            $this->Telefono = $Telefono;
            $this->Direccion = $Direccion;
            $this->Foto = $Foto;
            $this->Clave = $Clave;
            $this->FechaRegistro = $FechaRegistro;
        }

        public function Autenticar()
        {
            return "select IdAdmin from Administrador where Telefono = '" . $this->Telefono . "' and clave = md5('" . $this->Clave . "');";
        }

        public function MostrarAdmins()
    {
        return "select a.idAdmin as ID, a.Apellido as Apellido, a.Nombre as Nombre, a.Telefono as Telefono 
            FROM
            administrador a";
    }

    }
?>
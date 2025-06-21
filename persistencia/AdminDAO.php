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
            return "";
        }

    }
?>
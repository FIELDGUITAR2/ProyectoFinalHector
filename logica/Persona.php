<?php
    class Persona{
        protected $Nombre;
        protected $Apellido;
        protected $Telefono;
        protected $Direccion;
        protected $Id;
        protected $Foto;

        public function __construct($Id = 0, $Nombre = "", $Apellido = "", $Telefono = "", $Direccion = "", $Foto = "")
        {
            $this->Id = $Id;
            $this->Nombre = $Nombre;
            $this->Apellido = $Apellido;
            $this->Telefono = $Telefono;
            $this->Direccion = $Direccion;
            $this->Foto = $Foto;
        }

        /**
         * Get the value of Apellido
         */ 
        public function getApellido()
        {
                return $this->Apellido;
        }

        /**
         * Get the value of Nombre
         */ 
        public function getNombre()
        {
                return $this->Nombre;
        }

        /**
         * Get the value of Foto
         */ 
        public function getFoto()
        {
                return $this->Foto;
        }

        /**
         * Get the value of Id
         */ 
        public function getId()
        {
                return $this->Id;
        }

        /**
         * Get the value of Telefono
         */ 
        public function getTelefono()
        {
                return $this->Telefono;
        }

        /**
         * Get the value of Direccion
         */ 
        public function getDireccion()
        {
                return $this->Direccion;
        }
    }
?>
<?php
    class Mascota
    {
        private $Id;
        private $Nombre;
        private $Raza;
        private $FechaNacimiento;
        private $Foto;
        private $IdDuenio;

        public function __construct($Id = "", $Nombre = "", $Raza = "", $FechaNacimiento = "", $Foto = "", $IdDuenio = "")
        {
            $this->Id = $Id;
            $this->Nombre = $Nombre;
            $this->Raza = $Raza;
            $this->FechaNacimiento = $FechaNacimiento;
            $this->Foto = $Foto;
            $this->IdDuenio = $IdDuenio;
        }
        public function getId() {
            return $this->Id;
        }

        public function setId($Id) {
            $this->Id = $Id;
        }

        public function getNombre() {
            return $this->Nombre;
        }

        public function setNombre($Nombre) {
            $this->Nombre = $Nombre;
        }

        public function getRaza() {
            return $this->Raza;
        }

        public function setRaza($Raza) {
            $this->Raza = $Raza;
        }

        public function getFechaNacimiento() {
            return $this->FechaNacimiento;
        }

        public function setFechaNacimiento($FechaNacimiento) {
            $this->FechaNacimiento = $FechaNacimiento;
        }

        public function getFoto() {
            return $this->Foto;
        }

        public function setFoto($Foto) {
            $this->Foto = $Foto;
        }

        public function getIdDuenio() {
            return $this->IdDuenio;
        }

        public function setIdDuenio($IdDuenio) {
            $this->IdDuenio = $IdDuenio;
        }

    
    }
?>
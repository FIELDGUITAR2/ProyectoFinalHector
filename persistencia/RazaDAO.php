<?php
    class RazaDAO {
        private $Id;
        private $Nombre;

        public function __construct($Id = "", $Nombre = "") {
            $this->Id = $Id;
            $this->Nombre = $Nombre;
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

        public function MostrarRazas()
        {
            return "select IdRaza, ValorRaza from Raza";
        }
    }
?>
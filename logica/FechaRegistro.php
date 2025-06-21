<?php
    class FechaRegistro{
        private $Dia;
        private $Mes;
        private $Anio;

        public function __construct($Dia = 0, $Mes = 0, $Anio = 0)
        {
            $this->Dia = $Dia;
            $this->Mes = $Mes;
            $this->Anio = $Anio;
        }
        

        /**
         * Get the value of Dia
         */ 
        public function getDia()
        {
                return $this->Dia;
        }

        /**
         * Get the value of Mes
         */ 
        public function getMes()
        {
                return $this->Mes;
        }

        /**
         * Get the value of Anio
         */ 
        public function getAnio()
        {
                return $this->Anio;
        }
    }
?>
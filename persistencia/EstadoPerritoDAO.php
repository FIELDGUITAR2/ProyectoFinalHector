<?php
    class EstadoPerritoDAO {
        private $Id;
        private $Valor;

        public function __construct($Id = "", $Valor = "") {
            $this->Id = $Id;
            $this->Valor = $Valor;
        }

        public function getId() {
            return $this->Id;
        }

        public function setId($Id) {
            $this->Id = $Id;
        }

        public function getValor() {
            return $this->Valor;
        }

        public function setValor($Valor) {
            $this->Valor = $Valor;
        }

        public function MostrarEstados() {
            return "select IdEstado, ValorEstado from EstadoPerrito";
        }
    }
?>
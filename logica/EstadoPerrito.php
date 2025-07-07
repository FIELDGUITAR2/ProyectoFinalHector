<?php
    require_once("persistencia/Conexion.php");
    require_once("persistencia/EstadoPerritoDAO.php");
    class EstadoPerrito {
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
            $conexion = new Conexion();
            $estadoPerritoDAO = new EstadoPerritoDAO();
            $conexion->abrir();
            $conexion->ejecutar($estadoPerritoDAO->MostrarEstados());
            $estados = array();
            while (($datos = $conexion->registro()) !== null) {
                $estado = new EstadoPerrito(
                    $datos[0],  // IdEstado
                    $datos[1]   // ValorEstado
                );
                array_push($estados, $estado);
            }
            $conexion->cerrar();
            return $estados;
        }
    }
?>
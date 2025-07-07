<?php
    require_once("persistencia/Conexion.php");
    require_once("persistencia/MascotaDAO.php");
    class Mascota
    {
        private $Id;
        private $Nombre;
        private $Raza;
        private $FechaNacimiento;
        private $Foto;
        private $Peso;
        private $IdDuenio;
        private $idEstadoPerrito;
        private $Observaciones;

        public function __construct($Id = "", $Nombre = "", $Raza = "", $FechaNacimiento = "", $Foto = "", $Peso = "", $IdDuenio = "", $idEstadoPerrito = "", $Observaciones = "")
        {
            $this->Id = $Id;
            $this->Nombre = $Nombre;
            $this->Raza = $Raza;
            $this->FechaNacimiento = $FechaNacimiento;
            $this->Foto = $Foto;
            $this->Peso = $Peso;
            $this->IdDuenio = $IdDuenio;
            $this->idEstadoPerrito = $idEstadoPerrito;
            $this->Observaciones = $Observaciones;
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

        public function getIdEstadoPerrito() {
            return $this->idEstadoPerrito;
        }

        public function setIdEstadoPerrito($idEstadoPerrito) {
            $this->idEstadoPerrito = $idEstadoPerrito;
        }

        public function getObservaciones() {
            return $this->Observaciones;
        }

        public function setObservaciones($Observaciones) {
            $this->Observaciones = $Observaciones;
        }

        public function getPeso()
        {
                return $this->Peso;
        }

        public function setPeso($Peso)
        {
                $this->Peso = $Peso;
                return $this;
        }
        

        public function VerMascota()
        {
            $conexion = new Conexion();
            $mascotaDAO = new MascotaDAO("","","","", "",
                "", $this->IdDuenio, "", "");
            $conexion->abrir();
            $conexion->ejecutar($mascotaDAO->VerMascota());
            $mascotas = [];
            while(($datos = $conexion->registro()) !== null)
            {
                $mascota = new Mascota(
                    $datos[0],  
                    $datos[1],  
                    $datos[2],  
                    $datos[3],
                    "",
                    $datos[4], 
                    $this->IdDuenio,
                    $datos[6],
                    $datos[5]
                );
                array_push($mascotas, $mascota);
            }
            $conexion->cerrar();
            if($mascotas == null)
            {
                return "Error";
            }
            return $mascotas;
        }
        public function EliminarMascota($id = "")
        {
            $conexion = new Conexion();
            $mascotaDAO = new MascotaDAO($id);
            $conexion->abrir();
            $conexion->ejecutar($mascotaDAO->EliminarMascota());
            $conexion->cerrar();
            return "Mascota eliminada correctamente.";
        }

        public function InsertarMascota()
        {
            $conexion = new Conexion();
            $mascotaDAO = new MascotaDAO(
                $this->Id,
                $this->Nombre,
                $this->Raza,
                $this->FechaNacimiento,
                $this->Foto,
                $this->Peso,
                $this->IdDuenio,
                $this->idEstadoPerrito,
                $this->Observaciones
            );
            $conexion->abrir();
            $conexion->ejecutar($mascotaDAO->InsertarMascota());
            $conexion->cerrar();
            return "Mascota insertada correctamente.";
        }

        public function MatarMascota(){
            $conexion = new Conexion();
            $mascotaDAO = new MascotaDAO($this->Id);
            $conexion->abrir();
            $conexion->ejecutar($mascotaDAO->MatarMascota());
            $conexion->cerrar();
            return "Mascota eliminada correctamente.";
        }
    }
?>
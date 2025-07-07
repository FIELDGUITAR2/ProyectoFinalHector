<?php
class MascotaDAO
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

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    public function getRaza()
    {
        return $this->Raza;
    }

    public function setRaza($Raza)
    {
        $this->Raza = $Raza;
    }

    public function getFechaNacimiento()
    {
        return $this->FechaNacimiento;
    }

    public function setFechaNacimiento($FechaNacimiento)
    {
        $this->FechaNacimiento = $FechaNacimiento;
    }

    public function getFoto()
    {
        return $this->Foto;
    }

    public function setFoto($Foto)
    {
        $this->Foto = $Foto;
    }

    public function getIdDuenio()
    {
        return $this->IdDuenio;
    }

    public function setIdDuenio($IdDuenio)
    {
        $this->IdDuenio = $IdDuenio;
    }
    public function getIdEstadoPerrito()
    {
        return $this->idEstadoPerrito;
    }

    public function setIdEstadoPerrito($idEstadoPerrito)
    {
        $this->idEstadoPerrito = $idEstadoPerrito;
    }
    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    public function setObservaciones($Observaciones)
    {
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
        /*
        select p.IdPerrito as IdMascota, p.Nombre as Nombre_Mascota, r.ValorRaza as Raza, p.FechaNacimiento as Fecha_Nac, p.Peso as Peso, p.Observacion as Observacion, ep.ValorEstado as Estado_Perrito FROM Perrito p INNER JOIN Raza r on p.IdRaza = r.IdRaza INNER JOIN EstadoPerrito ep on p.IdEstadoPerrito = ep.IdEstado;
        */

        return "select 
            p.IdPerrito as IdMascota,
            p.Nombre as Nombre_Mascota,
            r.ValorRaza as Raza,
            p.FechaNacimiento as Fecha_Nac,
            p.Peso as Peso, 
            p.Observacion as Observacion, 
            ep.ValorEstado as Estado_Perrito 
            FROM
            perrito p 
            INNER JOIN raza r on p.IdRaza = r.IdRaza 
            INNER JOIN estadoperrito ep on p.IdEstadoPerrito = ep.IdEstado 
            where
            p.IdDuenio =" . $this->IdDuenio;
    }

    public function EliminarMascota()
    {
        return "delete from perrito where IdPerrito =" . $this->Id;
    }

    public function InsertarMascota()
    {
        
        return "insert into perrito(Nombre,IdDuenio,IdRaza,IdEstadoPerrito,FechaNacimiento,Foto,Observacion,Peso)\n"

    . "VALUES\n"

    . "('".$this->getNombre()."',".$this->getIdDuenio().",".$this->getRaza().",".$this->getIdEstadoPerrito().",'".$this->getFechaNacimiento()."','".$this->getFoto()."','".$this->getObservaciones()."','".$this->getPeso()."');";
    }

}
?>
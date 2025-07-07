<?php
class DuenioDAO {
    private $Nombre;
    private $Apellido;
    private $Telefono;
    private $Direccion;
    private $Id;
    private $Foto;
    private $Clave;
    private $FechaRegistro;
    private $EstadoDuenio;
    private $Correo;

    public function __construct($Id = 0, $Nombre = "", $Apellido = "", $Telefono = "", $Direccion = "", $Foto = "", $Clave = "", $FechaRegistro = "", $EstadoDuenio = 1)
    {
        $this->Id = $Id;
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Telefono = $Telefono;
        $this->Direccion = $Direccion;
        $this->Foto = $Foto;
        $this->Clave = $Clave;
        $this->FechaRegistro = $FechaRegistro;
        $this->EstadoDuenio = $EstadoDuenio;
    }

    public function Autenticar()
    {
        return "select IdDuenio from duenio where Telefono = '" 
        . $this->Telefono 
        . "' and Clave = md5('" . $this->Clave . "');";
    }

    public function Consultar()
    {
        return "select Nombre,Apellido,Telefono,
        Direccion,Foto,Clave,FechaRegistro,IdEstadoDuenio
        from duenio where IdDuenio = '" . $this->Id . "'";
    }

    public function Insertar()
    {
        return "insert into Duenio(IdDuenio,Nombre,Apellido,Clave,Direccion,Telefono,
        FechaRegistro,IdEstadoDuenio) values(" . $this->Id . ",
        '" . $this->Nombre . "',
        '" . $this->Apellido . "',
        md5('" . $this->Clave . "'),
        '" . $this->Direccion . "',
        '" . $this->Telefono . "',
        '" . $this->FechaRegistro . "',
        " . $this->EstadoDuenio . ")";
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

    public function getApellido() {
        return $this->Apellido;
    }

    public function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    public function getDireccion() {
        return $this->Direccion;
    }

    public function setDireccion($Direccion) {
        $this->Direccion = $Direccion;
    }

    public function getFoto() {
        return $this->Foto;
    }

    public function setFoto($Foto) {
        $this->Foto = $Foto;
    }

    public function getClave() {
        return $this->Clave;
    }

    public function setClave($Clave) {
        $this->Clave = $Clave;
    }

    public function getFechaRegistro() {
        return $this->FechaRegistro;
    }

    public function setFechaRegistro($FechaRegistro) {
        $this->FechaRegistro = $FechaRegistro;
    }

    public function getEstadoDuenio() {
        return $this->EstadoDuenio;
    }

    public function setEstadoDuenio($EstadoDuenio) {
        $this->EstadoDuenio = $EstadoDuenio;
    }
    
}
?>
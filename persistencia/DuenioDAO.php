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
        return "select IdDuenio from Duenio where Telefono = '" . $this->Telefono . "' and Clave = md5('" . $this->Clave . "');";
    }

    public function Consultar()
    {
        return "select Nombre,Apellido,Telefono,
        Direccion,Foto,Clave,FechaRegistro,IdEstadoDuenio
        from Duenio where IdDuenio = '" . $this->Id . "'";
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
    
}
?>
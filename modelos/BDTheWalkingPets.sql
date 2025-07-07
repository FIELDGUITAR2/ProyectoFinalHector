create database Pets;
use Pets;
create table Administrador(
	IdAdmin int not null,
    Nombre varchar(100) not null,
    Apellido varchar(100) not null,
    Telefono varchar(100) not null,
    clave varchar(100) not null,
    Direccion varchar(100) not null,
    FechaRegistro Date not null,
    Foto varchar(255),
    primary key(IdAdmin)
);
create table Raza(
	IdRaza int not null auto_increment,
    ValorRaza varchar(100) not null,
    primary key(IdRaza)
);
create table EstadoDuenio(
	IdEstado int not null auto_increment,
    ValorEstado varchar(100) not null unique,
    primary key(IdEstado)
);
create table EstadoPerrito(
	IdEstado int not null auto_increment,
    ValorEstado varchar(100) not null unique,
    primary key(IdEstado)
);
create table EstadoPaseo(
	IdEstado int not null auto_increment,
    ValorEstado varchar(100) not null unique,
    primary key(IdEstado)
);
create table EstadoPaseador(
	IdEstado int not null auto_increment,
    ValorEstado varchar(100) not null unique,
    primary key(IdEstado)
);
create table Duenio(
	IdDuenio int not null,
    Nombre varchar(100) not null,
    Apellido varchar(100) not null,
    Telefono varchar(100) not null,
    Clave varchar(100) not null,
    Direccion varchar(100) not null,
    FechaRegistro date not null,
    Foto varchar(255),
    IdEstadoDuenio int not null,
    primary key(IdDuenio),
    foreign key(IdEstadoDuenio)
    references Pets.EstadoDuenio(IdEstado)
);
create table Perrito(
	IdPerrito int not null,
    Nombre varchar(100) not null,
    IdRaza int not null,
    FechaNacimiento date not null,
    Peso varchar(10),    
    Foto varchar(255),
    Observacion varchar(1000),
    IdDuenio int not null,
    IdEstadoPerrito int not null,
    primary key(IdPerrito),
    foreign key(IdRaza)
    references Pets.Raza(IdRaza),
    foreign key(IdDuenio)
    references Pets.Duenio(IdDuenio),
    foreign key(IdEstadoPerrito)
    references Pets.EstadoPerrito(IdEstado)
);
create table Paseador(
	IdPaseador int not null,
    Nombre varchar(100) not null,
    Apellido varchar(100) not null,
    Telefono varchar(100) not null,
    Clave varchar(100) not null,
    Direccion varchar(100) not null,
    FechaRegistro date not null,
    Foto varchar(255),
    IdEstadoPaseador int not null,
    primary key(IdPaseador),
    foreign key(IdEstadoPaseador)
    references Pets.EstadoPaseador(IdEstado)
);
create table Tarifa(
	IdTarifa int not null auto_increment,
    ValHora double not null,
    Observacion varchar(1000),
    IdPaseador int not null,
    primary key(IdTarifa),
    foreign key(IdPaseador)
    references Pets.Paseador(IdPaseador)
);
create table Paseo(
	IdPaseo int not null auto_increment,
    FechaPaseo date not null,
    HoraInicio time not null,
    HoraFin time not null,
    Observacion varchar(1000),
    IdEstado int not null,
    IdPaseador int not null,
    primary key(IdPaseo),
    foreign key(IdEstado)
    references Pets.EstadoPaseo(IdEstado),
    foreign key(IdPaseador)
    references Pets.Paseador(IdPaseador)
);
create table Factura(
	IdFactura int not null auto_increment,
    Total double not null,
    FechaPago double not null,
    ArchivoPdf varchar(255) not null,
    CodigoQr varchar(255) not null,
    IdDuenio int not null,
    IdPaseo int not null,
    primary key(IdFactura),
    foreign key(IdDuenio)
    references Pets.Duenio(IdDuenio),
    foreign key(IdPaseo)
    references Pets.Paseo(IdPaseo)
);
create table Paseo_Perrito(
	IdPerrito int not null,
    IdPaseo int not null,
    foreign key(IdPerrito)
    references Pets.Perrito(IdPerrito),
    foreign key(IdPaseo)
    references Pets.Paseo(IdPaseo)
);
<?php 

//creacion base de datos 

create database cityGreen;

//creacion tabla registro

CREATE TABLE Registro (
Idregistro INT auto_increment,
cedula INT(12) NOT NULL,
nombre1 VARCHAR(20) NOT NULL,
nombre2 VARCHAR(20) NOT NULL,
apellido1 VARCHAR(20) NOT NULL,
apellido2 VARCHAR(20) NOT NULL,
cargo VARCHAR(20) NOT NULL, 
celular VARCHAR(10) NOT NULL,
genero VARCHAR(15) NOT NULL,
email VARCHAR(20) NOT NULL,
primary key(cedula),
UNIQUE KEY(idregistro),
UNIQUE KEY(celular),
UNIQUE KEY(cedula));


//creacion tabla Usuario
CREATE TABLE usuario (
usuario VARCHAR(20) NOT NULL,
contrasena VARCHAR(20) NOT NULL,
confirmar1 VARCHAR(20) NOT NULL,
primary key(usuario),
UNIQUE KEY(usuario));

// borrar tabla

drop table Registro;

// borrar base de datos

drop database cityGreen;

//insertar datos


INSERT INTO usuario (usuario,contraseña,confirmar1) VALUES ('80815886','Jeisson80815886','Jeisson80815886');




?>

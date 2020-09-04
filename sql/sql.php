<?php 

// borrar base de datos

drop database cityGreen;

create database cityGreen;



CREATE TABLE Registro (
idRegistro INT auto_increment,
numRegistro VARCHAR(12) NOT NULL,
tabla VARCHAR(20) NOT NULL,
tipo VARCHAR(20) NOT NULL,
documento VARCHAR(12) NOT NULL, 
nombre1 VARCHAR(20) NOT NULL,
nombre2 VARCHAR(20) NOT NULL,
apellido1 VARCHAR(20) NOT NULL,
apellido2 VARCHAR(20) NOT NULL,
genero VARCHAR(15) NOT NULL, 
primary key(documento),
UNIQUE KEY(idregistro),
UNIQUE KEY(documento));



CREATE TABLE usuarios (
tabla VARCHAR(20) NOT NULL,
usuario VARCHAR(20) NOT NULL,
contrasena VARCHAR(20) NOT NULL,
confirmar1 VARCHAR(20) NOT NULL,
primary key(usuario),
UNIQUE KEY(usuario));



CREATE TABLE intereses (
usuario VARCHAR(20) NOT NULL,	
interes1 VARCHAR(20) NULL,
interes2 VARCHAR(20) NULL,
interes3 VARCHAR(20) NULL,
interes4 VARCHAR(20) NULL,
interes5 VARCHAR(20) NULL,
primary key(usuario),
UNIQUE KEY(usuario));


CREATE TABLE celular (
tabla VARCHAR(20) NOT NULL,
usuario VARCHAR(20) NOT NULL, 
celular VARCHAR(10) NOT NULL,
primary key(usuario),
UNIQUE KEY(usuario),
UNIQUE KEY(celular));



CREATE TABLE email (
tabla VARCHAR(20) NOT NULL,
usuario VARCHAR(20) NOT NULL, 
email VARCHAR(80) NOT NULL,
primary key(usuario),
UNIQUE KEY(usuario),
UNIQUE KEY(email));

CREATE TABLE fecha( 
tabla VARCHAR(20) NOT NULL, 
usuario VARCHAR(20) NOT NULL,
fechaDeRegistro DATE,
hora TIME,
fecha VARCHAR(30) NOT NULL,
UNIQUE key(usuario),
primary key(usuario));


// borrar tabla

drop table Registro;
drop table usuarios;
drop table intereses;
drop table celular;
drop table email;
drop table fecha;


// borrar base de datos

drop database cityGreen;

// borrar datos base de datos

DELETE FROM registro;

//insertar datos


INSERT INTO usuario (usuario,contraseña,confirmar1) VALUES ('80815886','Jeisson80815886','Jeisson80815886');




?>

CREATE DATABASE Vyasa;

USE Vyasa;

CREATE TABLE Planilla_Bisemanal(
	ID_Bi int AUTO_INCREMENT NOT NULL,
    ID_reloj_Bi VARCHAR(255) NOT NULL,
    ID_cedula_Bi VARCHAR(20)  NOT NULL,
    nombre_empleado VARCHAR(255)   NULL,
    telefono VARCHAR(20) NOT NULL,
    horas_sencillas INTEGER(60) NOT NULL,
    fecha_ingreso DATE,
    fecha_planilla_inicio VARCHAR (255),
    fecha_planilla_final VARCHAR (255),
    horas_extra INTEGER (60),
    feriados INTEGER (60),
    horas_dobles VARCHAR(20),
    total_horas INTEGER (100),
    PRIMARY KEY (ID_Bi)

);

CREATE TABLE Planilla_Quincenal(
	ID_Qui int AUTO_INCREMENT NOT NULL,
    ID_reloj_Qui VARCHAR(250) NOT NULL,
    ID_cedula_Qui VARCHAR(20)  NOT NULL,
    nombre_empleado VARCHAR(255)  NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    horas_sencillas INTEGER(60) NOT NULL,
    fecha_ingreso DATE,
    fecha_planilla_inicio VARCHAR (255),
    fecha_planilla_final VARCHAR (255),
    horas_extra INTEGER (60),
    feriados INTEGER (60),
    horas_dobles VARCHAR(20),
    total_horas INTEGER (100),
    PRIMARY KEY (ID_Qui)

);

CREATE TABLE  usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
INSERT INTO usuarios (usuario, PASSWORD) VALUES
    ('Y123', '1011'),
    ('JP123', '1111');
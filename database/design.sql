/*Crear base de datos*/
CREATE DATABASE toque_web;

/*Seleccionar la base de datos*/
USE toque_web;

/*Crear tablas*/
CREATE TABLE usuarios(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    nombre      VARCHAR(255) NOT NULL,
    apellido    VARCHAR(255) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    rol         VARCHAR(100),
    fecha       DATE NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;
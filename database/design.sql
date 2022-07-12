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

CREATE TABLE regiones(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    nombre      VARCHAR(255) NOT NULL,
    CONSTRAINT pk_regiones PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE comunas(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    region_id   INT(255) NOT NULL,
    nombre      VARCHAR(255) NOT NULL,
    CONSTRAINT pk_comunas PRIMARY KEY(id),
    CONSTRAINT fk_comunas_regiones FOREIGN KEY(region_id) REFERENCES regiones(id)
)ENGINE=InnoDb;

CREATE TABLE toques(
    id              INT(255) AUTO_INCREMENT NOT NULL,
    usuario_id      INT(255) NOT NULL,
    comercio        VARCHAR(255) NOT NULL,
    boleta_factura  INT(255) NOT NULL,
    producto        VARCHAR(255) NOT NULL,
    tipo            VARCHAR(255) NOT NULL,
    fecha           DATE NOT NULL,
    estado          VARCHAR(255) NOT NULL,
    comentario      TEXT NOT NULL,
    region_id       INT(255) NOT NULL,
    comuna_id       INT(255) NOT NULL,
    calle           VARCHAR(255) NOT NULL,
    num_calle       INT(255) NOT NULL,
    depto_block     VARCHAR(255) NOT NULL,
    CONSTRAINT pk_toques PRIMARY KEY(id),
    CONSTRAINT fk_toques_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_toques_regiones FOREIGN KEY(region_id) REFERENCES regiones(id),
    CONSTRAINT fk_toques_comunas FOREIGN KEY(comuna_id) REFERENCES comunas(id)
)ENGINE=InnoDb;


-- Utilities
-- select user from mysql.user;

-- Creamos la BBDD
DROP DATABASE IF EXISTS jAnds_motorSport;
FLUSH PRIVILEGES;
CREATE DATABASE jAnds_motorSport;

CREATE USER IF NOT EXISTS admin@localhost IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON jAnds_motorSport.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;

-- Creacion tablas
USE jAnds_motorSport;

CREATE TABLE coche(
	id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
	marca VARCHAR(255),
	modelo VARCHAR(255),
	anyo VARCHAR(255),
	km VARCHAR(255),
	cambio VARCHAR(255),
	puertas VARCHAR(255),
	cv VARCHAR(255),
	color VARCHAR(255),
	combustible VARCHAR(255),
	garantia VARCHAR(255)
    
);

CREATE TABLE imagen_coche (
	id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(255),
	id_coche INT(11),
	FOREIGN KEY (id_coche) REFERENCES coche (id) ON UPDATE  NO ACTION  ON DELETE  CASCADE
);

CREATE TABLE usuario ( 
	id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(255),
	apellidos VARCHAR(255),
	email VARCHAR(255),
	password VARCHAR(255),
	fecha_registro timestamp NOT NULL DEFAULT NOW() ON UPDATE NOW()
	
);












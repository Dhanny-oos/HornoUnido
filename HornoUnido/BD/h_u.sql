CREATE DATABASE H_U;

USE H_U;

CREATE TABLE usuarios (
	id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (50),
    usuario VARCHAR (30),
    correo VARCHAR (50),
    direccion VARCHAR (100),
	contraseña VARCHAR (150)
);

CREATE TABLE ventas (
    id_venta INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    usuario VARCHAR(30),
    domicilio VARCHAR(100),
    cantidad INT,
    venta VARCHAR(20),
    total DECIMAL(10,2),
    fecha DATETIME,
    estado VARCHAR(15) DEFAULT 'Pendiente'
);

CREATE TABLE reg_compras (
    id_venta int(11),
	nombre varchar(59),
    registro datetime
);

CREATE TRIGGER ventas_AI AFTER UPDATE ON ventas
FOR EACH ROW 
INSERT INTO reg_compras (id_venta, nombre, registro) 
VALUES (NEW.id_venta, NEW.nombre, NOW());


CREATE TABLE reg_ventas_terminadas (
    id_venta int(11),
	nombre varchar(59),
    registro datetime
);

CREATE TRIGGER ventas_AU AFTER DELETE ON ventas
FOR EACH ROW 
INSERT INTO reg_ventas_terminadas (id_venta, nombre, registro) 
VALUES (OLD.id_venta, OLD.nombre, NOW());


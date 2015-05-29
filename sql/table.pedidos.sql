-- 
-- Editor SQL for DB table pedidos
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE `pedidos` (
	`id` int(10) NOT NULL auto_increment,
	`nombre` varchar(255),
	`domicilio` varchar(255),
	`correo` varchar(255),
	`telefono` varchar(255),
	`sexo` varchar(255),
	`deporte` varchar(255),
	`prenda1` varchar(255),
	`prenda2` varchar(255),
	`prenda3` varchar(255),
	`cantidad1` varchar(255),
	`cantidad2` varchar(255),
	`cantidad3` varchar(255),
	`comentarios` varchar(255),
	PRIMARY KEY( `id` )
);
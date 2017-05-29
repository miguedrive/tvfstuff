CREATE TABLE `sector` (
	`id` INT(20) NOT NULL,
	`nombre` varchar(20) NOT NULL ,
	PRIMARY KEY (`id`)
);
CREATE TABLE `categoria` (
	`id` INT(30) NOT NULL ,
	`nombre` varchar(30) NOT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `estados` (
	`id` INT(20) NOT NULL ,
	`nombre` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `objeto` (
	`obj_id` INT NOT NULL,
	`sector` INT(15) NOT NULL,
	`nombre` varchar(20) NOT NULL, 
	`descripcion` varchar(90) NOT NULL,
	`cantidad` INT(100) NOT NULL,
	`categoria` INT(20) NOT NULL,
	`fecha_entrega` DATETIME(6) NOT NULL ,
	`estado` INT(20) NOT NULL,
	PRIMARY KEY (`obj_id`)
);
CREATE TABLE `empleado` (
	`id` INT(10) NOT NULL,
	`nombre` varchar(20) NOT NULL,
	`apellido` varchar(20) NOT NULL,
	`sector` INT(20) NOT NULL ,
	PRIMARY KEY (`id`)
);

ALTER TABLE `empleado` ADD CONSTRAINT `empleado_fk0` FOREIGN KEY (`sector`) REFERENCES `sector`(`id`);

ALTER TABLE `objeto` ADD CONSTRAINT `objeto_fk0` FOREIGN KEY (`sector`) REFERENCES `sector`(`id`);

ALTER TABLE `objeto` ADD CONSTRAINT `objeto_fk1` FOREIGN KEY (`categoria`) REFERENCES `categoria`(`id`);

ALTER TABLE `objeto` ADD CONSTRAINT `objeto_fk2` FOREIGN KEY (`estado`) REFERENCES `estados`(`id`);


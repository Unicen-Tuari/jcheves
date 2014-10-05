-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

INSERT INTO `marca` (`idmarca`, `nombre`) VALUES
(1,	'Osh Kosh'),
(2,	'Pat Us'),
(3,	'Geppeto'),
(4,	'Route 66'),
(5,	'Golfus'),
(6,	'Gulmez'),
(7,	'La La La'),
(8,	'Kag');

DROP TABLE IF EXISTS `ropa`;
CREATE TABLE `ropa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `talle` int(11) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `marca` (`marca`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `ropa_ibfk_1` FOREIGN KEY (`marca`) REFERENCES `marca` (`idmarca`),
  CONSTRAINT `ropa_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

INSERT INTO `ropa` (`id`, `marca`, `tipo`, `descripcion`, `talle`, `precio`, `imagen`) VALUES
(3,	4,	1,	'tela de algodon',	3,	200,	'\"imagenes\\catalogo\\pantalon\\pantalon1.jpg\"'),
(4,	1,	1,	'tela de jean',	3,	300,	'\"imagenes\\catalogo\\pantalon\\pantalon2.jpg\"'),
(5,	2,	1,	'tela de jean clasico',	1,	250,	'\"imagenes\\catalogo\\pantalon\\pantalon3.jpg\"'),
(6,	2,	1,	'tela de jean moderno',	2,	230,	'\"imagenes\\catalogo\\pantalon\\pantalon4.jpg\"'),
(7,	2,	1,	'tela de jean clasico gastado',	5,	290,	'\"imagenes\\catalogo\\pantalon\\pantalon5.jpg\"'),
(8,	8,	1,	'tela de jean moderno',	3,	250,	'\"imagenes\\catalogo\\pantalon\\pantalon7.jpg\"'),
(9,	8,	1,	'tela de jean moderno y gastado',	4,	270,	'\"imagenes\\catalogo\\pantalon\\pantalon8.jpg\"'),
(10,	5,	7,	'tela de algodon tipo moderno',	4,	180,	'\"imagenes\\catalogo\\pantalon\\pantalon6.jpg\"'),
(11,	5,	2,	'tela de algodon con detalles',	2,	180,	'\"imagenes\\catalogo\\remera\\remera1.jpg\"'),
(12,	7,	2,	'tela de lycra manga larga',	5,	240,	'\"imagenes\\catalogo\\remera\\remera.2jpg\"'),
(13,	2,	2,	'tela de algodon tipo moderno',	3,	170,	'\"imagenes\\catalogo\\remera\\remera4.jpg\"'),
(14,	2,	2,	'tela de lycra moderna',	1,	140,	'\"imagenes\\catalogo\\remera\\remera5.jpg\"'),
(15,	4,	3,	'cuadrille clasico',	4,	200,	'\"imagenes\\catalogo\\remera\\remera3.jpg\"'),
(16,	2,	9,	'tela de algodon con capucha',	5,	190,	'\"imagenes\\catalogo\\buzo\\buzo1.jpg\"'),
(17,	4,	9,	'tela de lycra manga larga',	3,	300,	'\"imagenes\\catalogo\\buzo\\buzo3.jpg\"'),
(18,	6,	9,	'tela de algodon rayado',	3,	290,	'\"imagenes\\catalogo\\buzo\\buzo4.jpg\"'),
(19,	7,	9,	'tela de algodon cuadrille con capucha',	2,	0,	'\"imagenes\\catalogo\\buzo\\buzo5.jpg\"'),
(20,	2,	9,	'tela de algodon con capucha',	4,	230,	'\"imagenes\\catalogo\\buzo\\buzo6.jpg\"'),
(21,	7,	9,	'tela de algodon',	1,	190,	'\"imagenes\\catalogo\\buzo\\buzo7.jpg\"'),
(22,	2,	4,	'tela algodon forrado con lycra',	1,	270,	'\"imagenes\\catalogo\\buzo\\buzo2.jpg\"'),
(23,	8,	5,	'Jardin Estrella de Belen',	4,	260,	'\"imagenes\\catalogo\\uniforme\\uniforme1.jpg\"'),
(24,	7,	5,	'Uniforme Escuela Granja',	5,	200,	'\"imagenes\\catalogo\\uniforme\\uniforme2.jpg\"'),
(25,	2,	5,	'Uniforme de Jardin, Colegio San Jose',	4,	260,	'\"imagenes\\catalogo\\uniforme\\uniforme3.jpg\"'),
(26,	6,	6,	'Escarpines de Tela Polar Forrada',	4,	120,	'\"imagenes\\catalogo\\accesorio\\accesorio1.jpg\"'),
(27,	7,	6,	'Escarpines Tela de lycra',	2,	150,	'\"imagenes\\catalogo\\accesorio\\accesorio2.jpg\"'),
(28,	3,	6,	'Bufanda tela polar',	3,	160,	'\"imagenes\\catalogo\\accesorio\\accesorio3.jpg\"'),
(29,	7,	6,	'Bolso',	0,	300,	'\"imagenes\\catalogo\\accesorio\\accesorio4.jpg\"'),
(30,	8,	6,	'Bolso',	0,	290,	'\"imagenes\\catalogo\\accesorio\\accesorio5.jpg\"'),
(31,	1,	8,	'Conjunto',	4,	300,	'\"imagenes\\catalogo\\conjuntos\\conjunto2.jpg\"');

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE `tipo` (
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

INSERT INTO `tipo` (`idtipo`, `nombre`) VALUES
(1,	'Pantalon'),
(2,	'Remera'),
(3,	'Camisa'),
(4,	'Chaleco'),
(5,	'Uniforme'),
(6,	'Accesorio'),
(7,	'Bermuda'),
(8,	'Conjunto'),
(9,	'Buzo');

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `compras` int(11) NOT NULL,
  `mensajes` varchar(1000) NOT NULL,
  `password` varchar(20) NOT NULL,
  `admin` binary(1) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

INSERT INTO `usuarios` (`idusuario`, `nombre`, `compras`, `mensajes`, `password`, `admin`) VALUES
(1,	'secureuser',	0,	'',	'1234',	UNHEX('00')),
(2,	'francisco',	0,	'',	'lalala',	UNHEX('00')),
(3,	'root',	0,	'',	'',	UNHEX('01')),
(4,	'jesus',	0,	'',	'palosanto',	UNHEX('01'));

-- 2014-10-04 21:45:19

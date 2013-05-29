-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-05-2013 a las 20:26:59
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pi6`
--

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `getDia`(`intDia` int) RETURNS varchar(20) CHARSET latin1
BEGIN
	#Routine body goes here...
	DECLARE res varchar(20);
	IF intDia = 1 THEN 
		SET res = 'Lunes';
    	ELSEIF intDia = 2 THEN 
		SET res= 'Martes';
	ELSEIF intDia = 3 THEN 
		SET res= 'Miércoles';
	ELSEIF intDia = 4 THEN 
		SET res= 'Jueves';
	ELSEIF intDia = 5 THEN
		SET res= 'Viernes'; 
	ELSEIF intDia = 6 THEN
		SET res= 'Sábado'; 
	ELSE 
		SET res= 'Domingo';
	END IF;
	RETURN  res;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `dia_visita` int(2) NOT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `idMunicipio` (`idMunicipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombre`, `direccion`, `idMunicipio`, `status`, `dia_visita`) VALUES
(8, 'Juan', 'Av. Siempre viva #123', 3, 1, 1),
(9, 'Geronimo Vazquez', 'Av. los arboles grandotes', 7, 1, 2),
(10, 'Carlos Ulibarri', 'Av. Los robles', 1, 1, 3),
(11, 'assa', 'sddd', 1, 1, 4),
(12, 'bnn', 'bnm98', 2, 1, 5),
(13, 'moy', 'moy 218', 5, 1, 6),
(14, 'chucho', 'molls 744', 8, 1, 7),
(15, 'chucho', 'molls 744', 8, 1, 1),
(27, 'otro cliente', 'miramam 22', 2, 1, 2),
(28, 'as', 's', 2, 1, 3),
(30, 'angelon', 'angelon 2909', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_salidas_entradas`
--

CREATE TABLE IF NOT EXISTS `detalle_salidas_entradas` (
  `idDetalle_salidas_entradas` int(11) NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) NOT NULL,
  `cantidadLleva` int(11) NOT NULL,
  `cantidadRegreso` int(11) DEFAULT NULL,
  `idSalidas_entradas` int(11) NOT NULL,
  PRIMARY KEY (`idDetalle_salidas_entradas`),
  KEY `idProducto_idx` (`idProducto`),
  KEY `idSalidas_entradas` (`idSalidas_entradas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `detalle_salidas_entradas`
--

INSERT INTO `detalle_salidas_entradas` (`idDetalle_salidas_entradas`, `idProducto`, `cantidadLleva`, `cantidadRegreso`, `idSalidas_entradas`) VALUES
(1, 1, 31, NULL, 1),
(2, 3, 25, NULL, 1),
(3, 7, 41, NULL, 1),
(4, 8, 20, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mermas`
--

CREATE TABLE IF NOT EXISTS `mermas` (
  `idMerma` int(11) NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idSalidas_entradas` int(11) NOT NULL,
  PRIMARY KEY (`idMerma`),
  KEY `idProducto` (`idProducto`),
  KEY `idSalidas_entradas` (`idSalidas_entradas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `mermas`
--

INSERT INTO `mermas` (`idMerma`, `idProducto`, `cantidad`, `idSalidas_entradas`) VALUES
(33, 6, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
  `idMunicipio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`idMunicipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`idMunicipio`, `nombre`) VALUES
(1, 'Colima'),
(2, 'Manzanillo'),
(3, 'Tecoman'),
(4, 'Armeria'),
(5, 'Ixtlahuacan'),
(6, 'Coquimatlan'),
(7, 'Minatitlan'),
(8, 'Villa de alvarez'),
(9, 'Cuauhtemoc'),
(12, 'Comala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) NOT NULL,
  `presentacion` varchar(20) NOT NULL,
  `precio_fabrica` double NOT NULL,
  `precio_publico` double NOT NULL,
  `status` int(2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre_producto`, `presentacion`, `precio_fabrica`, `precio_publico`, `status`, `cantidad`, `fecha_caducidad`) VALUES
(1, 'Papitas', '150', 3, 5, 1, 100, '2015-05-26'),
(2, 'Chetos', '135', 4, 6, 1, 234, '2015-05-26'),
(3, 'Cacahuates', '40', 8, 10, 1, 123, '2015-05-26'),
(4, 'Pistaches', '55', 12, 15, 1, 125, '2015-05-26'),
(5, 'Churrumaiz', '35', 2, 4, 1, 432, '2015-05-26'),
(6, 'doritos', '40', 6.5, 7, 1, 10, '2013-05-02'),
(7, 'doritos', '40', 6.5, 7, 1, 287, '2013-09-27'),
(8, 'doritos', '40', 6.5, 7, 1, 80, '2013-07-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `idRuta` int(11) NOT NULL,
  `dia` varchar(50) NOT NULL,
  PRIMARY KEY (`idRol`),
  KEY `idRuta` (`idRuta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `idRuta`, `dia`) VALUES
(4, 3, '1'),
(5, 3, '2'),
(6, 3, '3'),
(7, 3, '4'),
(8, 3, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_clientes`
--

CREATE TABLE IF NOT EXISTS `rol_clientes` (
  `idRol_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `idRol` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idRol_cliente`),
  KEY `idRol` (`idRol`),
  KEY `idCliente` (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `rol_clientes`
--

INSERT INTO `rol_clientes` (`idRol_cliente`, `idRol`, `idCliente`) VALUES
(1, 4, 8),
(2, 4, 9),
(3, 4, 10),
(4, 4, 15),
(14, 4, 27),
(15, 4, 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE IF NOT EXISTS `rutas` (
  `idRuta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ruta` varchar(45) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idRuta`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre_ruta`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`idRuta`, `nombre_ruta`, `idUsuario`) VALUES
(3, 'Ruta 1', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas_entradas`
--

CREATE TABLE IF NOT EXISTS `salidas_entradas` (
  `idSalidas_entradas` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idSalidas_entradas`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `salidas_entradas`
--

INSERT INTO `salidas_entradas` (`idSalidas_entradas`, `idUsuario`, `fecha`) VALUES
(1, 3, '2013-05-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE IF NOT EXISTS `tipo_usuarios` (
  `idTipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipo_usuario`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`idTipo_usuario`, `nombre`) VALUES
(1, 'Admin'),
(2, 'Chofer-vendedor'),
(3, 'Gefe de ventas'),
(5, 'Gerente de ventas'),
(4, 'Usuario de inventario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `idTipo_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `nombre_usuario_UNIQUE` (`nombre_usuario`),
  KEY `idTipo_usuario` (`idTipo_usuario`),
  KEY `idTipo_usuario_2` (`idTipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `idTipo_usuario`, `nombre_usuario`, `clave`, `status`) VALUES
(1, 1, 'chuy', 'c7432b40153b80353dd6f7524416472c', 1),
(2, 2, 'vic', 'vic', 1),
(3, 2, 'victor', 'ffc150a160d37e92012c196b6af4160d', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idVenta` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`idVenta`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idCliente` (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `idUsuario`, `idCliente`, `fecha_venta`, `total`) VALUES
(48, 3, 9, '2013-05-29', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vta_detalles`
--

CREATE TABLE IF NOT EXISTS `vta_detalles` (
  `idVtaDetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idVenta` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idVtaDetalle`),
  KEY `idVenta` (`idVenta`),
  KEY `idProducto` (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `vta_detalles`
--

INSERT INTO `vta_detalles` (`idVtaDetalle`, `idVenta`, `idProducto`, `cantidad`) VALUES
(51, 48, 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`idMunicipio`) REFERENCES `municipios` (`idMunicipio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_salidas_entradas`
--
ALTER TABLE `detalle_salidas_entradas`
  ADD CONSTRAINT `detalle_salidas_entradas_ibfk_1` FOREIGN KEY (`idSalidas_entradas`) REFERENCES `salidas_entradas` (`idSalidas_entradas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idProducto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mermas`
--
ALTER TABLE `mermas`
  ADD CONSTRAINT `mermas_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mermas_ibfk_2` FOREIGN KEY (`idSalidas_entradas`) REFERENCES `salidas_entradas` (`idSalidas_entradas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`idRuta`) REFERENCES `rutas` (`idRuta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_clientes`
--
ALTER TABLE `rol_clientes`
  ADD CONSTRAINT `rol_clientes_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rol_clientes_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salidas_entradas`
--
ALTER TABLE `salidas_entradas`
  ADD CONSTRAINT `salidas_entradas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `idTipo_usuario` FOREIGN KEY (`idTipo_usuario`) REFERENCES `tipo_usuarios` (`idTipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vta_detalles`
--
ALTER TABLE `vta_detalles`
  ADD CONSTRAINT `vta_detalles_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vta_detalles_ibfk_2` FOREIGN KEY (`idVenta`) REFERENCES `ventas` (`idVenta`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

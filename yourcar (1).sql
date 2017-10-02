-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2017 a las 03:49:40
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yourcar`
--
CREATE DATABASE IF NOT EXISTS `yourcar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yourcar`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id_auto` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `Descripcion` text NOT NULL,
  `fecha` datetime NOT NULL,
  `precio` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `id_comprador` int(11) NOT NULL,
  `precio_mayor` int(255) NOT NULL,
  `foto` text NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id_auto`, `modelo`, `Descripcion`, `fecha`, `precio`, `id_vendedor`, `id_comprador`, `precio_mayor`, `foto`, `cantidad`) VALUES
(1, 'susuki Swift 2010', 'CDLJ40', '2017-09-28 16:20:00', 6000000, 1, 2, 6500000, 'https://www.coches.com/fotos_historicas/suzuki/Swift-SZ4-UK-2010/suzuki_swift-sz4-uk-2010_r4.jpg', 1),
(2, 'toyota new yaris 2018', 'ZZ ZZ 99', '2017-09-26 15:05:00', 5000000, 2, 3, 7000000, 'http://cdn1.autoexpress.co.uk/sites/autoexpressuk/files/2017/03/1ax7k7437.jpg', 1),
(3, 'Peugeot 206 2010', 'HR TV 22', '2017-09-28 00:00:00', 3421612, 3, 4, 56789021, 'http://ipocars.com/imgs/a/g/d/o/p/peugeot__206__75_2010_1_lgw.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` text NOT NULL,
  `apellido_usuario` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dinero` int(255) NOT NULL,
  `rut_usuario` text NOT NULL,
  `correo` text NOT NULL,
  `password` text NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `dinero`, `rut_usuario`, `correo`, `password`, `direccion`) VALUES
(1, 'Diego', 'Ulloa', 2147483647, '19810234', 'admin@admin', 'admin', 'temuco'),
(2, 'Jorge', 'Nuñez', 0, '19810', 'asddsadsa@hotmil.com', 'asd', 'Chiloe'),
(3, 'Enoc', 'Calfulaf', 0, '988271712712', 'hola@hotmail.com', 'asdf', ''),
(4, 'Juan', 'zuñiga', 0, '12345678', 'qwertyuio@qwertyu.ert', '1234', ''),
(5, 'Jan', 'Seiffert', 0, '9321837128', 'dashbas@hotmail.com', 'asd', ''),
(6, 'asd', 'dsa', 0, '123671283812', '3125736128912@knjkas.com', 'asd', ''),
(7, 'Carlos', 'Ritz', 50000000, '19763265', 'asdhbasd@hotmail.com', 'soymanco', 'Copiapo'),
(8, 'Alexander', 'Lambrecht', 0, '12345', 'djknsan@dasjnk.com', '12345', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

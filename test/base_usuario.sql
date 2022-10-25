-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 21:17:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usarios`
--

CREATE TABLE `usarios` (
  `ID` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `celular` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usarios`
--

INSERT INTO `usarios` (`ID`, `nombre`, `cedula`, `correo`, `clave`, `direccion`, `telefono_fijo`, `celular`) VALUES
(1, 'nicolas turcy', '1234567890', 'turcynicolas@gmail.com', 'turcy122002', 'ciuedad verde', '12456789', '3194015240'),
(2, 'Carolina Santos', '0987654323', 'kpitufina@yahoo.es', 'santos1505', 'ciudad consulcidio', '7410852', '3118226124'),
(4, 'Alejandro Santos', '6547891231', 'aljandroS@hotmail.com', 'SantosA1989', 'la castellana', '0', '3154107608'),
(8, 'aurora cordoba', '7894561230', 'aurorasc@yahoo.com', '1234567890q', 'quiriguia', '7894561230', '0321654987'),
(9, 'luis', '7894561230', 'luis@gmail', '15082002', 'quiriguia', '7894561230', '0321654987');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usarios`
--
ALTER TABLE `usarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usarios`
--
ALTER TABLE `usarios`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

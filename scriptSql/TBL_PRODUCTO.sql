-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2021 a las 03:34:00
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TBL_PRODUCTO`
--

CREATE TABLE `tbl_producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `P_PRODUCTO` varchar(100) NOT NULL,
  `P_CANTIDAD` int(100) NOT NULL,
  `P_LOTE` varchar(100) NOT NULL,
  `P_FECHA` date NOT NULL,
  `P_PRECIO` int(100) NOT NULL,
  `P_VENTA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `TBL_PRODUCTO`
--

INSERT INTO `TBL_PRODUCTO` (`ID_PRODUCTO`, `P_PRODUCTO`, `P_CANTIDAD`, `P_LOTE`, `P_FECHA`, `P_PRECIO`, `P_VENTA`) VALUES
(1, 'Arroz', 1, '1', '2021-05-05', 2, ''),
(2, 'Aceite', 2, '1', '2021-05-05', 30, 'VENDIDO'),
(3, 'Azucar', 2, '1', '2021-05-05', 30, 'VENDIDO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `TBL_PRODUCTO`
--
ALTER TABLE `TBL_PRODUCTO`
  ADD PRIMARY KEY (`ID_PRODUCTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `TBL_PRODUCTO`
--
ALTER TABLE `TBL_PRODUCTO`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

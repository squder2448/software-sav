-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2023 a las 05:09:12
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `software_sav`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `nombre_producto` varchar(45) NOT NULL,
  `descripccion` varchar(45) NOT NULL,
  `existencia` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `utilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `marca`, `nombre_producto`, `descripccion`, `existencia`, `stock`, `precio_compra`, `precio_venta`, `utilidad`) VALUES
(1001, 'Nike', 'Zapatillas de running', 'Zapatillas de running Nike Air Zoom Pegasus 3', 20, 10, 100, 150, 50),
(1002, 'Adidas', 'Camiseta deportiva', 'Camiseta de algodón Adidas para mujer', 30, 15, 25, 40, 15),
(1003, 'Samsung', 'Smartphone', 'Smartphone Samsung Galaxy S21 Ultra 5G', 2, 5, 900, 1200, 300),
(1004, 'Apple', 'Tablet', 'Tablet iPad Air de Apple con pantalla Retina ', 5, 2, 600, 800, 200),
(1005, 'Bose', 'Auriculares', 'Auriculares inalámbricos Bose QuietComfort 35', 15, 8, 200, 300, 100),
(1006, 'CALVIN KLEIN', 'BOXER LICRADOS', 'BOXER NEGROS TALLA #34', 20, 5, 15000, 25000, 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `Cedula` int(11) NOT NULL,
  `Rol` varchar(45) NOT NULL,
  `Sueldo` int(11) NOT NULL,
  `cuenta_bancaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `usuario`, `contraseña`, `nombres`, `apellidos`, `Cedula`, `Rol`, `Sueldo`, `cuenta_bancaria`) VALUES
(1, 'admin', '123456', 'Cristian', 'Castañeda', 0, '', 0, 0),
(2, 'nidian24', 'abbyteamo', 'nidian ', 'dominguez', 1003294476, 'vendedora', 1000000, 745000356);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

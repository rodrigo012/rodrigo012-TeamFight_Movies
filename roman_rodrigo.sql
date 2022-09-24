-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2021 a las 05:05:35
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `roman_rodrigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `Descripcion`) VALUES
(1, 'Accion'),
(2, 'Suspenso'),
(3, 'Terror'),
(4, 'Variado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(11) NOT NULL,
  `consulta` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `consulta`, `email`, `nombre`, `apellido`, `estado`) VALUES
(2, 'Primeros que nada, buenas tardes.', 'gonzalogomez@gmail.com', 'Gonzalo', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `Descripcion`) VALUES
(1, 'adminstrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `categoria_id` int(10) NOT NULL,
  `imagen` varchar(502) NOT NULL,
  `precio_costo` double(7,2) NOT NULL,
  `precio_venta` double(7,2) NOT NULL,
  `stock` int(10) NOT NULL,
  `stock_min` int(10) NOT NULL,
  `eliminado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `Descripcion`, `categoria_id`, `imagen`, `precio_costo`, `precio_venta`, `stock`, `stock_min`, `eliminado`) VALUES
(1, 'Bad Boys Para siempre', 1, 'assets/img/producto/A (1).jpg', 123.00, 1423.00, 12, 12, 'SI'),
(2, 'IT 1', 3, 'assets/img/producto/terror.jpg', 12.00, 150.00, 9, 10, 'NO'),
(3, 'Bad Boys Para siempre', 1, 'assets/img/producto/batboys.jpg', 230.00, 850.00, 5, 1, 'NO'),
(4, 'coco', 4, 'assets/img/producto/IT.jpg', 120.00, 231.00, 123, 21, 'NO'),
(5, 'parasitos', 2, 'assets/img/productos/catalogoparasitos.jpg', 1234.00, 12.00, 3, 2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `apellido` varchar(90) NOT NULL,
  `email` varchar(600) NOT NULL,
  `perfil_id` int(20) NOT NULL,
  `baja` varchar(2) NOT NULL DEFAULT 'NO',
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `perfil_id`, `baja`, `usuario`, `password`) VALUES
(3, 'rodrigo', 'roman', 'rodrigo.ball@LIVE.COM.AR', 1, 'NO', 'rodrigo12', 'blackrose'),
(4, 'Roberto', 'Paco', 'akfgjkasfg@hotmail.com', 2, 'SI', 'paqui', 'mama1234'),
(5, 'Gonzalo', 'Gomez', 'gonzalogomez@gmail.com', 2, 'NO', 'chalox95', 'chalotester202'),
(6, 'yanina', 'medina', 'yanina@hotmail.com', 2, 'NO', 'yanina', 'hola1234'),
(7, 'juan', 'Maidana', 'santim@gmail.com', 2, 'NO', 'santi01', 'santi2021'),
(8, 'Juan', 'Gonzalez', 'juangonzalez@yahoo.com', 2, 'SI', 'juangonzalez23', '12314315231341'),
(9, 'paco', 'medina', 'roasd@hotmail.com', 2, 'NO', 'papa', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `total_venta` double(10,2) NOT NULL,
  `id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_cabecera`
--

INSERT INTO `ventas_cabecera` (`id`, `fecha`, `total_venta`, `id_usuario`) VALUES
(1, '2021-06-21', 1.00, 5),
(2, '2021-06-21', 1.00, 5),
(3, '2021-06-21', 1.00, 5),
(4, '2021-06-22', 1335.00, 4),
(5, '2021-06-22', 1335.00, 4),
(6, '2021-06-22', 1335.00, 4),
(7, '2021-06-22', 1335.00, 4),
(8, '2021-06-22', 1335.00, 4),
(9, '2021-06-27', 12.00, 6),
(10, '2021-07-05', 1000.00, 6),
(11, '2021-07-05', 1000.00, 6),
(12, '2021-07-06', 4400.00, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id` int(10) NOT NULL,
  `venta_id` int(10) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id`, `venta_id`, `producto_id`, `cantidad`, `precio`, `total`) VALUES
(1, 2, 2, 1, 1.00, 1.00),
(2, 3, 2, 1, 1.00, 1.00),
(3, 4, 5, 1, 785.00, 785.00),
(4, 4, 4, 1, 200.00, 200.00),
(5, 4, 6, 1, 350.00, 350.00),
(6, 9, 31, 1, 12.00, 12.00),
(7, 10, 2, 1, 150.00, 150.00),
(8, 10, 3, 1, 850.00, 850.00),
(9, 11, 2, 1, 150.00, 150.00),
(10, 11, 3, 1, 850.00, 850.00),
(11, 12, 2, 1, 150.00, 150.00),
(12, 12, 3, 5, 850.00, 4250.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario` (`perfil_id`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_cabecera_1` (`id_usuario`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_detalle__1` (`venta_id`),
  ADD KEY `ventas_detalle__2` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id`);

--
-- Filtros para la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD CONSTRAINT `venta_cabecera_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventas_detalle__1` FOREIGN KEY (`venta_id`) REFERENCES `ventas_cabecera` (`id`),
  ADD CONSTRAINT `ventas_detalle__2` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

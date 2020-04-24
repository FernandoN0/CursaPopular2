-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2020 a las 19:31:34
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ampa_cursa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto_cursa`
--

CREATE TABLE `foto_cursa` (
  `id_foto` int(11) NOT NULL,
  `id_cursa` int(11) NOT NULL,
  `ruta_foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(40) NOT NULL,
  `edad_min` int(2) NOT NULL,
  `edad_max` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`id_categoria`, `nombre_categoria`, `edad_min`, `edad_max`) VALUES
(1, 'Joven', 10, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cursa`
--

CREATE TABLE `tbl_cursa` (
  `id_cursa` int(11) NOT NULL,
  `fecha_cursa` date NOT NULL,
  `hora_cursa` time NOT NULL,
  `recorrido_cursa` varchar(100) NOT NULL,
  `activa_cursa` enum('si','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_cursa`
--

INSERT INTO `tbl_cursa` (`id_cursa`, `fecha_cursa`, `hora_cursa`, `recorrido_cursa`, `activa_cursa`) VALUES
(1, '2020-03-27', '09:00:00', 'De principio a fin', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inscripcion`
--

CREATE TABLE `tbl_inscripcion` (
  `id_inscripcion` int(11) NOT NULL,
  `dorsal` int(3) NOT NULL,
  `id_participante` varchar(9) NOT NULL,
  `id_cursa` int(11) NOT NULL,
  `categoria_cursa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_inscripcion`
--

INSERT INTO `tbl_inscripcion` (`id_inscripcion`, `dorsal`, `id_participante`, `id_cursa`, `categoria_cursa`) VALUES
(1, 1, '49185544K', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_participantes`
--

CREATE TABLE `tbl_participantes` (
  `dni` varchar(9) NOT NULL,
  `nombre_parti` varchar(25) NOT NULL,
  `apellido_parti` varchar(50) NOT NULL,
  `sexo_parti` enum('h','m') NOT NULL,
  `fechanac_parti` date NOT NULL,
  `discapacitado_parti` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_participantes`
--

INSERT INTO `tbl_participantes` (`dni`, `nombre_parti`, `apellido_parti`, `sexo_parti`, `fechanac_parti`, `discapacitado_parti`) VALUES
('49185544K', 'Gerard', 'Pazos', 'h', '1999-11-05', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultado`
--

CREATE TABLE `tbl_resultado` (
  `id_inscripcion` int(11) NOT NULL,
  `posicionabs_parti` varchar(3) NOT NULL,
  `posicionrel_parti` int(3) NOT NULL,
  `tiempo_parti` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_resultado`
--

INSERT INTO `tbl_resultado` (`id_inscripcion`, `posicionabs_parti`, `posicionrel_parti`, `tiempo_parti`) VALUES
(1, '1', 1, '00:06:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `pass_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `nombre_usuario`, `pass_usuario`) VALUES
(1, 'gerard', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'fernando', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foto_cursa`
--
ALTER TABLE `foto_cursa`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_cursa` (`id_cursa`);

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tbl_cursa`
--
ALTER TABLE `tbl_cursa`
  ADD PRIMARY KEY (`id_cursa`);

--
-- Indices de la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `categoria_cursa` (`categoria_cursa`),
  ADD KEY `id_participante` (`id_participante`,`id_cursa`),
  ADD KEY `id_cursa` (`id_cursa`);

--
-- Indices de la tabla `tbl_participantes`
--
ALTER TABLE `tbl_participantes`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `tbl_resultado`
--
ALTER TABLE `tbl_resultado`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_inscripcion` (`id_inscripcion`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_cursa`
--
ALTER TABLE `tbl_cursa`
  MODIFY `id_cursa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foto_cursa`
--
ALTER TABLE `foto_cursa`
  ADD CONSTRAINT `foto_cursa_ibfk_1` FOREIGN KEY (`id_cursa`) REFERENCES `tbl_cursa` (`id_cursa`);

--
-- Filtros para la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  ADD CONSTRAINT `tbl_inscripcion_ibfk_1` FOREIGN KEY (`categoria_cursa`) REFERENCES `tbl_categorias` (`id_categoria`),
  ADD CONSTRAINT `tbl_inscripcion_ibfk_2` FOREIGN KEY (`id_cursa`) REFERENCES `tbl_cursa` (`id_cursa`);

--
-- Filtros para la tabla `tbl_participantes`
--
ALTER TABLE `tbl_participantes`
  ADD CONSTRAINT `tbl_participantes_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `tbl_inscripcion` (`id_participante`);

--
-- Filtros para la tabla `tbl_resultado`
--
ALTER TABLE `tbl_resultado`
  ADD CONSTRAINT `tbl_resultado_ibfk_1` FOREIGN KEY (`id_inscripcion`) REFERENCES `tbl_inscripcion` (`id_inscripcion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

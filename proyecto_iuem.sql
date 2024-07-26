-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2024 a las 06:54:12
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_iuem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido_paterno` varchar(250) NOT NULL,
  `apellido_materno` varchar(250) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(150) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `acta` varchar(255) DEFAULT NULL,
  `curp` varchar(255) DEFAULT NULL,
  `ine` varchar(255) DEFAULT NULL,
  `comprobante` varchar(255) DEFAULT NULL,
  `certificado` varchar(255) DEFAULT NULL,
  `estatus` varchar(55) DEFAULT NULL,
  `carrera` varchar(255) DEFAULT NULL,
  `turno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `correo`, `fecha_registro`, `acta`, `curp`, `ine`, `comprobante`, `certificado`, `estatus`, `carrera`, `turno`) VALUES
(2400101, 'Monica', 'Orozco', 'Ramirez', '0987654321', 'moni@gmail.com', '2024-07-26 04:42:18', '1', '1', '1', '1', '1', 'Alumno', 'Derecho', 'Vespertino'),
(2400102, 'Danna Paola', 'Zacarias', 'Hernandez', '7222155551', 'mafejuga02@live.com.mx', '2024-07-26 04:43:18', '1', '1', '1', '1', '1', 'Alumno', 'Derecho', 'Sabatino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `ap` varchar(250) NOT NULL,
  `am` varchar(250) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `contraseña` varchar(255) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `ap`, `am`, `fecha_registro`, `contraseña`, `telefono`, `cargo`) VALUES
(1, 'Brandon', 'sistemas@iuem.net', 'Alonso', 'Serrano', '2024-07-01 02:31:32', '250223', NULL, NULL),
(5, 'Carlos Aarón', 'sistemas@plusindustrial.com', 'Magaña', 'Carrillo', '2024-07-25 00:02:48', 'carlos', '5581439171', 'Sistemas'),
(6, 'Jehudiel', 'sistemas@iuem.net', 'Ruiz', 'Patoni', '2024-07-25 00:06:36', 'jehudiel', '5555555555', 'Sistemas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2400103;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-09-2020 a las 21:22:53
-- Versión del servidor: 10.4.14-MariaDB-cll-lve
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u574277858_epgs2secu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `iddatos` int(11) NOT NULL,
  `institucionDatos` text NOT NULL,
  `datosTitulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`iddatos`, `institucionDatos`, `datosTitulo`) VALUES
(1, 'SIN-DATOS ', 'SIN-DATOS ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `didactica`
--

CREATE TABLE `didactica` (
  `iddidactica` int(11) NOT NULL,
  `titulodidactica` text NOT NULL,
  `datosdidactica` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `didactica`
--

INSERT INTO `didactica` (`iddidactica`, `titulodidactica`, `datosdidactica`) VALUES
(7, '<H3>ANEXO 33</H3>', '<H5>MATEMÁTICA</H5>\n<a href=\"https://drive.google.com/file/d/1K9ISuwRjuVFP3HaDpMXQrWL2fLsW6Pn6/view?usp=sharing\">Trabajo 1</a>\n\n\n<H5><br>HISTORIA</H5>\n<a href=\"https://drive.google.com/file/d/1K9ISuwRjuVFP3HaDpMXQrWL2fLsW6Pn6/view?usp=sharing\">Trabajo 1</a>\n<br><a href=\"https://drive.google.com/file/d/1K9ISuwRjuVFP3HaDpMXQrWL2fLsW6Pn6/view?usp=sharing\">Trabajo 2</a>\n\n\n'),
(8, '<H3>BARRIO</H3>', '<H5>MATEMÁTICA</H5>\n<a href=\"https://drive.google.com/file/d/1K9ISuwRjuVFP3HaDpMXQrWL2fLsW6Pn6/view?usp=sharing\">Trabajo 1</a>\n\n\n<H5><br>HISTORIA</H5>\n<a href=\"https://drive.google.com/file/d/1K9ISuwRjuVFP3HaDpMXQrWL2fLsW6Pn6/view?usp=sharing\">Trabajo 1</a>\n\n\n\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idgaleria` int(11) NOT NULL,
  `galeriaDatos` text NOT NULL,
  `galeriaFoto` text NOT NULL,
  `galeriaTitulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`idgaleria`, `galeriaDatos`, `galeriaFoto`, `galeriaTitulo`) VALUES
(1, 'SIN-DATOS', 'img/5ecf59d5d1d2f-descarga (1).jpg', 'SIN-DATOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `idhistoria` int(11) NOT NULL,
  `historiaDatos` text NOT NULL,
  `historiaTitulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`idhistoria`, `historiaDatos`, `historiaTitulo`) VALUES
(1, 'SIN-DATOS ', 'SIN-DATOS                ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `idinformacion` int(11) NOT NULL,
  `datos` text NOT NULL,
  `fotos` text NOT NULL,
  `titulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`idinformacion`, `datos`, `fotos`, `titulo`) VALUES
(1, '<h2>PLANTILLA </h2><br>\r\n<a href=\"https://drive.google.com/file/d/1nBRIth1XxaPvW1f3KZbVYSUhd0vL-mqI/view?usp=sharing\" ><h5>\r\nPLANTILLA\r\n</h5></a><br><br>\r\n\r\n\r\n<h2>Registro de Asistencia</h2><br>\r\n\r\n\r\n\r\n<a href=\"https://drive.google.com/file/d/10qzQngjREZbwh3Fm12Eg4R38tbKYdkR7/view?usp=sharing\" ><h5>Tutorial para registrar de Asistencia del Alumno y Docente</h5></a><br>\r\n\r\n<a href=\"https://drive.google.com/file/d/1pCyveCUnGtRgpr7JZH-uyjJU3oCdIwv6/view?usp=sharing\" ><h5>\r\nTutorial para el administrador del sistema de asistencia\r\n</h5></a><br>\r\n\r\n\r\n\r\n\r\n\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/60R5g7SZniw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br><br>\r\n\r\n<br><br><h5>------------------------------------------------------------</h5><br>\r\n\r\n<br><h2>TUTORIALES GOOGLE DRIVE- DOCENTES Y AUXILIAR</h2><br>\r\n\r\n\r\n<h5>VIDEOS TUTORIALES YOUTUBE</h5><br>\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/g73qRmMlppA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/y3Dql9q9Rag\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/IS9MH9HtvT8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/v4rjQDSAcqw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n\r\n<br><br>------------------------------------------------------------<br>\r\n\r\n<br><h2>TUTORIALES CHAMILO (AULA VIRTUAL)</h2><br>\r\n\r\n<h5>VIDEOS TUTORIALES YOUTUBE - DOCENTES</h5><br>\r\n\r\n\r\n\r\n <a href=\"https://docs.chamilo.org/es/teacher/introduccion/que_es_chamilo.html\" ><h5>Manuales de uso de Chamilo - Docente</h5></a><br>\r\n <a href=\"https://drive.google.com/file/d/1Pi7341g-rCoD2t6Q9JZ2ob3Ft58iA8jO/view?usp=sharing\" ><h5>Manuales de uso de Chamilo - Docente 2</h5></a>\r\n\r\n<br><br>\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A6EuqXtlaFQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n<br><br><br>\r\n<h5>...................................................................................................................</h5>\r\n<br>\r\n\r\n\r\n\r\n\r\n<h5>VIDEOS TUTORIALES YOUTUBE - AUXILIAR</h5><br>\r\n\r\n<a href=\"https://drive.google.com/file/d/1x4yj6mtjmVcbJVte3BglUY3kQL16o4Eb/view?usp=sharing\" ><h5>Manuales de uso de Chamilo - Docente</h5></a><br><br>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nV4Ano7_Y0o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/n8d30K4S5ak\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n\r\n\r\n\r\n<br><br><h5>------------------------------------------------------------</h5><br>\r\n\r\n<br><h2>TUTORIALES PARA DAR DE ALTA UN USUARIO EN EL AULA VIRTUAL</h2><br>\r\n\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1_7qD5l71pw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n', 'img/5ecf59bfd9d17-descarga (1).jpg', 'CAPACITACIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `idMensaje` int(11) NOT NULL,
  `mensajeT` text NOT NULL,
  `tituloMensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`idMensaje`, `mensajeT`, `tituloMensaje`) VALUES
(8, 'Solicito se me autorice el ingeso al aula virtual a los fines subir los materiales didácticos.Saludos Cordiales.-', 'Díaz Juan Fernando/jufer212@hotmail.com/3624620933');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE `premios` (
  `idpremios` int(11) NOT NULL,
  `premiosDatos` text NOT NULL,
  `premiosFotos` text NOT NULL,
  `premiosTitulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `premios`
--

INSERT INTO `premios` (`idpremios`, `premiosDatos`, `premiosFotos`, `premiosTitulo`) VALUES
(1, 'SIN-DATOS', 'img/5ecf59ec0e93d-descarga (1).jpg', 'SIN-DATOS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`iddatos`);

--
-- Indices de la tabla `didactica`
--
ALTER TABLE `didactica`
  ADD PRIMARY KEY (`iddidactica`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idgaleria`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`idhistoria`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`idinformacion`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`idMensaje`);

--
-- Indices de la tabla `premios`
--
ALTER TABLE `premios`
  ADD PRIMARY KEY (`idpremios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `iddatos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `didactica`
--
ALTER TABLE `didactica`
  MODIFY `iddidactica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idgaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `idhistoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `idinformacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `idMensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `premios`
--
ALTER TABLE `premios`
  MODIFY `idpremios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

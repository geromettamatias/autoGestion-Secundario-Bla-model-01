-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-09-2020 a las 21:21:58
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
-- Base de datos: `u574277858_epgs2secu1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAsisAlumno` int(11) NOT NULL,
  `usuario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secuBla` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciaalumno`
--

CREATE TABLE `asistenciaalumno` (
  `idAsistencia` int(11) NOT NULL,
  `idAlumnos` text NOT NULL,
  `cantidad` text CHARACTER SET armscii8 NOT NULL,
  `fecha` text NOT NULL,
  `justifico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asistenciaalumno`
--

INSERT INTO `asistenciaalumno` (`idAsistencia`, `idAlumnos`, `cantidad`, `fecha`, `justifico`) VALUES
(102, '21', '1', '2020-03-01', 'SI'),
(103, '21', '0.5', '2020-09-09', 'SI'),
(104, '21', '0.5', '2020-06-06', 'SIN-DATOS'),
(105, '37', '0.25', '2020-03-01', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cosntanciaservicio`
--

CREATE TABLE `cosntanciaservicio` (
  `idConstancia` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `dni` text NOT NULL,
  `asignatura` text NOT NULL,
  `resolucion` text NOT NULL,
  `desde` text NOT NULL,
  `hasta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosalumnos`
--

CREATE TABLE `datosalumnos` (
  `idAlumnos` int(11) NOT NULL,
  `nombreAlumnos` text DEFAULT NULL,
  `dniAlumnos` text DEFAULT NULL,
  `cuilAlumnos` text DEFAULT NULL,
  `domicilioAlumnos` text DEFAULT NULL,
  `emailAlumnos` text DEFAULT NULL,
  `telefonoAlumnos` text DEFAULT NULL,
  `discapasidadAlumnos` text DEFAULT NULL,
  `cursoAlumnos` text NOT NULL,
  `nLegajoAlumno` text NOT NULL,
  `legajoSituacion` text NOT NULL,
  `nombreTutor` text NOT NULL,
  `dniTutor` text NOT NULL,
  `TelefonoTutor` text NOT NULL,
  `obserbacionGeneral` text NOT NULL,
  `passLogin` text NOT NULL,
  `planAñoAlumno` text NOT NULL,
  `especialidadAlumno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosasignatura`
--

CREATE TABLE `datosasignatura` (
  `idAsignatura` int(11) NOT NULL,
  `idCurso` text NOT NULL,
  `nombre` text NOT NULL,
  `horaCatedra` double NOT NULL,
  `horario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscurso`
--

CREATE TABLE `datoscurso` (
  `idCurso` int(11) NOT NULL,
  `curso` text NOT NULL,
  `año` text NOT NULL,
  `especialidadT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonal`
--

CREATE TABLE `datospersonal` (
  `idPersonal` int(11) NOT NULL,
  `nombreDocente` text NOT NULL,
  `dniDocente` text NOT NULL,
  `actividadDocente` text NOT NULL,
  `tituloDocente` text NOT NULL,
  `nTituloDocente` text NOT NULL,
  `nTelefonicodocente` text NOT NULL,
  `domicilioDocente` text NOT NULL,
  `emailDocente` text NOT NULL,
  `passLogin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datospersonal`
--

INSERT INTO `datospersonal` (`idPersonal`, `nombreDocente`, `dniDocente`, `actividadDocente`, `tituloDocente`, `nTituloDocente`, `nTelefonicodocente`, `domicilioDocente`, `emailDocente`, `passLogin`) VALUES
(67, 'Kiewczun Matias', '32729125', 'Docente', 'Profesor', '1', '32323232', 'PADRE CERQ', 'geromettamatias@gmail.com', '123'),
(68, '1', '1', 'Directivo', '1', '1', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `idInstitucion` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `cue` text NOT NULL,
  `domicilio` text NOT NULL,
  `tel` text NOT NULL,
  `email` text NOT NULL,
  `facebook` text NOT NULL,
  `modalidad` text NOT NULL,
  `planEstudio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idInstitucion`, `nombre`, `cue`, `domicilio`, `tel`, `email`, `facebook`, `modalidad`, `planEstudio`) VALUES
(17, 'SECU', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion_plan_estudio`
--

CREATE TABLE `institucion_plan_estudio` (
  `idPlanAsig` int(11) NOT NULL,
  `idInstitucion` text NOT NULL,
  `planAño` text NOT NULL,
  `planAsignatura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion_plan_estudio`
--

INSERT INTO `institucion_plan_estudio` (`idPlanAsig`, `idInstitucion`, `planAño`, `planAsignatura`) VALUES
(17, '13', '0', ''),
(31, '13', 'PRIMER AÑO', 'MATEMÁTICA'),
(32, '15', 'PRIMER AÑO', 'MATEMÁTICA'),
(34, '14', 'PRIMER AÑO', 'HISTORIA'),
(35, '17', 'PRIMER AÑO', 'Matemática I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `dniLogin` text NOT NULL,
  `passLogin` text NOT NULL,
  `tipoUsuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idLogin`, `dniLogin`, `passLogin`, `tipoUsuario`) VALUES
(44, '32729125', '32729125', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notaalumno`
--

CREATE TABLE `notaalumno` (
  `idNota` int(11) NOT NULL,
  `idAlumnos` text NOT NULL,
  `idAsignaturas` text NOT NULL,
  `nota1tr` text NOT NULL,
  `nota2tr` text NOT NULL,
  `nota3tr` text NOT NULL,
  `integrador` text NOT NULL,
  `diciembre` text NOT NULL,
  `marzo` text NOT NULL,
  `notaFinal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notaalumno`
--

INSERT INTO `notaalumno` (`idNota`, `idAlumnos`, `idAsignaturas`, `nota1tr`, `nota2tr`, `nota3tr`, `integrador`, `diciembre`, `marzo`, `notaFinal`) VALUES
(270, '57', '76', 'S', 'A', '', '', '', '', ''),
(271, '57', '77', 'rr', 'r', 'r', '2', 'd', '2', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalasignatura`
--

CREATE TABLE `personalasignatura` (
  `idAsignatura` int(11) NOT NULL,
  `idPersonal` text NOT NULL,
  `curso` text NOT NULL,
  `asignatura` text NOT NULL,
  `horasCatedras` double NOT NULL,
  `situacion` text NOT NULL,
  `lunes` text NOT NULL,
  `martes` text NOT NULL,
  `miercoles` text NOT NULL,
  `jueve` text NOT NULL,
  `vierne` text NOT NULL,
  `desde` text NOT NULL,
  `hasta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personalasignatura`
--

INSERT INTO `personalasignatura` (`idAsignatura`, `idPersonal`, `curso`, `asignatura`, `horasCatedras`, `situacion`, `lunes`, `martes`, `miercoles`, `jueve`, `vierne`, `desde`, `hasta`) VALUES
(92, '46', '5do 2ra primera', 'Sistema', 1, '1', '1', '1', '1', '1', '1', '1', '222					'),
(96, '47', '3do 2ra primera', 'Sistema', 1, '1', '1', '1', '1', '1', '1', '1', '1	'),
(99, '', '8TA 7TI  ', '1ddd1', 11, '', '', '', '', '', '', '', ''),
(100, '', '3do 2ra primera', 'matematica', 22, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preinsdatosalumnos`
--

CREATE TABLE `preinsdatosalumnos` (
  `idAlumnos` int(11) NOT NULL,
  `nombreAlumnos` text DEFAULT NULL,
  `dniAlumnos` text DEFAULT NULL,
  `cuilAlumnos` text DEFAULT NULL,
  `domicilioAlumnos` text DEFAULT NULL,
  `emailAlumnos` text DEFAULT NULL,
  `telefonoAlumnos` text DEFAULT NULL,
  `discapasidadAlumnos` text DEFAULT NULL,
  `cursoAlumnos` text NOT NULL,
  `nLegajoAlumno` text NOT NULL,
  `legajoSituacion` text NOT NULL,
  `nombreTutor` text NOT NULL,
  `dniTutor` text NOT NULL,
  `TelefonoTutor` text NOT NULL,
  `obserbacionGeneral` text NOT NULL,
  `passLogin` text NOT NULL,
  `situacionAlta` text NOT NULL,
  `obserbacionAlta` text NOT NULL,
  `lanAñoAlumnoPRET` text NOT NULL,
  `especialidadAlumnoPREtt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preinsdatospersonal`
--

CREATE TABLE `preinsdatospersonal` (
  `idPersonal` int(11) NOT NULL,
  `nombreDocente` text NOT NULL,
  `dniDocente` text NOT NULL,
  `actividadDocente` text NOT NULL,
  `tituloDocente` text NOT NULL,
  `nTituloDocente` text NOT NULL,
  `nTelefonicodocente` text NOT NULL,
  `domicilioDocente` text NOT NULL,
  `emailDocente` text NOT NULL,
  `passDocente` text NOT NULL,
  `situacionAlta` text NOT NULL,
  `obserbacionAlta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preinsdatospersonal`
--

INSERT INTO `preinsdatospersonal` (`idPersonal`, `nombreDocente`, `dniDocente`, `actividadDocente`, `tituloDocente`, `nTituloDocente`, `nTelefonicodocente`, `domicilioDocente`, `emailDocente`, `passDocente`, `situacionAlta`, `obserbacionAlta`) VALUES
(27, 'Juan Fernando Díaz', '28660937', 'Docente', 'Abogado', '358F216', '3624620933', 'Vedia 1025,Resistencia- Chaco', 'jufer212@hotmail.com', 'haydn2013', 'Inicio de Tramite', 'En espera'),
(28, 'Silvia Verón ', '20451388', 'Docente', 'PROF. DE TERCER CICLO DE LA EGB Y DE LA EDUC. POLIMODAL EN PSICOLOGÍA ', '290045', '543624898811', 'Don Orione 1050 ', 'silviac90c90@gmail.com', 'Silvia', 'Inicio de Tramite', 'En espera');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAsisAlumno`);

--
-- Indices de la tabla `asistenciaalumno`
--
ALTER TABLE `asistenciaalumno`
  ADD PRIMARY KEY (`idAsistencia`);

--
-- Indices de la tabla `cosntanciaservicio`
--
ALTER TABLE `cosntanciaservicio`
  ADD PRIMARY KEY (`idConstancia`);

--
-- Indices de la tabla `datosalumnos`
--
ALTER TABLE `datosalumnos`
  ADD PRIMARY KEY (`idAlumnos`);

--
-- Indices de la tabla `datosasignatura`
--
ALTER TABLE `datosasignatura`
  ADD PRIMARY KEY (`idAsignatura`);

--
-- Indices de la tabla `datoscurso`
--
ALTER TABLE `datoscurso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  ADD PRIMARY KEY (`idPersonal`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`idInstitucion`);

--
-- Indices de la tabla `institucion_plan_estudio`
--
ALTER TABLE `institucion_plan_estudio`
  ADD PRIMARY KEY (`idPlanAsig`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indices de la tabla `notaalumno`
--
ALTER TABLE `notaalumno`
  ADD PRIMARY KEY (`idNota`);

--
-- Indices de la tabla `personalasignatura`
--
ALTER TABLE `personalasignatura`
  ADD PRIMARY KEY (`idAsignatura`);

--
-- Indices de la tabla `preinsdatosalumnos`
--
ALTER TABLE `preinsdatosalumnos`
  ADD PRIMARY KEY (`idAlumnos`);

--
-- Indices de la tabla `preinsdatospersonal`
--
ALTER TABLE `preinsdatospersonal`
  ADD PRIMARY KEY (`idPersonal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAsisAlumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asistenciaalumno`
--
ALTER TABLE `asistenciaalumno`
  MODIFY `idAsistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `cosntanciaservicio`
--
ALTER TABLE `cosntanciaservicio`
  MODIFY `idConstancia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datosalumnos`
--
ALTER TABLE `datosalumnos`
  MODIFY `idAlumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `datosasignatura`
--
ALTER TABLE `datosasignatura`
  MODIFY `idAsignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `datoscurso`
--
ALTER TABLE `datoscurso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  MODIFY `idPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `idInstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `institucion_plan_estudio`
--
ALTER TABLE `institucion_plan_estudio`
  MODIFY `idPlanAsig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `notaalumno`
--
ALTER TABLE `notaalumno`
  MODIFY `idNota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT de la tabla `personalasignatura`
--
ALTER TABLE `personalasignatura`
  MODIFY `idAsignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `preinsdatosalumnos`
--
ALTER TABLE `preinsdatosalumnos`
  MODIFY `idAlumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `preinsdatospersonal`
--
ALTER TABLE `preinsdatospersonal`
  MODIFY `idPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

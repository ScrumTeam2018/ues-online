-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-10-2018 a las 19:50:20
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ues`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
CREATE TABLE IF NOT EXISTS `asignatura` (
  `idasignatura` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_as` varchar(6) CHARACTER SET latin1 NOT NULL,
  `nombre_as` varchar(150) CHARACTER SET latin1 NOT NULL,
  `tipo_as` tinyint(1) NOT NULL,
  `uv_as` int(11) NOT NULL,
  `ciclo_as` int(11) NOT NULL,
  `estado_as` int(11) NOT NULL,
  `prerequisito` varchar(25) CHARACTER SET latin1 NOT NULL,
  `postrequisito` varchar(25) CHARACTER SET latin1 NOT NULL,
  `idplanestudiofk` int(11) NOT NULL,
  PRIMARY KEY (`idasignatura`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`idasignatura`, `codigo_as`, `nombre_as`, `tipo_as`, `uv_as`, `ciclo_as`, `estado_as`, `prerequisito`, `postrequisito`, `idplanestudiofk`) VALUES
(2, 'pro175', 'Programacion I', 2, 4, 2, 1, 'introduccion', 'Programacion II', 1),
(3, 'Mat175', 'MatemÃ¡tica III', 2, 4, 2, 1, 'Matematica I', 'Matematica II', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

DROP TABLE IF EXISTS `aula`;
CREATE TABLE IF NOT EXISTS `aula` (
  `idaula` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_au` varchar(75) CHARACTER SET latin1 NOT NULL,
  `ubicacion_au` text CHARACTER SET latin1 NOT NULL,
  `cantidad_au` int(11) NOT NULL,
  `estado_au` int(11) NOT NULL,
  `observacion_au` text NOT NULL,
  PRIMARY KEY (`idaula`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`idaula`, `nombre_au`, `ubicacion_au`, `cantidad_au`, `estado_au`, `observacion_au`) VALUES
(1, 'Aula 19', 'Edificio A Segundo Nivel', 30, 1, 'Finalizacion del Mantenimiento de Infresetructura'),
(2, 'Aula 20', 'Edificio A Segundo Nivel', 30, 1, 'Registro'),
(3, 'Aula 21', 'Edificio A Segundo Nivel', 32, 1, 'Registro'),
(4, 'Aula 22', 'Edificio A Segundo Nivel', 25, 1, 'Registro'),
(5, 'Aula 23', 'Edificio A Segundo Nivel', 35, 1, 'Registro'),
(6, 'Aula 24', 'Edificio A Segundo Nivel', 30, 1, 'Registro'),
(7, 'Aula 25', 'Edificio A Segundo Nivel', 30, 1, 'Registro'),
(8, 'Aula', 'Edificio A Segundo Nivel', 35, 1, 'Registro'),
(9, 'Aula 27', 'Edificio A Segundo Nivel ', 30, 1, 'Termino el Mantenimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula_ca`
--

DROP TABLE IF EXISTS `aula_ca`;
CREATE TABLE IF NOT EXISTS `aula_ca` (
  `id_au_ca` int(11) NOT NULL AUTO_INCREMENT,
  `idaula` int(11) NOT NULL,
  `id_co_au` int(11) NOT NULL,
  PRIMARY KEY (`id_au_ca`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aula_ca`
--

INSERT INTO `aula_ca` (`id_au_ca`, `idaula`, `id_co_au`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 1),
(4, 3, 2),
(5, 4, 2),
(6, 5, 1),
(7, 6, 1),
(8, 6, 2),
(9, 7, 1),
(10, 7, 2),
(11, 9, 1),
(12, 9, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `id_ca_em` int(11) NOT NULL,
  `nombre_ca` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ca_em`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_ca_em`, `nombre_ca`) VALUES
(1, 'Tutor'),
(2, 'Tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `idcarrera` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_ca` varchar(10) NOT NULL,
  `nombre_ca` text NOT NULL,
  `duracion_ca` int(11) NOT NULL,
  `estado_ca` int(11) NOT NULL,
  `idfacultadfk` int(11) NOT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `codigo_ca`, `nombre_ca`, `duracion_ca`, `estado_ca`, `idfacultadfk`) VALUES
(1, 'L10904', 'Licenciatura en la EnseÃ±anza de la MatemÃ¡tica', 5, 1, 1),
(2, 'L10902', 'Licenciatura en InformÃ¡tica Educativa', 5, 1, 1),
(3, 'L10906', 'Licenciatura en la EnseÃ±anza de las Ciencias Naturales', 5, 1, 1),
(4, 'L10415', 'Licenciatura en EnseÃ±anza del InglÃ©s', 5, 1, 2),
(5, 'L10515', 'IngenierÃ­a de Sistemas InformÃ¡ticos', 5, 1, 3),
(6, 'L10502', 'IngenierÃ­a Industrial', 5, 1, 3),
(12, 'L20510', 'Ingenieria Agroindustrial', 5, 1, 6),
(13, 'L20389', 'Tecnico en Informatica', 3, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complemento_aula`
--

DROP TABLE IF EXISTS `complemento_aula`;
CREATE TABLE IF NOT EXISTS `complemento_aula` (
  `id_co_au` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_co_au` text NOT NULL,
  PRIMARY KEY (`id_co_au`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `complemento_aula`
--

INSERT INTO `complemento_aula` (`id_co_au`, `nombre_co_au`) VALUES
(1, 'Aire Acondicionado'),
(2, 'Proyector Multimedia'),
(3, 'Computadoras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ed_aspectos_evaluar`
--

DROP TABLE IF EXISTS `ed_aspectos_evaluar`;
CREATE TABLE IF NOT EXISTS `ed_aspectos_evaluar` (
  `ed_idaspectos` int(11) NOT NULL AUTO_INCREMENT,
  `ed_naspecto` text NOT NULL,
  `ed_idcriteriofk` int(11) NOT NULL,
  PRIMARY KEY (`ed_idaspectos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ed_criterio`
--

DROP TABLE IF EXISTS `ed_criterio`;
CREATE TABLE IF NOT EXISTS `ed_criterio` (
  `ed_idcriterio` int(11) NOT NULL AUTO_INCREMENT,
  `ed_ncriterio` varchar(200) NOT NULL,
  PRIMARY KEY (`ed_idcriterio`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ed_criterio`
--

INSERT INTO `ed_criterio` (`ed_idcriterio`, `ed_ncriterio`) VALUES
(1, 'planificacion dos'),
(2, 'puntualidad uno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ed_item`
--

DROP TABLE IF EXISTS `ed_item`;
CREATE TABLE IF NOT EXISTS `ed_item` (
  `ed_iditem` int(11) NOT NULL AUTO_INCREMENT,
  `ed_nitem` text NOT NULL,
  `ed_idcriterio` int(11) NOT NULL,
  `ed_idaspecto` int(11) NOT NULL,
  PRIMARY KEY (`ed_iditem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_em` varchar(75) NOT NULL,
  `apellido_em` varchar(75) NOT NULL,
  `DUI_em` varchar(10) NOT NULL,
  `NIT_em` varchar(18) NOT NULL,
  `direccion_em` text NOT NULL,
  `cargo_em` int(11) NOT NULL,
  `especialidad_em` varchar(75) NOT NULL,
  `genero_em` varchar(10) NOT NULL,
  `estado_em` int(11) NOT NULL,
  `estado_ci` varchar(30) NOT NULL,
  PRIMARY KEY (`idempleado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `nombre_em`, `apellido_em`, `DUI_em`, `NIT_em`, `direccion_em`, `cargo_em`, `especialidad_em`, `genero_em`, `estado_em`, `estado_ci`) VALUES
(1, 'Marcos Julio', 'Duran ', '0489568-9', '1003-020690-101-1', 'San Vicente', 1, '2', 'Masculino', 1, ''),
(2, 'Ana Gloria', 'Flores Maravilla', '0396895-9', '1003-020680-101-1', 'Barrio el Calvario Casa No. 10, San Vicente', 1, '1', 'Masculino', 1, 'Separado(a)'),
(3, 'Luis Aldair', 'Martinez', '0589639-9', '1003-030590-101-3', 'San Vicente Barrio centro casa No 2', 1, '1', 'Masculino', 1, 'Conviviente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_correo`
--

DROP TABLE IF EXISTS `empleado_correo`;
CREATE TABLE IF NOT EXISTS `empleado_correo` (
  `id_em_co` int(11) NOT NULL AUTO_INCREMENT,
  `correo_em` varchar(100) NOT NULL,
  `idempleadocofk` int(11) NOT NULL,
  PRIMARY KEY (`id_em_co`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado_correo`
--

INSERT INTO `empleado_correo` (`id_em_co`, `correo_em`, `idempleadocofk`) VALUES
(1, 'gloria@gmail.com', 2),
(2, 'luis@ues.edu.sv', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_telefono`
--

DROP TABLE IF EXISTS `empleado_telefono`;
CREATE TABLE IF NOT EXISTS `empleado_telefono` (
  `id_em_te` int(11) NOT NULL AUTO_INCREMENT,
  `telefono_em` varchar(10) NOT NULL,
  `idempleadotefk` int(11) NOT NULL,
  PRIMARY KEY (`id_em_te`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado_telefono`
--

INSERT INTO `empleado_telefono` (`id_em_te`, `telefono_em`, `idempleadotefk`) VALUES
(1, '7895-9685', 2),
(2, '7896-8956', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad_empleado`
--

DROP TABLE IF EXISTS `especialidad_empleado`;
CREATE TABLE IF NOT EXISTS `especialidad_empleado` (
  `id_es_em` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_es` varchar(50) NOT NULL,
  `cargo_es` int(11) NOT NULL,
  PRIMARY KEY (`id_es_em`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidad_empleado`
--

INSERT INTO `especialidad_empleado` (`id_es_em`, `nombre_es`, `cargo_es`) VALUES
(1, 'Licenciado en Matematicas', 1),
(2, 'Licenciado en Lenguaje', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `idestudiante` int(11) NOT NULL AUTO_INCREMENT,
  `carnet_es` varchar(7) NOT NULL,
  `nombre_es` varchar(75) NOT NULL,
  `apellido_es` varchar(75) NOT NULL,
  `genero_es` varchar(10) NOT NULL,
  `NIT_es` varchar(18) NOT NULL,
  `DUI_es` varchar(10) NOT NULL,
  `direccion_es` text NOT NULL,
  `telefono_es` varchar(10) NOT NULL,
  `correo_es` varchar(100) NOT NULL,
  `procedencia_es` varchar(10) NOT NULL,
  `estado_es` int(11) NOT NULL,
  `idfacultad` int(11) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  `observacion_es` text NOT NULL,
  PRIMARY KEY (`idestudiante`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idestudiante`, `carnet_es`, `nombre_es`, `apellido_es`, `genero_es`, `NIT_es`, `DUI_es`, `direccion_es`, `telefono_es`, `correo_es`, `procedencia_es`, `estado_es`, `idfacultad`, `idcarrera`, `observacion_es`) VALUES
(1, 'EM11010', 'Julio Cesar', 'EspaÃ±a Mejia', 'Masculino', '0716-250992-101-1', '04700556-2', 'San  Vicente', '7792-7235', 'cesar@gmail.com', 'Publica', 1, 3, 5, 'Reingreso Actividades Academicas'),
(2, 'LM10991', 'Juan Carlos', 'Lopez Mendoza', 'Masculino', '0716-200790-101-6', '02314567-9', 'Cojutepeque Cuscatlan', '7854-9960', 'lm10991@ues.edu.sv', 'Privada', 1, 3, 5, 'Registro'),
(3, 'CM10101', 'Ana Maria', 'Cordova Martinez', 'Femenino', '0187-020489-101-6', '69015670-9', 'Cojutepeque Cuscatlan', '6122-8745', 'cm10101@ues.edu.sv', 'Publica', 1, 6, 12, 'Registro'),
(4, 'EA12050', 'Marta Alicia', 'Espinoza Aragon', 'Femenino', '0199-020691-101-8', '02134567-9', 'San Rafeal Cedros Cuscatlan', '6199-6630', 'ea12050@ues.edu.sv', 'Publica', 1, 1, 2, 'Registro'),
(5, 'EL13045', 'Melvin Ernesto', 'Escobar Lopez', 'Masculino', '0124-031090-102-9', '07895231-9', 'Ilobasco CabaÃ±as', '6100-9874', 'el13045@ues.edu.sv', 'Privada', 1, 1, 1, 'Registro'),
(6, 'MM10991', 'Katherin Sarai', 'Martinez Martinez', 'Femenino', '0171-031194-101-1', '02357891-8', 'Apastepeque San Vicente', '7711-3210', 'mm@ues.edu.sv', 'Privada', 1, 1, 1, 'Registro'),
(7, 'LL11081', 'Marcos Alexander', 'Lopez Landaverde', 'Masculino', '0174-241289-102-9', '04442598-9', 'San Rafael Cedros Cuscatlan', '7525-9971', 'll11081@ues.edu.sv', 'Publica', 1, 6, 12, 'Registro'),
(8, 'IV12334', 'Gabriela Abigail', 'Iraheta Vaquerano', 'Femenino', '0155-250893-102-3', '01245789-6', 'Cojutepeque Cuscatlan', '7966-9800', 'iv@ues.edu.sv', 'Publica', 1, 2, 4, 'Registro'),
(9, 'PR13009', 'Maria Elizabeth', 'Perez Rodriguez', 'Femenino', '0147-250191-102-0', '07895509-8', 'Apastepeque San Vicente', '7000-1247', 'pr13009@ues.edu.sv', 'Privada', 1, 3, 6, 'Registro'),
(10, 'EA15001', 'Noe Edelison', 'Escobar Alas', 'Masculino', '0174-011089-101-7', '03354879-9', 'Tenancingo Cuscatlan', '7332-9801', 'ea15001@ues.edu.sv', 'Privada', 1, 3, 6, 'Registro'),
(11, 'TM10991', 'Jeniffer Daniela', 'Torres Melgal', 'Femenino', '0188-120889-101-8', '01142687-1', 'Cojutepeque Cuscatlan', '6198-8800', 'tm10991@ues.edu.sv', 'Privada', 1, 2, 4, 'Registro'),
(12, 'GM11015', 'Cesar Isaac', 'EspaÃ±a Cartagena', 'Masculino', '0716-100197-101-1', '04700556-1', 'Tenancingo Cuscatlan', '7792-6100', 'gm11015@ues.edu.sv', 'Privada', 1, 3, 6, 'Registro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

DROP TABLE IF EXISTS `facultad`;
CREATE TABLE IF NOT EXISTS `facultad` (
  `idfacultad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_fa` text NOT NULL,
  `telefono_fa` varchar(10) NOT NULL,
  `correo_fa` varchar(100) NOT NULL,
  `estado_fa` int(11) NOT NULL,
  `id_re_fafk` int(11) NOT NULL,
  PRIMARY KEY (`idfacultad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`idfacultad`, `nombre_fa`, `telefono_fa`, `correo_fa`, `estado_fa`, `id_re_fafk`) VALUES
(1, 'Facultad de Ciencias Naturales y MatemÃ¡tica', '2355-8876', 'ccn_mat@ues.edu.sv', 1, 1),
(2, 'Facultad de Humanidades', '2133-0988', 'humanidades@ues.edu.sv', 1, 3),
(3, 'Facultad de IngenierÃ­a y Arquitectura', '2766-4780', 'ing_arq@ues.edu.sv', 1, 4),
(6, 'Facultad de Ciencias Agronomicas', '2113-8775', 'ciencia@ues.edu.sv', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_estudio`
--

DROP TABLE IF EXISTS `plan_estudio`;
CREATE TABLE IF NOT EXISTS `plan_estudio` (
  `idplanestudio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pe` text NOT NULL,
  `anio_pe` varchar(4) NOT NULL,
  `estado_pe` int(11) NOT NULL,
  `estadolleno_pe` int(11) NOT NULL,
  `idcarrerafk` int(11) NOT NULL,
  PRIMARY KEY (`idplanestudio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan_estudio`
--

INSERT INTO `plan_estudio` (`idplanestudio`, `nombre_pe`, `anio_pe`, `estado_pe`, `estadolleno_pe`, `idcarrerafk`) VALUES
(1, 'IngenierÃ­a de Sistemas InformÃ¡ticos 1998', '1998', 1, 0, 5),
(2, 'Licenciatura en EnseÃ±anza del InglÃ©s 2016', '2016', 1, 0, 4),
(3, 'Ingenieria Agroindustrial 2009', '2009', 1, 0, 12),
(4, 'Tecnico en Informatica 2016', '2016', 1, 0, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante_facultad`
--

DROP TABLE IF EXISTS `representante_facultad`;
CREATE TABLE IF NOT EXISTS `representante_facultad` (
  `id_re_fa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rf` varchar(75) NOT NULL,
  `apellido_rf` varchar(75) NOT NULL,
  `genero_rf` varchar(10) NOT NULL,
  `telefono_rf` varchar(10) NOT NULL,
  `correo_rf` varchar(100) NOT NULL,
  `estado_rf` int(11) NOT NULL,
  PRIMARY KEY (`id_re_fa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `representante_facultad`
--

INSERT INTO `representante_facultad` (`id_re_fa`, `nombre_rf`, `apellido_rf`, `genero_rf`, `telefono_rf`, `correo_rf`, `estado_rf`) VALUES
(1, 'Luis Antonio', 'Rodriguez Lara', 'Masculino', '7859-8956', 'luisantonio@ues.edu.sv', 1),
(2, 'Jose Roberto', 'Carranza Diaz', 'Masculino', '2334-4710', 'carranza21@gmail.com', 1),
(3, 'Francisco ', 'Martinez', 'Masculino', '7899-2147', 'martinez@ues.edu.sv', 1),
(4, 'Roberto', 'Lopez', 'Masculino', '2112-8997', 'lopez@ues.edu.sv', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

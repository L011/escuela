-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2023 a las 01:58:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_prenatales_postnatales`
--

CREATE TABLE `antecedentes_prenatales_postnatales` (
  `cedula_e` varchar(15) NOT NULL,
  `tipo_emparazo1` varchar(2) NOT NULL,
  `tipo_emparazo2` varchar(2) NOT NULL,
  `trabajo_durante` varchar(40) NOT NULL,
  `tiempo_trabajo` varchar(2) NOT NULL,
  `edad_madre_parto` int(2) NOT NULL,
  `problema_en_parto` varchar(30) NOT NULL,
  `peso_a` varchar(5) NOT NULL,
  `talla_a` varchar(5) NOT NULL,
  `padece_defectos` varchar(30) NOT NULL,
  `check_antecedentes` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_prenatales_postnatales`
--

INSERT INTO `antecedentes_prenatales_postnatales` (`cedula_e`, `tipo_emparazo1`, `tipo_emparazo2`, `trabajo_durante`, `tiempo_trabajo`, `edad_madre_parto`, `problema_en_parto`, `peso_a`, `talla_a`, `padece_defectos`, `check_antecedentes`) VALUES
('E-12032564343', '2', '2', 'trabajo trabajo', '1', 45, 'hola parto', '21.3', '23.4', 'defecto 32323', '1,2,4,9,10,12'),
('E-32032564343', '2', '2', 'trabajo trabajo', '1', 45, 'hola parto', '21.3', '23.4', 'defecto 32323', ''),
('V-12032564343', '2', '2', 'trabajo trabajo', '1', 45, 'hola parto', '21.3', '23.4', 'defecto 32323', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_esfinteres`
--

CREATE TABLE `control_esfinteres` (
  `cedula_e` varchar(15) NOT NULL,
  `se_orina` varchar(6) NOT NULL,
  `banio_solo` varchar(2) NOT NULL,
  `edad_no_panales` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `control_esfinteres`
--

INSERT INTO `control_esfinteres` (`cedula_e`, `se_orina`, `banio_solo`, `edad_no_panales`) VALUES
('E-12032564343', '2', '1', '5'),
('E-32032564343', '', '1', '5'),
('V-12032564343', '', '1', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo_evolutivo`
--

CREATE TABLE `desarrollo_evolutivo` (
  `cedula_e` varchar(15) NOT NULL,
  `primeros_meses` varchar(30) NOT NULL,
  `meses_gateo` varchar(20) NOT NULL,
  `edad_caminar` varchar(2) NOT NULL,
  `edad_hablar` varchar(2) NOT NULL,
  `tono_voz` varchar(2) NOT NULL,
  `mano_u` varchar(2) NOT NULL,
  `check_desarrollo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `desarrollo_evolutivo`
--

INSERT INTO `desarrollo_evolutivo` (`cedula_e`, `primeros_meses`, `meses_gateo`, `edad_caminar`, `edad_hablar`, `tono_voz`, `mano_u`, `check_desarrollo`) VALUES
('E-12032564343', 'atendio hola hola', '3', '1', '2', '1', '2', '1,2,3,4,5,7,9,13,20,22,24'),
('E-32032564343', 'atendio hola hola', '3', '1', '2', '1', '2', ''),
('V-12032564343', 'atendio hola hola', '3', '1', '2', '1', '2', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(4) NOT NULL,
  `cedula_est` varchar(15) NOT NULL,
  `doc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `cedula_est`, `doc`) VALUES
(26, 'V-12032564343', 'partida_na,copia_ce,sano_n'),
(27, 'E-12032564343', 'vacuna_c,copia_ce,sano_n'),
(28, 'E-32032564343', ',,,');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `cedula` varchar(15) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `fechadenacimiento` date NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cargo` varchar(14) NOT NULL,
  `clave` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`cedula`, `apellidos`, `nombres`, `sexo`, `fechadenacimiento`, `telefono`, `correo`, `cargo`, `clave`) VALUES
('E-4234235', 'Castillo Montero', 'Meiry Angelic', 'F', '2022-12-01', '99908888888', 'sada23@gmai.com', 'Maestro', ''),
('V-12345678', 'Gerrero Bandera', 'Maribella', 'F', '2004-11-27', '02392324023', 'asbdf@serinf.com', 'Administrador', '12345678'),
('V-22334455', 'Izaguirre Zambrano', 'Stefany Yohana', 'F', '2022-08-10', '00416455075', 'empleado4@gmail.com', 'Maestro', '232323'),
('V-28764865', 'Monoga Rios', 'Vanessa Alexandra', 'M', '2023-01-12', '23324324323', 'venir@gmail.com', 'Administrador', ''),
('V-54785123', 'Preguntas', 'Retoricas', 'M', '2021-09-08', '87342342643', 'mejores@hotmail.com', 'Maestro', '2435'),
('V-56234986', 'Moonlight', 'TENTATION', 'M', '1967-04-23', '32445435345', 'spotlight@gmail.com', 'Maestro', ''),
('V-56432578', 'Tove Lo', 'Say It', 'F', '1992-04-23', '23433245435', 'freewannabe@gmail.com', 'Maestro', ''),
('V-56872567', 'Futuro', 'Desconocido', 'M', '1940-04-02', '54344325463', 'atardecer@gmail.com', 'Maestro', ''),
('V-78086345', 'Diplo', 'DeorroJi', 'M', '1976-06-30', '45643254634', 'ningunlugar@gmai.com', 'Maestro', ''),
('V-78237463', 'Cambur', 'Pinton', 'M', '2022-04-20', '23244234234', 'polarpolar@gmail.com', 'Maestro', ''),
('V-78755733', 'First You', 'Follow Me Down', 'M', '1976-04-02', '34543234235', 'needyoulove@gmail.com', 'Maestro', ''),
('V-87650765', 'tranqui', 'Hecho parce', 'F', '2023-01-27', '43354324343', 'alguien@servidor.com', 'Maestro', ''),
('V-90876345', 'Mar Ci', 'Noches Lunares', 'F', '1974-10-16', '32433653433', 'futuro@gmail.com', 'Maestro', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedad_estudiante`
--

CREATE TABLE `enfermedad_estudiante` (
  `id` int(4) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `ex_dificultad` varchar(70) NOT NULL,
  `sol_df` varchar(70) NOT NULL,
  `psico_pq` varchar(70) NOT NULL,
  `afeccion` varchar(70) NOT NULL,
  `quirurgica` varchar(70) NOT NULL,
  `alergia` varchar(70) NOT NULL,
  `despa` varchar(70) NOT NULL,
  `fiebre_a` varchar(70) NOT NULL,
  `check_enfermedad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `enfermedad_estudiante`
--

INSERT INTO `enfermedad_estudiante` (`id`, `cedula_e`, `ex_dificultad`, `sol_df`, `psico_pq`, `afeccion`, `quirurgica`, `alergia`, `despa`, `fiebre_a`, `check_enfermedad`) VALUES
(6, 'V-12032564343', 'hola 23233', 'asdmkn23 32', 'asd ask 3242', 'hola hola 121212', 'Hola hola 12323', 'Hola 213232', 'Hola 12121212', 'Hol a1213313', ''),
(7, 'E-12032564343', 'hola 23233', 'asdmkn23 32', 'asd ask 3242', 'hola hola 121212', 'Hola hola 12323', 'Hola 213232', 'Hola 12121212', 'Hol a1213313', '1,2,4'),
(8, 'E-32032564343', 'hola 23233', 'asdmkn23 32', 'asd ask 3242', 'hola hola 121212', 'Hola hola 12323', 'Hola 213232', 'Hola 12121212', 'Hol a1213313', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equilibrio_emocional`
--

CREATE TABLE `equilibrio_emocional` (
  `cedula_e` varchar(15) NOT NULL,
  `nino_obe` varchar(2) NOT NULL,
  `formaReprender` varchar(30) NOT NULL,
  `jugueteFav` varchar(30) NOT NULL,
  `espacioJuego` varchar(30) NOT NULL,
  `tiempoTv` varchar(6) NOT NULL,
  `programasTv` varchar(30) NOT NULL,
  `imitaPersonaje` varchar(30) NOT NULL,
  `imitaFamiEscen` varchar(30) NOT NULL,
  `orientComo` varchar(30) NOT NULL,
  `anteriorPreescolar` varchar(50) NOT NULL,
  `tipoJuegoPref` varchar(30) NOT NULL,
  `conQuienJuega` varchar(30) NOT NULL,
  `check_emocional` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equilibrio_emocional`
--

INSERT INTO `equilibrio_emocional` (`cedula_e`, `nino_obe`, `formaReprender`, `jugueteFav`, `espacioJuego`, `tiempoTv`, `programasTv`, `imitaPersonaje`, `imitaFamiEscen`, `orientComo`, `anteriorPreescolar`, `tipoJuegoPref`, `conQuienJuega`, `check_emocional`) VALUES
('E-12032564343', '2', 'hola hola ', 'hola hola', 'hola cuarto', '12', 'hola tv', 'hola imita', 'Hola familiar', 'orientar hola', 'preescolar otro', 'uno dos 234', 'primo pana', '1,3,5,6,8,10,15,16,18'),
('E-32032564343', '2', 'hola hola ', 'hola hola', 'hola cuarto', '12', 'hola tv', 'hola imita', 'Hola familiar', 'orientar hola', 'preescolar otro', 'uno dos 234', 'primo pana', ''),
('V-12032564343', '2', 'hola hola ', 'hola hola', 'hola cuarto', '12', 'hola tv', 'hola imita', 'Hola familiar', 'orientar hola', 'preescolar otro', 'uno dos 234', 'primo pana', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(4) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fecha_n` date NOT NULL,
  `estado_n` varchar(15) NOT NULL,
  `ciudad_n` varchar(15) NOT NULL,
  `cedula_mama` varchar(15) DEFAULT NULL,
  `cedula_p` varchar(15) DEFAULT NULL,
  `retira_solo` varchar(2) NOT NULL,
  `posee_canai` varchar(2) NOT NULL,
  `inf_medica` text NOT NULL,
  `observ` varchar(50) NOT NULL,
  `quien_vive` varchar(12) NOT NULL,
  `orden` varchar(2) NOT NULL,
  `nacionalidad` varchar(2) NOT NULL,
  `c_id` varchar(2) NOT NULL,
  `llegar` varchar(5) DEFAULT NULL,
  `tipo_sangre` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `cedula_e`, `nombre`, `apellido`, `sexo`, `fecha_n`, `estado_n`, `ciudad_n`, `cedula_mama`, `cedula_p`, `retira_solo`, `posee_canai`, `inf_medica`, `observ`, `quien_vive`, `orden`, `nacionalidad`, `c_id`, `llegar`, `tipo_sangre`) VALUES
(58, 'E-1201231234', 'Hujioso Husus', 'Cardenas hiuoj', 'f', '2020-12-29', 'Bolivar', 'Bolivar askmdak', 'V-3249876', 'V-3249876', 'si', 'no', 'Hi1234', 'Hu32435', 'papa', '1', 'E', 'n', NULL, ''),
(53, 'E-12032564343', 'Albertino G', 'Hola apellido', 'm', '2020-12-30', 'Trijillo', 'Trujillo', 'V-12876890', 'V-12876890', 'si', 'no', '', '', 'mama', '1', 'E', 'n', '1', 'a+'),
(57, 'E-22132564343', 'Noemsin ianis', 'Tyusb ISabua', 'm', '2021-12-31', 'La guaira', 'valencia', 'V-3249876', 'V-3249876', 'si', 'si', 'Pruueba 12', 'Prueba 12345', 'papamama', '2', 'E', 'n', NULL, ''),
(54, 'E-32032564343', 'Sabaneta', 'Carro fiat', 'm', '2020-12-30', 'Trijillo', 'Trujillo', NULL, NULL, 'si', 'no', '', '', 'mama', '3', 'E', 'n', '', 'a+'),
(52, 'V-12032564343', 'Yisus H', 'Gomes Torrealba', 'm', '2020-12-30', 'Trijillo', 'Trujillo', 'V-12876890', 'V-12876890', 'si', 'no', '', '', 'mama', '1', 'V', 'n', '', 'a+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

CREATE TABLE `familiar` (
  `cedula_e` varchar(15) NOT NULL,
  `ingreso_m` varchar(20) NOT NULL,
  `personas_ingreso_dep` varchar(2) NOT NULL,
  `tipo_vivienda` varchar(2) NOT NULL,
  `tenencia_vivienda` varchar(2) NOT NULL,
  `check_familiar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `familiar`
--

INSERT INTO `familiar` (`cedula_e`, `ingreso_m`, `personas_ingreso_dep`, `tipo_vivienda`, `tenencia_vivienda`, `check_familiar`) VALUES
('E-12032564343', '2232442', '2', '2', '2', '2,3,4'),
('E-32032564343', '2232442', '2', '2', '2', ''),
('V-12032564343', '2232442', '2', '2', '2', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitos`
--

CREATE TABLE `habitos` (
  `cedula_e` varchar(15) NOT NULL,
  `comidas_dia` varchar(2) NOT NULL,
  `come_solo` varchar(2) NOT NULL,
  `buen_apetit` varchar(2) NOT NULL,
  `antes_escuela` varchar(2) NOT NULL,
  `alimento_que_no` varchar(50) NOT NULL,
  `hora_domir` varchar(2) NOT NULL,
  `hora_levanta` varchar(2) NOT NULL,
  `quien_duerme_niño` varchar(30) NOT NULL,
  `como_es_sueño` varchar(2) NOT NULL,
  `despierta_const` varchar(2) NOT NULL,
  `rechinan_dientes` varchar(2) NOT NULL,
  `check_habito` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitos`
--

INSERT INTO `habitos` (`cedula_e`, `comidas_dia`, `come_solo`, `buen_apetit`, `antes_escuela`, `alimento_que_no`, `hora_domir`, `hora_levanta`, `quien_duerme_niño`, `como_es_sueño`, `despierta_const`, `rechinan_dientes`, `check_habito`) VALUES
('E-12032564343', '2', '1', '1', '2', 'hola 12321', '1', '3', 'Papa ', '1', '1', '1', '3,6,8'),
('E-32032564343', '2', '1', '1', '2', 'hola 12321', '1', '3', 'Papa ', '1', '1', '1', ''),
('V-12032564343', '2', '1', '1', '2', 'hola 12321', '1', '3', 'Papa ', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hermanos`
--

CREATE TABLE `hermanos` (
  `id` int(5) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `nom_ape` varchar(40) NOT NULL,
  `grado` varchar(10) NOT NULL,
  `turno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `cedula_m` varchar(15) NOT NULL,
  `nombre_m` varchar(30) NOT NULL,
  `apellido_m` varchar(30) NOT NULL,
  `telefono_m` varchar(15) NOT NULL,
  `direc_trab` varchar(40) NOT NULL,
  `parentesco` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`cedula_m`, `nombre_m`, `apellido_m`, `telefono_m`, `direc_trab`, `parentesco`) VALUES
('V-1231231', 'Francisco', 'Bertino', '03245545345', 'Via las veritas, zona norte', ''),
('V-1234567', 'Yusus', 'Francisca', '03277787877', 'Barquisimeto, calle 4', ''),
('V-12876890', 'Ulala', 'Carton Jijija', '2323423543', 'jhajshjdahsjdsad', ''),
('V-26987098', 'Ulala', 'Carton Piedra', '2323423543', 'jhajshjdahsjdsad', ''),
('V-3249876', 'Francisco', 'Bertino', '03245545345', 'Via las veritas, zona norte', ''),
('V-32565532', 'Ulala', 'Carton Piedra', '2323423543', 'jhajshjdahsjdsad', ''),
('V-34567432', 'Ramona', 'Ramno', 'sakdajsiodjas', 'Por ahi', ''),
('V-34585332', 'Yusus', 'Francisca', '03277787877', 'Barquisimeto, calle 4', ''),
('V-34678543', 'Fania', 'Gutierrez', '23442523532523', 'Ama de casa', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_en_casa`
--

CREATE TABLE `personas_en_casa` (
  `id` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `parentesco` varchar(30) NOT NULL,
  `ocupacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas_en_casa`
--

INSERT INTO `personas_en_casa` (`id`, `nombre`, `apellido`, `sexo`, `edad`, `parentesco`, `ocupacion`) VALUES
(1, 'asdasd', 'sadasasd', 's', '00', 'asadsad', 'sadasdsa'),
(2, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(3, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'f', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(4, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(5, '4mkl4nl4kn4', '4mkl4nl4kn4', 'f', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(6, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(7, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(8, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(9, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(10, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(11, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(12, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(13, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(14, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(15, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(16, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(17, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(18, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(19, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(20, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(21, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(22, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(23, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(24, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(25, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(26, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(27, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(28, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(29, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(30, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(31, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(32, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(33, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(34, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(35, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(36, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(37, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(38, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(39, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(40, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(41, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(42, '111n1jk1jk1bj1', '111n1jk1jk1bj1', 'm', '00', '111n1jk1jk1bj1', '111n1jk1jk1bj1'),
(43, '2k2n2n2kjn2ki', '2k2n2n2kjn2ki', 'm', '00', '2k2n2n2kjn2ki', '2k2n2n2kjn2ki'),
(44, '3kn3lknjk3nkj3', '3kn3lknjk3nkj3', 'm', '00', '3kn3lknjk3nkj3', '3kn3lknjk3nkj3'),
(45, '4mkl4nl4kn4', '4mkl4nl4kn4', 'm', '00', '4mkl4nl4kn4', '4mkl4nl4kn4'),
(46, 'dsda skndas', 'sdas', 'm', '', 'paosdmas', 'asldjkad'),
(47, '', '', 'n', '', '', ''),
(48, '', '', 'S', '', '', ''),
(49, '', '', 'S', '', '', ''),
(50, 'HAjshdj sahdisna fa', 'dnasjkdnaf asknaiofsaof', 'm', '20', 'hajsdsadjasd', 'asldkioasmfioasfsa'),
(51, '874723h42323', '432jnr32jn4324', 'f', '20', 'asmndn 2n3eiun23e', 'daskmd dqkwmdw'),
(52, '', '', 'S', '', '', ''),
(53, '', '', 'S', '', '', ''),
(54, 'HAjshdj sahdisna fa', 'dnasjkdnaf asknaiofsaof', 'm', '20', 'hajsdsadjasd', 'asldkioasmfioasfsa'),
(55, '874723h42323', '432jnr32jn4324', 'f', '20', 'asmndn 2n3eiun23e', 'daskmd dqkwmdw'),
(56, '', '', 'S', '', '', ''),
(57, '', '', 'S', '', '', ''),
(58, 'dsda skndas', 'sdas', 'm', '', 'paosdmas', 'asldjkad'),
(59, '', '', 'n', '', '', ''),
(60, '', '', 'n', '', '', ''),
(61, '', '', 'n', '', '', ''),
(62, 'holasa sadsa', 'jola hola', 'f', '20', 'holahola', 'herrero'),
(63, '', '', 'S', '', '', ''),
(64, '', '', 'S', '', '', ''),
(65, '', '', 'S', '', '', ''),
(66, 'holasa sadsa', 'jola hola', 'f', '', 'holahola', 'herrero'),
(67, '', '', 'n', '', '', ''),
(68, '', '', 'n', '', '', ''),
(69, '', '', 'n', '', '', ''),
(70, 'holasa sadsa', 'jola hola', 'f', '', 'holahola', 'herrero'),
(71, '', '', 'n', '', '', ''),
(72, '', '', 'n', '', '', ''),
(73, '', '', 'n', '', '', '');

--
-- Disparadores `personas_en_casa`
--
DELIMITER $$
CREATE TRIGGER `llena_personas_hogar` AFTER INSERT ON `personas_en_casa` FOR EACH ROW BEGIN
      
		INSERT INTO personas_estudiante(id_persona,cedula_e)
        VALUES(NEW.id,(SELECT cedula_e FROM estudiante ORDER BY id DESC LIMIT 1));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_estudiante`
--

CREATE TABLE `personas_estudiante` (
  `id` int(5) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `id_persona` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas_estudiante`
--

INSERT INTO `personas_estudiante` (`id`, `cedula_e`, `id_persona`) VALUES
(62, 'V-12032564343', 62),
(63, 'V-12032564343', 63),
(64, 'V-12032564343', 64),
(65, 'V-12032564343', 65),
(66, 'E-12032564343', 66),
(67, 'E-12032564343', 67),
(68, 'E-12032564343', 68),
(69, 'E-12032564343', 69),
(70, 'E-32032564343', 70),
(71, 'E-32032564343', 71),
(72, 'E-32032564343', 72),
(73, 'E-32032564343', 73);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_retira`
--

CREATE TABLE `persona_retira` (
  `id_persona` int(5) NOT NULL,
  `nombre_apellido` varchar(60) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona_retira`
--

INSERT INTO `persona_retira` (`id_persona`, `nombre_apellido`, `telefono`) VALUES
(2, 'qweqwe', '1212e'),
(3, 'qweasd', '3434'),
(4, 'asads', 'asdsa'),
(5, 'dasdas', 'das'),
(6, '', ''),
(7, '', ''),
(8, '0909090', '9090900'),
(9, '9090', '09009990'),
(10, 'asads', 'asdsa'),
(11, 'dasdas', 'das'),
(12, 'asads', 'asdsa'),
(13, 'dasdas', 'das'),
(14, 'asads', 'asdsa'),
(15, 'dasdas', 'das'),
(16, 'asads', 'asdsa'),
(17, 'dasdas', 'das'),
(18, 'asads', 'asdsa'),
(19, 'dasdas', 'das'),
(20, 'asads', 'asdsa'),
(21, 'dasdas', 'das'),
(22, 'asads', 'asdsa'),
(23, 'dasdas', 'das'),
(24, 'asads', 'asdsa'),
(25, 'dasdas', 'das'),
(26, 'asads', 'asdsa'),
(27, 'dasdas', 'das'),
(28, 'asads', 'asdsa'),
(29, 'dasdas', 'das'),
(30, 'asads', 'asdsa'),
(31, 'dasdas', 'das'),
(32, '$this->oc1', '32942344234'),
(33, 'sadasdas', '9999999999999'),
(34, 'hola ssiasnais', '341248235943'),
(35, 'nxznvxc8 xvhxicnv', '9492305823523'),
(36, 'hola ssiasnais', '341248235943'),
(37, 'nxznvxc8 xvhxicnv', '9492305823523'),
(38, 'oamentehueca', '32942344234'),
(39, 'Ailas Terca', '9999999999999'),
(40, 'Hola hola', '3243-4234332'),
(41, 'bai bia', '2131-2342335'),
(42, 'Hola hola', '3243-4234332'),
(43, 'bai bia', '2131-2342335'),
(44, 'Hola hola', '3243-4234332'),
(45, 'bai bia', '2131-2342335');

--
-- Disparadores `persona_retira`
--
DELIMITER $$
CREATE TRIGGER `after_insert_persona_retira` AFTER INSERT ON `persona_retira` FOR EACH ROW BEGIN
      
		INSERT INTO retira_estudiantes(id_persona,cedula_e)
        VALUES(NEW.id_persona,(SELECT cedula_e FROM estudiante ORDER BY id DESC LIMIT 1));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `cedula` varchar(15) NOT NULL,
  `nombre_r` varchar(30) NOT NULL,
  `apellido_r` varchar(30) NOT NULL,
  `telefono_r` varchar(12) NOT NULL,
  `estudio` varchar(15) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `civil` varchar(14) NOT NULL,
  `nacion` varchar(20) NOT NULL,
  `direc` varchar(40) NOT NULL,
  `paren_repre` varchar(20) NOT NULL,
  `ocupa` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `cuenta_b` varchar(25) NOT NULL,
  `tipo_c` varchar(12) NOT NULL,
  `banco` varchar(20) NOT NULL,
  `carnet_p` varchar(15) NOT NULL,
  `serial_p` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`cedula`, `nombre_r`, `apellido_r`, `telefono_r`, `estudio`, `religion`, `civil`, `nacion`, `direc`, `paren_repre`, `ocupa`, `correo`, `cuenta_b`, `tipo_c`, `banco`, `carnet_p`, `serial_p`) VALUES
('V-1231234', 'Gutierre', 'Albertino', '03432342453', 'bachillar', 'Católica', 'soltero', 'extranjero', 'Via las vegas ', 'padre', 'Herrero', 'agusnda@gmail.com', '01023423534534543445', 'corriente', '18', '0000034534', '0000030453'),
('V-23356238', 'Marco', 'Eduardo', '32342343234', 'primaria', 'Católica', 'divorciado', 'venezolano', 'Via turumero', 'padre', 'Viajando a las estrellas', 'agiujsuikdm@gmail.com', '23324235235324344333', 'corriente', '10', '2142342343', '2342342343'),
('V-23456436', 'Recuerdos', 'Salsa Casino', '32342343234', 'primaria', 'Católica', 'soltero', 'venezolano', 'sdkmaskdmsad', 'madre', 'kspdofjasfoa', 'agiujsuikdm@gmail.com', '01023938473284233434', 'corriente', '10', '0000423434', '0000034233'),
('V-32564343', 'Antonio L', 'Pedro A', '02449999999', 'bachillar', 'Ateísmo', 'divorciado', 'extranjero', 'Las veritas', 'tia', 'Ama de casa', 'hioiiss@gmail.com', '29048938593535535354', 'ahorro', '9', '0004035345', '0000345435');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retira_estudiantes`
--

CREATE TABLE `retira_estudiantes` (
  `id_persona` int(5) NOT NULL,
  `cedula_e` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `retira_estudiantes`
--

INSERT INTO `retira_estudiantes` (`id_persona`, `cedula_e`) VALUES
(40, 'V-12032564343'),
(41, 'V-12032564343'),
(42, 'E-12032564343'),
(43, 'E-12032564343'),
(44, 'E-32032564343'),
(45, 'E-32032564343');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id` int(5) NOT NULL,
  `seccion` varchar(8) NOT NULL,
  `grado` varchar(14) NOT NULL,
  `cedula_mm` varchar(15) NOT NULL,
  `anio_escolar` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id`, `seccion`, `grado`, `cedula_mm`, `anio_escolar`) VALUES
(10, 'Mañana A', 'Quinto Grado', 'V-12345678', '2022-2023'),
(11, 'Mañana A', 'Segundo Grado', 'V-78086345', '2022-2023'),
(12, 'Tarde B', 'Cuarto Grado', 'V-78237463', '2022-2023'),
(13, 'Tarde B', 'Sexto Grado', 'V-78755733', '2022-2023'),
(15, 'Mañana A', 'Primer Grado', 'V-54785123', '2022-2023'),
(16, 'Tarde B', 'Tercer Grado', 'V-87650765', '2022-2023'),
(18, 'Mañana A', 'Sexto Grado', 'V-56872567', '2022-2023'),
(19, 'Mañana B', 'Pre-escolar', 'V-56234986', '2022-2023'),
(20, 'Mañana A', 'Pre-escolar', 'V-56432578', '2022-2023'),
(22, 'Tarde D', 'Pre-escolar', 'V-28764865', '2022-2023'),
(25, 'Tarde B', 'Primer Grado', 'V-22334455', '2023-2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_estudiante`
--

CREATE TABLE `seccion_estudiante` (
  `id` int(2) NOT NULL,
  `representante` varchar(15) NOT NULL,
  `cedula_es` varchar(15) NOT NULL,
  `seccion_1` int(5) DEFAULT NULL,
  `talla` varchar(4) NOT NULL,
  `peso` varchar(4) NOT NULL,
  `calzado` varchar(4) NOT NULL,
  `camisa` varchar(4) NOT NULL,
  `pantalon` varchar(4) NOT NULL,
  `colab_comun` varchar(50) NOT NULL,
  `dia_disp` varchar(10) NOT NULL,
  `horario` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seccion_estudiante`
--

INSERT INTO `seccion_estudiante` (`id`, `representante`, `cedula_es`, `seccion_1`, `talla`, `peso`, `calzado`, `camisa`, `pantalon`, `colab_comun`, `dia_disp`, `horario`) VALUES
(141, 'V-32564343', 'V-12032564343', NULL, '43.0', '23.3', '36', '45', '32', '', '', ''),
(142, 'V-32564343', 'E-12032564343', 25, '43.0', '23.3', '36', '45', '32', 'Hola colab', '1,3,5', '12'),
(143, 'V-32564343', 'E-32032564343', 11, '43.0', '23.3', '36', '45', '32', 'Hola colab', '', '12'),
(146, 'V-32564343', 'E-22132564343', NULL, '23.4', '30.2', '36', '45', '24', 'Prueba 123', '', ''),
(147, 'V-1231234', 'E-1201231234', NULL, '45.2', '23.4', '36', '45', '32', 'Ho2345', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `id` int(4) NOT NULL,
  `vacuna` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacuna`
--

INSERT INTO `vacuna` (`id`, `vacuna`) VALUES
(3, 'Sarampeón'),
(4, 'Covid'),
(5, 'Hola'),
(6, 'BCG'),
(7, 'Pentavalente'),
(8, 'Tetanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunacion`
--

CREATE TABLE `vacunacion` (
  `id` int(5) NOT NULL,
  `id_vacuna` int(4) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `dosis` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacunacion`
--

INSERT INTO `vacunacion` (`id`, `id_vacuna`, `cedula_e`, `dosis`) VALUES
(132, 4, 'V-12032564343', '2'),
(133, 5, 'V-12032564343', '2'),
(134, 6, 'V-12032564343', '3'),
(135, 4, 'E-12032564343', '2'),
(136, 5, 'E-12032564343', '2'),
(137, 6, 'E-12032564343', '3'),
(139, 7, 'E-32032564343', '2'),
(140, 3, 'E-32032564343', '2'),
(141, 6, 'E-32032564343', '3'),
(151, 5, 'E-22132564343', '2'),
(152, 3, 'E-22132564343', '3'),
(153, 4, 'E-22132564343', '5'),
(154, 8, 'E-22132564343', '3'),
(155, 6, 'E-1201231234', '3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes_prenatales_postnatales`
--
ALTER TABLE `antecedentes_prenatales_postnatales`
  ADD UNIQUE KEY `cedula_e` (`cedula_e`) USING BTREE;

--
-- Indices de la tabla `control_esfinteres`
--
ALTER TABLE `control_esfinteres`
  ADD UNIQUE KEY `cedula_e_2` (`cedula_e`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `desarrollo_evolutivo`
--
ALTER TABLE `desarrollo_evolutivo`
  ADD UNIQUE KEY `cedula_e` (`cedula_e`) USING BTREE;

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula_est` (`cedula_est`) USING BTREE,
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `enfermedad_estudiante`
--
ALTER TABLE `enfermedad_estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `equilibrio_emocional`
--
ALTER TABLE `equilibrio_emocional`
  ADD PRIMARY KEY (`cedula_e`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`cedula_e`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_mama` (`cedula_mama`),
  ADD KEY `fk_papa` (`cedula_p`);

--
-- Indices de la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD UNIQUE KEY `cedula_e` (`cedula_e`) USING BTREE;

--
-- Indices de la tabla `habitos`
--
ALTER TABLE `habitos`
  ADD UNIQUE KEY `cedula_e_2` (`cedula_e`),
  ADD UNIQUE KEY `cedula_e` (`cedula_e`) USING BTREE;

--
-- Indices de la tabla `hermanos`
--
ALTER TABLE `hermanos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hermanos` (`cedula_e`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`cedula_m`);

--
-- Indices de la tabla `personas_en_casa`
--
ALTER TABLE `personas_en_casa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas_estudiante`
--
ALTER TABLE `personas_estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula_e` (`cedula_e`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `persona_retira`
--
ALTER TABLE `persona_retira`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `retira_estudiantes`
--
ALTER TABLE `retira_estudiantes`
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `cedula_mm` (`cedula_mm`);

--
-- Indices de la tabla `seccion_estudiante`
--
ALTER TABLE `seccion_estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_representante` (`representante`),
  ADD KEY `fk_cedula_e` (`cedula_es`),
  ADD KEY `seccion_1` (`seccion_1`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula_e` (`cedula_e`),
  ADD KEY `vacunacion_2` (`id_vacuna`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `enfermedad_estudiante`
--
ALTER TABLE `enfermedad_estudiante`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `hermanos`
--
ALTER TABLE `hermanos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `personas_en_casa`
--
ALTER TABLE `personas_en_casa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `personas_estudiante`
--
ALTER TABLE `personas_estudiante`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `persona_retira`
--
ALTER TABLE `persona_retira`
  MODIFY `id_persona` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `seccion_estudiante`
--
ALTER TABLE `seccion_estudiante`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentes_prenatales_postnatales`
--
ALTER TABLE `antecedentes_prenatales_postnatales`
  ADD CONSTRAINT `antecedentes_prenatales_postnatales_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `control_esfinteres`
--
ALTER TABLE `control_esfinteres`
  ADD CONSTRAINT `control_esfinteres_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `desarrollo_evolutivo`
--
ALTER TABLE `desarrollo_evolutivo`
  ADD CONSTRAINT `desarrollo_evolutivo_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`cedula_est`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `enfermedad_estudiante`
--
ALTER TABLE `enfermedad_estudiante`
  ADD CONSTRAINT `enfermedad_estudiante_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equilibrio_emocional`
--
ALTER TABLE `equilibrio_emocional`
  ADD CONSTRAINT `equilibrio_emocional_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_mama` FOREIGN KEY (`cedula_mama`) REFERENCES `padres` (`cedula_m`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_papa` FOREIGN KEY (`cedula_p`) REFERENCES `padres` (`cedula_m`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD CONSTRAINT `familiar_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `habitos`
--
ALTER TABLE `habitos`
  ADD CONSTRAINT `habitos_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hermanos`
--
ALTER TABLE `hermanos`
  ADD CONSTRAINT `fk_hermanos` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personas_estudiante`
--
ALTER TABLE `personas_estudiante`
  ADD CONSTRAINT `personas_estudiante_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `retira_estudiantes`
--
ALTER TABLE `retira_estudiantes`
  ADD CONSTRAINT `retira_estudiantes_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `retira_estudiantes_ibfk_2` FOREIGN KEY (`id_persona`) REFERENCES `persona_retira` (`id_persona`);

--
-- Filtros para la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`cedula_mm`) REFERENCES `empleados` (`cedula`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion_estudiante`
--
ALTER TABLE `seccion_estudiante`
  ADD CONSTRAINT `fk_cedula_e` FOREIGN KEY (`cedula_es`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_representante` FOREIGN KEY (`representante`) REFERENCES `representante` (`cedula`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD CONSTRAINT `vacunacion_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vacunacion_ibfk_2` FOREIGN KEY (`id_vacuna`) REFERENCES `vacuna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

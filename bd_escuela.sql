-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2023 a las 14:09:40
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
  `embarazo_deseado` varchar(2) NOT NULL,
  `peso` float NOT NULL,
  `talla` float NOT NULL,
  `problemas_dias_despues` varchar(30) NOT NULL,
  `padece_defectos` varchar(30) NOT NULL,
  `no_deseado` varchar(2) NOT NULL,
  `prematuro` varchar(2) NOT NULL,
  `rubeola` varchar(2) NOT NULL,
  `toxoplasmosis` varchar(2) NOT NULL,
  `hipertension` varchar(2) NOT NULL,
  `anemia` varchar(2) NOT NULL,
  `preclampsia` varchar(2) NOT NULL,
  `otras` varchar(30) NOT NULL,
  `trabajo_durante` varchar(2) NOT NULL,
  `normal` varchar(2) NOT NULL,
  `cesarea` varchar(2) NOT NULL,
  `a_termino` varchar(2) NOT NULL,
  `forceps` varchar(2) NOT NULL,
  `edad_madre_parto` int(2) NOT NULL,
  `problema_en_parto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboracion`
--

CREATE TABLE `colaboracion` (
  `cedula_e` varchar(15) NOT NULL,
  `colab_comun` varchar(20) NOT NULL,
  `dia_disp` varchar(11) NOT NULL,
  `horario` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_esfinteres`
--

CREATE TABLE `control_esfinteres` (
  `cedula_e` varchar(15) NOT NULL,
  `se_orina` varchar(2) NOT NULL,
  `banio_solo` varchar(2) NOT NULL,
  `edad_no_panales` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo_evolutivo`
--

CREATE TABLE `desarrollo_evolutivo` (
  `cedula_e` varchar(15) NOT NULL,
  `primeros_meses` varchar(30) NOT NULL,
  `meses_gateo` varchar(15) NOT NULL,
  `edad_caminar` int(2) NOT NULL,
  `edad_hablar` int(2) NOT NULL,
  `dificultad_palab` varchar(15) NOT NULL,
  `gusta_conve` varchar(15) NOT NULL,
  `tono_voz_bajo` varchar(2) NOT NULL,
  `tono_voz_alto` varchar(2) NOT NULL,
  `responde_llamado` varchar(2) NOT NULL,
  `voltea` varchar(2) NOT NULL,
  `restriega_ojos` varchar(2) NOT NULL,
  `chupa_dedo` varchar(2) NOT NULL,
  `sube_baja_esc` varchar(2) NOT NULL,
  `lanza_obj` varchar(2) NOT NULL,
  `rueda_pel` varchar(2) NOT NULL,
  `abotona` varchar(2) NOT NULL,
  `desabotona` varchar(2) NOT NULL,
  `sabe_trenzar` varchar(2) NOT NULL,
  `anudar` varchar(2) NOT NULL,
  `reconoce_cuerpo` varchar(2) NOT NULL,
  `probl_caminar` varchar(2) NOT NULL,
  `peso` float NOT NULL,
  `talla` float NOT NULL,
  `zapatos_ortop` varchar(2) NOT NULL,
  `sindrome_down` varchar(2) NOT NULL,
  `sindrome_autista` varchar(2) NOT NULL,
  `otro_sindrome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `cedula_est` varchar(15) NOT NULL,
  `partida` varchar(2) NOT NULL,
  `certificado_v` varchar(2) NOT NULL,
  `fotos` varchar(2) NOT NULL,
  `cedula_r` varchar(2) NOT NULL,
  `constancia_s` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`cedula_est`, `partida`, `certificado_v`, `fotos`, `cedula_r`, `constancia_s`) VALUES
('', '', '', 'Se', '', ''),
('', '', '', 'Se', '', ''),
('', '', '', 'Se', '', ''),
('', '', '', 'Se', '', ''),
('', '', '', 'Se', '', ''),
('', '', '', 'Se', '', ''),
('', '', '', 'Se', '', ''),
('', '', '', 'Se', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `cedula` varchar(15) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `fechadenacimiento` varchar(10) NOT NULL,
  `telefono` char(12) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cargo` varchar(14) NOT NULL,
  `clave` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`cedula`, `apellidos`, `nombres`, `sexo`, `fechadenacimiento`, `telefono`, `correo`, `cargo`, `clave`) VALUES
('12345678', 'Sera Mejor', 'CHeque', 'F', '2004-11-27', '0239-2324023', 'mkfnwefn@serinf.com', 'Administrador', '12345678'),
('22334455', 'Kirkland', 'Huus', 'F', '2022-08-10', '0041-6455075', 'empleadodenadie@gmail.com', 'Maestro', '232323'),
('28764865', 'Favorita', 'Malo', 'M', '2023-01-12', '2332-4324323', 'venir@gmail.com', 'Administrador', ''),
('54785123', 'Preguntas', 'Retoricas', 'M', '2021-09-08', '8734-2342643', 'mejores@hotmail.com', 'Maestro', '2435'),
('56234986', 'Moonlight', 'XXXTENTATION', 'M', '1967-04-23', '3244-5435345', 'spotlight@gmail.com', 'Maestro', ''),
('56432578', 'Tove Lo', 'Say It', 'F', '1992-04-23', '2343-3245435', 'freewannabe@gmail.com', 'Maestro', ''),
('56872567', 'Futuro', 'Desconocido', 'M', '1940-04-02', '5434-4325463', 'atardecer@gmail.com', 'Maestro', ''),
('78086345', 'Diplo', 'DeorroJi', 'M', '1976-06-30', '4564-3254634', 'ningunlugar@gmai.com', 'Maestro', ''),
('78237463', 'Cambur', 'Pinton', 'M', '2022-04-20', '2324-4234234', 'polarpolar@gmail.com', 'Maestro', ''),
('78755733', 'First You', 'Follow Me Down', 'M', '1976-04-02', '3454-3234235', 'needyoulove@gmail.com', 'Maestro', ''),
('87650765', 'tranqui', 'Hecho parce', 'F', '2023-01-27', '4335-4324343', 'alguien@servidor.com', 'Maestro', ''),
('90876345', 'Mar Ci', 'Noches Lunares', 'F', '1974-10-16', '3243-3653433', 'futuro@gmail.com', 'Maestro', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedades`
--

CREATE TABLE `enfermedades` (
  `id_enfermedad` varchar(2) NOT NULL,
  `enfermedad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedad_estudiante`
--

CREATE TABLE `enfermedad_estudiante` (
  `id_enfermedad` varchar(2) NOT NULL,
  `cedula_e` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equilibrio_emocional`
--

CREATE TABLE `equilibrio_emocional` (
  `cedula_e` varchar(15) NOT NULL,
  `obediente` varchar(2) NOT NULL,
  `agresivo` varchar(2) NOT NULL,
  `timido` varchar(2) NOT NULL,
  `llora_frec` varchar(2) NOT NULL,
  `actitudes_nerviosas` varchar(2) NOT NULL,
  `pataleos` varchar(2) NOT NULL,
  `caprichos` varchar(2) NOT NULL,
  `actua_frente_cond_na` varchar(30) NOT NULL,
  `miedo` varchar(2) NOT NULL,
  `soledad` varchar(2) NOT NULL,
  `animales` varchar(2) NOT NULL,
  `personas` varchar(2) NOT NULL,
  `otros` varchar(2) NOT NULL,
  `jueguetes` varchar(2) NOT NULL,
  `comparte_jug` varchar(2) NOT NULL,
  `espacio_jugar` varchar(20) NOT NULL,
  `tv` varchar(2) NOT NULL,
  `programas` varchar(30) NOT NULL,
  `tiempo_en_tv` varchar(30) NOT NULL,
  `personaje_imita` varchar(30) NOT NULL,
  `escenas_familiar` varchar(2) NOT NULL,
  `discusiones` varchar(2) NOT NULL,
  `amigos` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `cedula_e` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fecha_n` date NOT NULL,
  `estado_n` varchar(15) NOT NULL,
  `ciudad_n` varchar(15) NOT NULL,
  `cedula_mama` varchar(15) NOT NULL,
  `cedula_p` varchar(15) NOT NULL,
  `retira_solo` varchar(2) NOT NULL,
  `posee_canai` varchar(2) NOT NULL,
  `inf_medica` text NOT NULL,
  `observ` varchar(50) NOT NULL,
  `quien_vive` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cedula_e`, `nombre`, `apellido`, `sexo`, `fecha_n`, `estado_n`, `ciudad_n`, `cedula_mama`, `cedula_p`, `retira_solo`, `posee_canai`, `inf_medica`, `observ`, `quien_vive`) VALUES
('123456654', 'Hd Graphics', 'RTX Geoforce', 'm', '2023-01-06', 'Lara', 'Barquisimeto', '7263724234', '726372412', 'si', 'si', 'bnbnbnasasas', 'bnbnbnbnbasasasasas', ''),
('28965384', 'San Andreas', 'Gt Racing', 'm', '2023-01-13', 'Lara', 'Barquisimeto', '7263724234', '32565532423', '0', 'si', 'rtygfr sadnaisjd askdnsakjnd', 'sandinsadasndiasdd sadnisandas ', 'papamama'),
('28967899', 'Pantalla camara', 'Corneta Rania', 'm', '2023-01-13', 'Lara', 'Barquisimeto', '7263724234', 'dasd32324', 'si', 'si', '----------------------------------------aaa---------', '----------------------------------------aaa-------', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

CREATE TABLE `familiar` (
  `cedula_e` varchar(15) NOT NULL,
  `ingreso_m` float NOT NULL,
  `personas_ingreso_dep` varchar(2) NOT NULL,
  `tipo_vivienda` varchar(10) NOT NULL,
  `tenencia_vivienda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitos`
--

CREATE TABLE `habitos` (
  `cedula_e` varchar(15) NOT NULL,
  `comidas_dia` int(2) NOT NULL,
  `come_solo` varchar(2) NOT NULL,
  `buen_apetit` varchar(2) NOT NULL,
  `antes_escuela` varchar(15) NOT NULL,
  `alimento_que_no` time NOT NULL,
  `hora_domir` time NOT NULL,
  `hora_levanta` varchar(15) NOT NULL,
  `quien_duerme_niño` varchar(15) NOT NULL,
  `como_es_sueño` varchar(2) NOT NULL,
  `despierta_const` varchar(2) NOT NULL,
  `rechinan_dientes` varchar(2) NOT NULL,
  `lava_manos` varchar(2) NOT NULL,
  `cepilla_dientes` varchar(2) NOT NULL,
  `viste_sin_ayuda` varchar(2) NOT NULL,
  `desviste_sin` varchar(2) NOT NULL,
  `ordena` varchar(2) NOT NULL,
  `cubiertos` varchar(2) NOT NULL,
  `tareas_hogar` varchar(2) NOT NULL,
  `normas_cortesia` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hermanos`
--

CREATE TABLE `hermanos` (
  `id` int(2) NOT NULL,
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
('', '', '', '', '', ''),
('1231231', 'Francisco', 'Bertino', '03245545345', 'Via las veritas, zona norte', ''),
('12332434', 'Yusus', 'Francisca', '03277787877', 'Barquisimeto, calle 4', ''),
('2342134343', 'Ramona', 'Ramno', 'sakdajsiodjas', 'Por ahi', ''),
('273488732523', 'Fania', 'Gutierrez', '23442523532523', 'Ama de casa', ''),
('32565532423', 'Ulala', 'Carton Piedra', '2323423543', 'jhajshjdahsjdsad', ''),
('726372412', 'Tengo Hambre', 'Hamburgue', 'sadasdas', 'sadsadasda', ''),
('7263724234', 'Ulala', 'Carton Piedra', '2323423543', 'jhajshjdahsjdsad', ''),
('983954533', 'Yusus', 'Francisca', '03277787877', 'Barquisimeto, calle 4', ''),
('dasd32324', 'Francisco', 'Bertino', '03245545345', 'Via las veritas, zona norte', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_en_casa`
--

CREATE TABLE `personas_en_casa` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `edad` int(2) NOT NULL,
  `parentesco` varchar(30) NOT NULL,
  `ocupacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_estudiante`
--

CREATE TABLE `personas_estudiante` (
  `id` int(2) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `id_persona` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_retira`
--

CREATE TABLE `persona_retira` (
  `id_persona` int(1) NOT NULL,
  `nombre_apellido` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `cedula` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
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

INSERT INTO `representante` (`cedula`, `nombre`, `apellido`, `telefono`, `estudio`, `religion`, `civil`, `nacion`, `direc`, `paren_repre`, `ocupa`, `correo`, `cuenta_b`, `tipo_c`, `banco`, `carnet_p`, `serial_p`) VALUES
('1221321', 'Antonio', 'Pedro', '0244-9485434', 'bachillar', 'Ateísmo', 'divorciado', 'extranjero', 'Las veritas', 'tia', 'Ama de casa', 'hioiiss@gmail.com', '2904893859353553535444444', 'ahorro', '9', '245325453454353', '435983495834944'),
('23356238', 'Marco', 'Eduardo', '3234-2343234', 'primaria', 'Católica', 'divorciado', 'venezolano', 'Via turaja', 'padre', 'Viajando a las estrellas', 'agiujsuikdm@gmail.com', '23324235235324344333', 'corriente', '10', '2142342343', '2342342343'),
('23456436', 'Recuerdos', 'Salsa Casino', '3234-2343234', 'primaria', 'Católica', 'soltero', 'venezolano', 'sdkmaskdmsad', 'madre', 'kspdofjasfoa', 'agiujsuikdm@gmail.com', '01023938473284233434', 'corriente', '10', '0000423434', '0000034233');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retira_estudiantes`
--

CREATE TABLE `retira_estudiantes` (
  `id_persona` int(1) NOT NULL,
  `cedula_e` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id` int(2) NOT NULL,
  `seccion` varchar(8) NOT NULL,
  `grado` varchar(14) NOT NULL,
  `cedula_mm` varchar(15) NOT NULL,
  `anio_escolar` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id`, `seccion`, `grado`, `cedula_mm`, `anio_escolar`) VALUES
(10, 'Mañana A', 'Quinto Grado', '12345678', '2022-2023'),
(6, 'Tarde B', 'Quinto Grado', '22334455', '2022-2023'),
(22, 'Tarde D', 'Pre-escolar', '28764865', '2022-2023'),
(15, 'Mañana A', 'Primer Grado', '54785123', '2022-2023'),
(19, 'Mañana B', 'Pre-escolar', '56234986', '2022-2023'),
(20, 'Mañana A', 'Pre-escolar', '56432578', '2022-2023'),
(18, 'Mañana A', 'Sexto Grado', '56872567', '2022-2023'),
(11, 'Mañana A', 'Segundo Grado', '78086345', '2022-2023'),
(12, 'Tarde B', 'Cuarto Grado', '78237463', '2022-2023'),
(13, 'Tarde B', 'Sexto Grado', '78755733', '2022-2023'),
(16, 'Tarde B', 'Tercer Grado', '87650765', '2022-2023'),
(17, 'Mañana A', 'Cuarto Grado', '90876345', '2022-2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_estudiante`
--

CREATE TABLE `seccion_estudiante` (
  `id` int(2) NOT NULL,
  `representante` varchar(15) NOT NULL,
  `cedula_es` varchar(15) NOT NULL,
  `seccion_1` int(2) DEFAULT NULL,
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
(90, '1221321', '123456654', 10, '435.', '23.4', '32.3', '43.2', '43.4', 'bnbnbnbnbsasasas', '', ''),
(91, '23356238', '28965384', 17, '43.3', '23.4', '32', 'S', 'M', 'asdjiosan dsan dasnd', '', ''),
(92, '23456436', '28967899', 18, '435.', '23.4', '32.3', '43.2', '43.4', '----------------------------------------aaa-------', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `id_vacuna` varchar(2) NOT NULL,
  `vacuna` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunacion`
--

CREATE TABLE `vacunacion` (
  `id_vacuna` varchar(2) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `dosis` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes_prenatales_postnatales`
--
ALTER TABLE `antecedentes_prenatales_postnatales`
  ADD PRIMARY KEY (`cedula_e`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `colaboracion`
--
ALTER TABLE `colaboracion`
  ADD PRIMARY KEY (`cedula_e`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `control_esfinteres`
--
ALTER TABLE `control_esfinteres`
  ADD PRIMARY KEY (`cedula_e`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `desarrollo_evolutivo`
--
ALTER TABLE `desarrollo_evolutivo`
  ADD PRIMARY KEY (`cedula_e`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD KEY `cedula_est` (`cedula_est`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD PRIMARY KEY (`id_enfermedad`);

--
-- Indices de la tabla `enfermedad_estudiante`
--
ALTER TABLE `enfermedad_estudiante`
  ADD KEY `id_enfermedad` (`id_enfermedad`),
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
  ADD KEY `fk_mama` (`cedula_mama`),
  ADD KEY `fk_papa` (`cedula_p`);

--
-- Indices de la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`cedula_e`),
  ADD KEY `cedula_e` (`cedula_e`);

--
-- Indices de la tabla `habitos`
--
ALTER TABLE `habitos`
  ADD PRIMARY KEY (`cedula_e`),
  ADD KEY `cedula_e` (`cedula_e`);

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
  ADD PRIMARY KEY (`cedula_mm`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE;

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
  ADD KEY `id_vacuna` (`id_vacuna`),
  ADD KEY `vacuna` (`vacuna`);

--
-- Indices de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD KEY `cedula_e` (`cedula_e`),
  ADD KEY `id_vacuna` (`id_vacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hermanos`
--
ALTER TABLE `hermanos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `seccion_estudiante`
--
ALTER TABLE `seccion_estudiante`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colaboracion`
--
ALTER TABLE `colaboracion`
  ADD CONSTRAINT `colaboracion_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD CONSTRAINT `enfermedades_ibfk_1` FOREIGN KEY (`id_enfermedad`) REFERENCES `enfermedad_estudiante` (`id_enfermedad`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `personas_en_casa`
--
ALTER TABLE `personas_en_casa`
  ADD CONSTRAINT `personas_en_casa_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personas_estudiante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personas_estudiante`
--
ALTER TABLE `personas_estudiante`
  ADD CONSTRAINT `personas_estudiante_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona_retira`
--
ALTER TABLE `persona_retira`
  ADD CONSTRAINT `persona_retira_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `retira_estudiantes` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `retira_estudiantes`
--
ALTER TABLE `retira_estudiantes`
  ADD CONSTRAINT `retira_estudiantes_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_representante` FOREIGN KEY (`representante`) REFERENCES `representante` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seccion_estudiante_ibfk_1` FOREIGN KEY (`seccion_1`) REFERENCES `seccion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD CONSTRAINT `vacuna_ibfk_1` FOREIGN KEY (`id_vacuna`) REFERENCES `vacunacion` (`id_vacuna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD CONSTRAINT `vacunacion_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

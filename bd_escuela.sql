-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 06:56:15
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboracion`
--

CREATE TABLE `colaboracion` (
  `cedula_e` varchar(15) NOT NULL,
  `colab_comun` varchar(20) NOT NULL,
  `dia_disp` varchar(11) NOT NULL,
  `horario` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_esfinteres`
--

CREATE TABLE `control_esfinteres` (
  `cedula_e` varchar(15) NOT NULL,
  `se_orina` varchar(2) NOT NULL,
  `banio_solo` varchar(2) NOT NULL,
  `edad_no_panales` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedades`
--

CREATE TABLE `enfermedades` (
  `id_enfermedad` varchar(2) NOT NULL,
  `enfermedad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedad_estudiante`
--

CREATE TABLE `enfermedad_estudiante` (
  `id_enfermedad` varchar(2) NOT NULL,
  `cedula_e` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `observ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_estudiante`
--

CREATE TABLE `personas_estudiante` (
  `id` int(2) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `id_persona` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_retira`
--

CREATE TABLE `persona_retira` (
  `id_persona` int(1) NOT NULL,
  `nombre_apellido` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retira_estudiantes`
--

CREATE TABLE `retira_estudiantes` (
  `id_persona` int(1) NOT NULL,
  `cedula_e` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `seccion` varchar(1) NOT NULL,
  `grado` varchar(12) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `anio_escolar` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_estudiante`
--

CREATE TABLE `seccion_estudiante` (
  `id` varchar(2) NOT NULL,
  `seccion` varchar(2) NOT NULL,
  `representante` varchar(15) NOT NULL,
  `cedula_m` varchar(15) NOT NULL,
  `cedula_e` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `id_vacuna` varchar(2) NOT NULL,
  `vacuna` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunacion`
--

CREATE TABLE `vacunacion` (
  `id_vacuna` varchar(2) NOT NULL,
  `cedula_e` varchar(15) NOT NULL,
  `dosis` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `cedula_madre` (`cedula_mama`),
  ADD KEY `cedula_madre_2` (`cedula_mama`),
  ADD KEY `cedula_p` (`cedula_p`);

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
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `estudio` (`estudio`);

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
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `seccion_estudiante`
--
ALTER TABLE `seccion_estudiante`
  ADD PRIMARY KEY (`seccion`),
  ADD KEY `cedula_m` (`cedula_m`),
  ADD KEY `cedula_e` (`cedula_e`),
  ADD KEY `representante` (`representante`);

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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentes_prenatales_postnatales`
--
ALTER TABLE `antecedentes_prenatales_postnatales`
  ADD CONSTRAINT `antecedentes_prenatales_postnatales_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`cedula_m`) REFERENCES `estudiante` (`cedula_mama`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`seccion`) REFERENCES `seccion_estudiante` (`seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion_estudiante`
--
ALTER TABLE `seccion_estudiante`
  ADD CONSTRAINT `seccion_estudiante_ibfk_1` FOREIGN KEY (`cedula_e`) REFERENCES `estudiante` (`cedula_e`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seccion_estudiante_ibfk_2` FOREIGN KEY (`cedula_m`) REFERENCES `empleados` (`cedula`);

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

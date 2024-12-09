-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2024 a las 11:01:50
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
-- Base de datos: `portfolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idProyecto` int(11) NOT NULL,
  `titleP` text NOT NULL,
  `descriptionP` text NOT NULL,
  `image_title_P` text NOT NULL,
  `image_url_P` varchar(255) NOT NULL,
  `modal_text` text NOT NULL,
  `modal_link_title` text NOT NULL,
  `modal_link` varchar(255) NOT NULL,
  `image_title_M` text NOT NULL,
  `image_url_M` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idProyecto`, `titleP`, `descriptionP`, `image_title_P`, `image_url_P`, `modal_text`, `modal_link_title`, `modal_link`, `image_title_M`, `image_url_M`) VALUES
(1, 'Clases de refuerzo', 'Clases de refuerzo para estudiantes de Primaria, ESO y Bachillerato', 'Centro Rubik', 'Resources_images/rubik_logo.png', 'Desde marzo de 2021, trabajo dando clases de refuerzo en el Centro Rubik, particularmente de asignaturas de ciencias e inglés. Los alumnos, algunos de los cuales han sido diagnosticados con trastornos como TDAH o dislexia, pertenecen a cursos de Primaria, ESO y Bachillerato.', 'Página web de Rubik', 'https://www.centrorubik.es/', 'Centro Rubik Barañain', 'Resources_images/fachada_Rubik.jpg'),
(2, 'Historias', 'Publicación de relatos cortos e historias en AO3, tanto en español como en inglés', 'Imagen de perfil de AO3', 'Resources_images/Profile_AO3.jpg', 'Siempre me ha encantado leer y crear historias, aunque tardé bastante en decidirme a publicarlas online. Dado que estos sitios web tienen un público mayoritariamente de habla inglesa, también lo vi como una oportunidad de mantener y mejorar mi inglés, por lo que no solo publico en español', 'NONE', 'NONE', 'NONE', 'NONE'),
(3, 'Robótica', 'Monitora de la extraescolar de Robótica', 'Lego Mindstorms NXT', 'Resources_images//lego-mindstorms-nxt-set-8527-instructions-92147.jpg', 'Durante los cursos 17-18 y 18-19, impartí la extraescolar de Robótica en el IES Navarro Villoslada a alumnos de la ESO. El curso duraba tres meses (de octubre a diciembre), y se les enseñaba a ensamblar y programar robots Lego Mindstorms NXT para realizar diversas tareas (identificación de colores, cálculo de distancias, control del robot desde el móvil, etc)', 'NONE', 'NONE', 'Robot Lego Mindstorms NXT', 'Resources_images/lego-mindstorms-nxt.jpg'),
(4, 'Creación de mods', 'Creación de mods para Minecraft (C++, Java) y Baldur\'s Gate 3 (Osiris)', 'Código Minecraft', 'Resources_images/Minecraft_code.jpg', 'Combinando dos de mis pasiones, los videojuegos y la programación, he creado varios mods para Minecraft. El código, escrito en C++ y Java, modifica diversos aspectos del juego, según el mod. Algunos modifican el comportamiento de animales y enemigos, otros cambian la posibilidad de obtener ciertos objetos, y uno (todavía en desarrollo) añade nuevos hechizos para armas y armadura. También he creado algunos mods que cambian los colores y texturas de ciertas entidades. Además de Minecraft, mi intención es ir aprendiendo y experimentando con Osiris (un lenguaje de programación declarativa) para crear mis propios mods en Baldur\'s Gate 3', 'NONE', 'NONE', 'Código en Osiris', 'Resources_images/BG3_mods.jpg'),
(5, 'Técnico de sonido', 'Técnico de sonido en la obra de teatro \"Generación Lorca\", del IES Navarro Villoslada', 'Generación Lorca', 'Resources_images/Generacion_Lorca_Cropped.png', 'En 1º de Bachillerato, participé en el Taller de Teatro del IES Navarro Villoslada como técnico de sonido. Dado que la obra contenía varias piezas musicales, mi labor consistía en probar, equilibrar y activar o desactivar los micrófonos de los actores e instrumentos según el momento, además de manejar el panel de sonido para ajustar el volumen e intensidad de los elementos que componían cada canción. \"Generación Lorca\" fue un éxito, llegando a resultar ganadora del tercer premio nacional Buero de Teatro Joven', 'Página web de la obra', 'https://www.teatronavarrovilloslada.com/generacion-lorca-1', 'NONE', 'NONE'),
(6, 'Cibervoluntarios', 'Miembro de Cibervoluntarios, una ONG centrada en impulsar una transición digital inclusiva y eliminar la brecha digital', 'Cibervoluntarios', 'Resources_images/cibervoluntarios.png', 'Cibervoluntarios es una ONG española que lucha por una transición digital inclusiva y eliminar la brecha digital, además de fomentar el emprendimiento y talento científico-tecnológico. Para ello, facilita la adquisición de competencias digitales a personas en situación de vulnerabilidad digital (ancianos, niños pequeños, gente sin recursos, etc). Por ejemplo, en 2024 varios miembros de Cibervoluntarios hicimos un cursillo en una residencia de mayores para enseñar a los ancianos a usar un teléfono móvil moderno: hacer llamadas, navegar por Internet, escribir mensajes, etc', 'Página web de Cibervoluntarios', 'https://www.cibervoluntarios.org', 'Cibervoluntarios', 'Resources_images/Cibervoluntarios_image.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idProyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

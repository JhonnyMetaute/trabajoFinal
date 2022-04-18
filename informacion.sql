-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2022 a las 01:13:24
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Informacion` varchar(600) CHARACTER SET utf8 NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `uso` varchar(100) CHARACTER SET utf8 NOT NULL,
  `material` varchar(100) CHARACTER SET utf8 NOT NULL,
  `codex` varchar(100) CHARACTER SET utf8 NOT NULL,
  `plano` varchar(100) CHARACTER SET utf8 NOT NULL,
  `video` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id`, `Nombre`, `Informacion`, `imagen`, `tipo`, `uso`, `material`, `codex`, `plano`, `video`) VALUES
(1, 'Carro con guadañas', 'La hoja 15583r del Manuscrito en la Biblioteca Real de Turín se encuentra otro de sus diseños de máquinas bélicas: dos modelos de carro con guadañas destinados a ser empleados en batallas. En uno de ellos se sitúan dos caballos en el centro del carro, los cuales tiran del sistema. Sobre suelo se encontraban dos ruedas dentadas, de las cuales una tenía espigas y trasmitía el movimiento rotatorio al engranaje principal que era de tipo jaula. Este engranaje tipo jaula ponía en movimiento los sistemas de cuchillas. Los diseños de este dibujo tienen pequeñas imprecisiones técnicas y errores estruct', 'imagenes/carro_guadana.png', 'Bélica', 'Guerra', 'Metal y Madera', 'Atlanticus', 'archivos/carro.pdf', 'videos/guadana.mp4'),
(2, 'Tornillo Aéreo', 'El proyecto del tornillo aéreo, uno de los más famosos de Leonardo, está considerado el estudio más antiguo de un helicóptero. Se basa en el principio según el cual un tornillo sin fin unido con pernos a un eje de rotación tiende a levantarse en el aire si se hace girar rápidamente.', 'imagenes/tornillo.png', 'Voladora', 'Experimental', 'Metal, Madera y lino', 'Manuscrito B', 'archivos/tornillo.pdf', 'videos/tornillo.mp4'),
(3, 'Paracaídas', 'En el siglo XV Leonardo da Vinci desarrolló el primer artefacto diseñado para planear a partir de la observación de las leyes de la física y la naturaleza. El paracaídas de Leonardo era de forma piramidal. Consistía en una campana rígida en forma de pirámide con 4 cuerdas que en su unión colgaba un hombre sujetándose con sus manos. En sus cálculos había llegado a la conclusión de que si este artefacto midiera 12 codos de lado por 12 de fondo podría ser utilizado de forma segura si un hombre intentara descender con él luego de lanzarse desde una altura.', 'imagenes/paracaidas.png', 'Voladora', 'Experimental', 'Cuerdas y lino', 'Atlanticus', 'archivos/paracaidas.pdf', 'videos/paracaidas.mp4'),
(4, 'Cañón Spingarda', 'Cañón de recarga trasera diseñado por Leonardo da Vinci en el siglo XV, es el precursor de las armas modernas. El cañón podría disparar una gran variedad de munición y su diseño permite disparar en cualquier dirección otorgando protección para quien lo dispara', 'imagenes/canon.png', 'Bélica', 'Guerra', 'Madera, metal y Pólvora', 'Atlanticus', 'archivos/canon.pdf', 'videos/canon.mp4'),
(5, ' Barco de Palas', 'Leonardo Da Vinci diseño un barco que pudiera navegar a mayor velocidad que lo ya existentes. Poseía manivelas que, al ser maniobradas por los tripulantes, accionaban las ruedas externas para alcanzar mayor velocidad.', 'imagenes/barco.png', 'Barco', 'Navegación', 'Madera y metal', 'Atlanticus', 'archivos/barco.pdf', 'videos/barco.mp4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

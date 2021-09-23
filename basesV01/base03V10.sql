-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2021 at 06:34 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base03`
--
CREATE DATABASE IF NOT EXISTS `base03` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `base03`;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `articulo_id` int NOT NULL,
  `cantidad` int NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `pedido_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articulo` (`articulo_id`),
  KEY `fk_pedido` (`pedido_id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(80, 2, 1, '20.90', 52);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(81, 9, 1, '26.00', 52);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(82, 2, 1, '20.90', 53);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(83, 9, 1, '26.00', 53);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(84, 2, 1, '20.90', 54);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(85, 1, 1, '26.00', 54);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(86, 6, 1, '23.30', 54);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(87, 2, 1, '20.90', 55);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(88, 5, 1, '2.00', 55);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(89, 5, 1, '2.00', 56);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(90, 2, 1, '20.90', 57);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(91, 5, 1, '2.00', 57);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(92, 1, 1, '26.00', 58);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(93, 2, 1, '20.90', 58);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(94, 2, 1, '20.90', 59);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(95, 5, 1, '2.00', 59);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(96, 2, 1, '20.90', 60);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(97, 5, 1, '2.00', 60);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(98, 1, 1, '26.00', 61);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(99, 2, 1, '20.90', 61);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(100, 2, 1, '20.90', 62);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(101, 5, 1, '2.00', 62);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(102, 5, 1, '2.00', 63);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(103, 11, 1, '26.00', 63);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(104, 9, 1, '26.00', 63);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(105, 5, 1, '2.00', 64);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(106, 2, 1, '20.90', 64);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(107, 9, 1, '26.00', 65);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(108, 11, 1, '26.00', 65);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(109, 6, 1, '23.30', 65);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(110, 1, 1, '26.00', 66);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(111, 2, 55, '20.90', 66);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(112, 5, 1, '2.00', 66);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(113, 6, 1, '23.30', 66);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(114, 9, 1, '26.00', 66);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(115, 1, 1, '26.00', 67);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(116, 2, 55, '20.90', 67);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(117, 5, 1, '2.00', 67);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(118, 6, 1, '23.30', 67);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(119, 9, 1, '26.00', 67);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(120, 1, 1, '26.00', 68);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(121, 2, 1, '20.90', 68);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(122, 5, 1, '2.00', 69);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(123, 2, 1, '20.90', 69);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(124, 1, 1, '26.00', 70);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(125, 2, 1, '20.90', 71);
INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES(126, 5, 1, '2.00', 71);

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(52, 1, '2021-09-15 03:34:18');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(53, 1, '2021-09-15 03:34:26');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(54, 1, '2021-09-15 03:39:38');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(55, 1, '2021-09-15 03:44:22');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(56, 1, '2021-09-15 03:47:15');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(57, 1, '2021-09-15 05:47:43');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(58, 1, '2021-09-15 18:01:00');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(59, 1, '2021-09-15 18:28:00');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(60, 1, '2021-09-15 18:32:00');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(61, 1, '2021-09-15 19:44:00');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(62, 1, '2021-09-15 19:48:00');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(63, 1, '2021-09-15 20:01:00');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(64, 1, '2021-09-15 20:15:19');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(65, 1, '2021-09-15 22:18:34');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(66, 1, '2021-09-16 18:56:39');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(67, 1, '2021-09-16 18:56:40');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(68, 1, '2021-09-16 19:18:36');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(69, 1, '2021-09-16 19:36:53');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(70, 1, '2021-09-16 19:43:57');
INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES(71, 1, '2021-09-16 19:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_productos` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_productos`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(1, 'codigo01editadoh', 'descripcion26editado', '26.00', '2021-09-15', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(2, 'co444444', 'descripcion editada', '20.90', '2013-08-15', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(5, 'cod04', 'descripcion 03', '2.00', '2020-02-28', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(6, 'cod06', 'desc3', '23.30', '2012-12-30', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(9, 'prefijocodigo03', 'descripcion26', '26.00', '2013-12-29', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(11, 'codigo12', 'descripcion26', '26.00', '2013-12-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`) VALUES(1, 'juan', '1234');
INSERT INTO `usuarios` (`id`, `nombre`, `password`) VALUES(2, 'pedro', '1234');
INSERT INTO `usuarios` (`id`, `nombre`, `password`) VALUES(3, 'rodrigo', '1234');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_articulo` FOREIGN KEY (`articulo_id`) REFERENCES `productos` (`id_productos`),
  ADD CONSTRAINT `fk_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

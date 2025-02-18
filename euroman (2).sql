-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2025 a las 20:14:55
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
-- Base de datos: `euroman`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `nombre_categoria`) VALUES
(1, 'MOTOR'),
(6, 'SENSORES'),
(3, 'CADENA MOTRIZ'),
(4, 'FRENOS'),
(5, 'SISTEMA DE AIRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriascabina`
--

CREATE TABLE `categoriascabina` (
  `categoria_id` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categoriascabina`
--

INSERT INTO `categoriascabina` (`categoria_id`, `nombre_categoria`) VALUES
(1, 'PUERTAS'),
(2, 'CAPOT FRONTAL'),
(3, 'ACCESO A LA CABINA'),
(4, 'ELEVACION DE CABINA'),
(5, 'SUSPENSION DE CABINA'),
(6, 'VIDRIOS'),
(7, 'RETROVISORES'),
(8, 'GUARDABARROS'),
(9, 'SENSORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriasmecanica`
--

CREATE TABLE `categoriasmecanica` (
  `categoria_id` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categoriasmecanica`
--

INSERT INTO `categoriasmecanica` (`categoria_id`, `nombre_categoria`) VALUES
(1, 'MOTOR'),
(6, 'SENSORES'),
(3, 'CADENA MOTRIZ'),
(4, 'FRENOS'),
(5, 'SISTEMA DE AIRE'),
(7, 'PUERTAS'),
(8, 'CAPOT FRONTAL'),
(9, 'CABINA METALICA ARMADA'),
(10, 'ACCESO A LA CABINA'),
(11, 'ELEVACION DE CABINA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `repuesto_id` int(11) NOT NULL,
  `nombre_repuesto` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `subcategoria_id` int(11) DEFAULT NULL,
  `imagen1` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `repuestos`
--

INSERT INTO `repuestos` (`repuesto_id`, `nombre_repuesto`, `descripcion`, `precio`, `subcategoria_id`, `imagen1`) VALUES
(2, 'Depurador', 'a', 0.00, 2, '../imagenes/depurador 81.08400-6031.jpg'),
(3, 'Filtro de aire principal', 'a', 0.00, 2, '../imagenes/filtro de aire principal 81.08405-0021.jpeg'),
(4, 'Filtro de aire secundario', 'a', 0.00, 2, '../imagenes/filtro de aire secundario 81.08405-0017.jpg'),
(5, 'Acordeon de caucho', 'a', 0.00, 2, '../imagenes/acordeon de caucho 81.96420-0517.JPG'),
(6, 'Turbo de aspiraciÃ³n', 'a', 0.00, 2, '../imagenes/turbo de aspiracion 81.08201-0538.jpeg'),
(7, 'Columna de aspiraciÃ³n', 'a', 0.00, 2, '../imagenes/columna de apiracion 81.08201-0483.jpg'),
(8, 'Camisas', 'b', 1.00, 3, '../imagenes/camisas 51.01201-0459.jpg'),
(9, 'CigueÃ±al', 'b', 1.00, 3, '../imagenes/CigueÃ±al 51.02101-0801.jpg'),
(10, 'Piston', 'b', 2.00, 3, '../imagenes/Piston 51.02500-6288.JPG'),
(11, 'Rines de piston', 'b', 2.00, 3, '../imagenes/Rines de piston 51.02503-0818.jpeg'),
(12, 'Bielas', 'b', 1.00, 3, '../imagenes/Bielas 51.02400-6151.jpg'),
(13, 'Cojinetes', 'b', 2.00, 3, '../imagenes/Cojinetes 51.02410-6698.JPG'),
(14, 'Volante de inercia', 'b', 1.00, 3, '../imagenes/Volante de inercia 51.02301-6093.JPG'),
(15, 'Corona del volante', 'b', 1.00, 3, '../imagenes/Corona del volante 51.02310-0097.jpg'),
(16, 'Bomba de agua', 'b', 1.00, 3, '../imagenes/Bomba de agua 51.06330-5040.jpeg'),
(17, 'Juego de reparaciÃ³n de bomba de agua', 'b', 1.00, 3, '../imagenes/Juego de reparaciÃ³n de bomba de agua 51.06599-6094.jpg'),
(18, 'Termostatos', 'b', 1.00, 3, '../imagenes/Termostatos 51.06402-6005.jpeg'),
(19, 'Base filtro de aceite', 'b', 1.00, 3, '../imagenes/Base filtro de aceite 51.05000-7099.JPG'),
(20, 'Cabezote armado con vÃ¡lvulas', 'c', 3.00, 4, '../imagenes/Cabezote armado  51.03100-6332.JPG'),
(21, 'Empaque cabezote', 'c', 3.00, 4, '../imagenes/Empaque del cabezote 51.03901-0402.jpeg'),
(22, 'Valvulas de admisiÃ³n/escape', 'c', 3.00, 4, '../imagenes/Valvulas de admisiÃ³n escape 51.04101-0523.jpg'),
(23, 'Valvulas resortes/seguros', 'c', 3.00, 4, '../imagenes/Valvulas resortes seguros 51.04102-0159.JPG'),
(24, 'Tapa valvulas', 'c', 3.00, 4, '../imagenes/Tapa valvulas man 51.03401-6039.jpg'),
(25, 'Ensamblaje Arbol de levas', 'c', 3.00, 4, '../imagenes/Ensamblaje Arbol de levas 51.04401-5088.jpg'),
(26, 'Balancines admision/escape', 'c', 3.00, 4, '../imagenes/Balancines admision escape 51.04201-6195.jpeg'),
(27, 'Carter', 'c', 3.00, 5, '../imagenes/Carter 51.05800-6370.jpeg'),
(28, 'Empaque de carter', 'c', 3.00, 5, '../imagenes/Empaque de carter 51.05904-0212.JPG'),
(29, 'Bomba de aceite', 'c', 3.00, 5, '../imagenes/Bomba de aceite 51.05103-5036.JPG'),
(30, 'Multiples de escape', 'e', 5.00, 6, '../imagenes/Multiples de escape 51.08102-0116.PNG'),
(31, 'Base del turbo', 'e', 5.00, 6, '../imagenes/Base del turbo 51.08102-0634.jpg'),
(32, 'Empaques del escape', 'e', 5.00, 6, '../imagenes/Empaques de escape 51.08901-0315.jpg'),
(33, 'Tuberia de escape', '51.09411-5164', 0.00, 6, '../imagenes/Tuberia de escape 51.09411-5164.PNG'),
(34, 'Silenciador de escape', 'E', 5.00, 6, '../imagenes/Silenciador de escape 81.15101-0333.jpeg'),
(35, 'Espiral de escape', 'e', 5.00, 6, '../imagenes/Espiral de escape 06.11222-6507.PNG'),
(36, 'Abrazaderas de escape', 'e', 5.00, 6, '../imagenes/Abrazaderas de escape 81.97420-0152.JPG'),
(37, 'Intercooler', 'f', 6.00, 7, '../imagenes/Intercooler 81.06130-0231.JPG'),
(38, 'Radiador de refrigerante', 'f', 6.00, 7, '../imagenes/Radiador de refrigerante 81.06101-6519.jpg'),
(39, 'Sensor del nivel de refrigerante', 'f', 6.00, 7, '../imagenes/Sensor del nivel de refrigerante 81.27421-0232.jpeg'),
(40, 'Cubierta del ventilador', 'f', 6.00, 7, '../imagenes/Cubierta del ventilador 81.06620-0187.PNG'),
(41, 'Ventilador del embrague', 'f', 6.00, 7, '../imagenes/Ventilador con embrague 51.06600-7052.jpg'),
(42, 'Torre de ventilador', 'f', 6.00, 7, '../imagenes/Torre de ventilador camiones man 51.06609-5012.jpg'),
(43, 'Soporte del radiador', 'f', 6.00, 7, '../imagenes/Soporte de radiadorr 81.06225-0005.jpeg'),
(44, 'Tuberia de refrigerante', 'f', 6.00, 7, '../imagenes/Tuberia de refrigerante 81.96301-0961.jpeg'),
(45, 'Manguera de Intercooler ', 'f', 6.00, 7, '../imagenes/Manguera de Intercooler 81.96301-0900.jpeg'),
(46, 'Turbo compresor BORGWARNER ', 'f', 6.00, 8, '../imagenes/Turbocompresor BORGWARNER 51.09100-7821.jpg'),
(47, 'Juego de empaques de turbo', '7', 7.00, 8, '../imagenes/Juego de empaques de turbo 51.08901-0209.JPG'),
(48, 'Esparragos y tuercas', 'g', 7.00, 8, '../imagenes/Esparragos y tuercas 51.90210-0017.JPG'),
(49, 'Tuberia de alta presiÃ³n', 'g', 7.00, 8, '../imagenes/Tuberia de alta presiÃ³n51.05703-5350.jpeg'),
(50, 'TuberÃ­a de retorno', 'g', 7.00, 8, '../imagenes/Tuberia de retorno 51.05703-5395.PNG'),
(51, 'Tanque de combustible', 'h', 7.00, 9, '../imagenes/Tanque de combustible 81.12201-5690.jpg'),
(52, 'Soportes de tanque de combustible', 'h', 8.00, 9, '../imagenes/Soportes de tanque de combustible 81.97460-6058.jpg'),
(53, 'Racor filtro de combustible', 'h', 8.00, 9, '../imagenes/Racor filtro de combustible 81.12501-6085.jpg'),
(56, 'Unidad de alimentaciÃ³n', 'h', 8.00, 9, '../imagenes/Unidad de alimentaciÃ³n 81.27203-6020.jpg'),
(55, 'Inyectores D20/D26/D28', 'h', 8.00, 9, '../imagenes/Inyectores D20 D26 D28 51.10100-6127.jpg'),
(57, 'Tuberias de inyecciÃ³n de alta', 'h', 8.00, 9, '../imagenes/Tuberias de inyecciÃ³n de alta 51.10304-0318.jpeg'),
(58, 'Riel comÃºn', 'H', 8.00, 9, '../imagenes/Riel comun (common rail) 51.10311-6082.PNG'),
(59, 'Sensor de presiÃ³n del riel comÃºn', 'H', 8.00, 9, '../imagenes/Sensor de presiÃ³n del riel comun 51.27421-0229.JPG'),
(60, 'Bomba inyectora de alta presiÃ³n', 'h', 8.00, 9, '../imagenes/Bomba inyectora de alta presiÃ³n 51.11103-7846.jpg'),
(61, 'Modulo de inyecciÃ³n', 'h', 8.00, 9, '../imagenes/Modulo de inyecciÃ³n 51.25803-7893.jpg'),
(62, 'Carcasa filtros de combustible', 'h', 8.00, 9, '../imagenes/Carcasa filtros de combustible 51.12501-7313.jpg'),
(63, 'Tuberias de combustible', 'h', 8.00, 9, '../imagenes/Tuberias de combustible 51.12305-5364.jpg'),
(64, 'Ejes', '0', 0.00, 11, '../imagenes/ejes 81.32206-0130.jpg'),
(65, 'Disco de embrague', '0', 0.00, 10, '../imagenes/disco de embrague 81.30301-0630.jpg'),
(66, 'Engranaje planetario', '0', 0.00, 12, '../imagenes/Engranaje planetario 81.37501-0041.jpeg'),
(67, 'Plato de embrague', '0', 0.00, 10, '../imagenes/Plato de embrague 81.30305-0229.PNG'),
(68, 'Rodamiento de embrague', '0', 0.00, 10, '../imagenes/Rodamiento de embrague 81.30550-0116.PNG'),
(69, 'Horquilla de embrague', '0', 0.00, 10, '../imagenes/Horquilla de embrague 81.32411-0007.PNG'),
(70, 'Reservorio de lÃ­quido de embrague', '0', 0.01, 10, '../imagenes/Reservorio de lÃ­quido de embrague 81.51501-6050.PNG'),
(71, 'Cilindro maestro', '81.30715-6152', 0.00, 10, '../imagenes/Cilindro maestro 81.30715-6152.PNG'),
(72, 'Booster de embrague', '81.30725-6116\r\n', 0.00, 10, '../imagenes/Booster de embrague 81.30725-6116.PNG'),
(73, 'PiÃ±ones', '81.32302-0033\r\n', 0.00, 11, '../imagenes/PiÃ±ones 81.32302-0033.PNG'),
(74, 'Rodamientos ', 'ninguno', 0.00, 11, '../imagenes/Rodamientos.PNG'),
(75, 'Collarines (todas las marchas)', '81.32402-0197\r\n', 0.00, 11, '../imagenes/Collarines (todas las marchas) 81.32402-0197.PNG'),
(76, 'Sincronizados (todas las marchas)', '81.32420-0230\r\n', 0.00, 11, '../imagenes/Sincronizados (todas las marchas) 81.32420-0230.PNG'),
(77, 'Cuerpo de embrague (todas las marchas)', '81.32425-0092\r\n', 0.00, 11, '../imagenes/Cuerpo de embrague (todas las marchas) 81.32425-0092.PNG'),
(78, 'Empaques', '81.32903-0262', 0.00, 11, '../imagenes/Empaques 81.32903-0262.PNG'),
(79, 'Carcasas', '81.32101-0311\r\n', 0.00, 11, '../imagenes/Carcasas 81.32101-0311.PNG'),
(80, 'Servo shift', '81.32690-6058\r\n', 0.00, 11, '../imagenes/Servo shift 81.32690-6058.PNG'),
(81, 'Bomba de aceite ', '82.32101-0021\r\n', 0.00, 11, '../imagenes/Bomba de aceite 82.32101-0021.PNG'),
(82, 'Cable de caja de cambios', '81.32655-6311\r\n', 0.00, 11, '../imagenes/Cable de caja de cambios 81.32655-6311.PNG'),
(84, 'Estator y rotor', '82.32001-0004 81.55207-0004\r\n', 0.00, 12, '../imagenes/Estator y rotor 82.32001-0004 81.55207-0004.PNG'),
(85, 'Engranajes', '81.55201-0005\r\n', 0.00, 12, '../imagenes/Engranajes 81.55201-0005.PNG'),
(86, 'Empaques', '81.55201-0004\r\n', 0.00, 12, '../imagenes/Empaques 81.55201-0004.PNG'),
(87, 'Filtro de retarder', '81.33215-0002\r\n', 0.00, 12, '../imagenes/Filtro de retarder 81.33215-0002.PNG'),
(88, 'Mando control de vÃ¡lvulas', '81.25935-0042\r\n', 0.00, 12, '../imagenes/Mando control de vÃ¡lvulas 81.25935-0042.PNG'),
(89, 'Intercambiador tÃ©rmico', '81.32560-0071\r\n', 0.00, 12, '../imagenes/Intercambiador tÃ©rmico 81.32560-0071.PNG'),
(90, 'Cilindro Dual', '81.32638-0037\r\n', 0.00, 12, '../imagenes/Cilindro Dual 81.32638-0037.PNG'),
(91, 'Cilindro Doble', '81.32638-0052\r\n', 0.00, 12, '../imagenes/Cilindro Doble 81.32638-0052.PNG'),
(92, 'Cardan principal armado', '81.39325-6156\r\n', 0.00, 13, '../imagenes/Cardan principal armado 81.39325-6156.PNG'),
(93, 'Cardan secundario armado', '81.39324-6068\r\n', 0.00, 13, '../imagenes/Cardan secundario armado 81.39324-6068.PNG'),
(94, 'Crucetas', '81.39374-6003\r\n', 0.00, 13, '../imagenes/Crucetas 81.39374-6003.PNG'),
(95, 'Kit de reparaciÃ³n de diferencial', '81.35107-6044\r\n', 0.00, 14, '../imagenes/Kit de reparaciÃ³n de diferencial 81.35107-6044.PNG'),
(96, 'Cono y corona', '81.35199-6658\r\n', 0.00, 14, '../imagenes/Cono y corona 81.35199-6658.PNG'),
(97, 'Arandelas de diferencial', '81.35613-0043\r\n', 0.00, 14, '../imagenes/Arandelas de diferencial 81.35613-0043.PNG'),
(98, 'Engranajes planetarios y satelites', '81.35106-0036\r\n', 0.00, 14, '../imagenes/Engranajes planetarios y satelites 81.35106-0036.PNG'),
(99, 'Rodamientos', '06.32489-0119\r\n', 0.00, 14, '../imagenes/Rodamientos 06.32489-0119.PNG'),
(100, 'Brida de corona y de caja', '81.39115-5106\r\n', 0.00, 14, '../imagenes/Brida de corona y de caja 81.39115-5106.PNG'),
(101, 'Kit de reparaciÃ³n de planetarios', '81.35112-6023\r\n', 0.00, 15, '../imagenes/Kit de reparaciÃ³n de planetarios 81.35112-6023.PNG'),
(102, 'Soporte de planetarios', '81.35114-0134\r\n', 0.00, 15, '../imagenes/Soporte de planetarios 81.35114-0134.PNG'),
(103, 'Retenedores', '06.56341-4254\r\n', 0.00, 15, '../imagenes/Retenedores 06.56341-4254.PNG'),
(104, 'Cubo de campana', '81.35114-0135\r\n', 0.00, 15, '../imagenes/Cubo de campana 81.35114-0135.PNG'),
(105, 'Rueda dentada', '81.35111-0026\r\n', 0.00, 15, '../imagenes/Rueda dentada 81.35111-0026.PNG'),
(106, 'Martillo freno de arbol de leva', '81.50301-0112\r\n', 0.00, 16, '../imagenes/Martillo freno de arbol de leva 81.50301-0112.PNG'),
(107, 'Rache delantero/posterior', '81.50610-6266\r\n', 0.00, 16, '../imagenes/Rache delantero-posterior 81.50610-6266.PNG'),
(108, 'Pulmon de freno', '81.50410-6551\r\n', 0.00, 16, '../imagenes/Pulmon de freno 81.50410-6551.PNG'),
(109, 'Portafrenos', '81.50202-0127\r\n', 0.00, 16, '../imagenes/Portafrenos 81.50202-0127.PNG'),
(110, 'Tambor de freno', '81.50110-0144\r\n', 0.00, 16, '../imagenes/Tambor de freno 81.50110-0144.PNG'),
(111, 'Resorte de zapatas', '81.97610-0317\r\n', 0.00, 16, '../imagenes/Resorte de zapatas 81.97610-0317.PNG'),
(112, 'Zapatas', '81.50201-6223\r\n', 0.00, 16, '../imagenes/Zapatas 81.50201-6223.PNG'),
(113, 'Freno de mÃ¡quina ensamblado', '51.15201-6174\r\n', 0.00, 17, '../imagenes/Freno de mÃ¡quina ensamblado 51.15201-6174.PNG'),
(114, 'Cilindro de aire', '81.15701-6124\r\n', 0.00, 17, '../imagenes/Cilindro de aire 81.15701-6124.PNG'),
(115, 'Compresor de aire', '51.54100-7121\r\n', 0.00, 18, '../imagenes/Compresor de aire 51.54100-7121.PNG'),
(116, 'Kit reparacion de compresor de aire', '51.54100-6049\r\n', 0.00, 18, '../imagenes/Kit reparacion de compresor de aire 51.54100-6049.PNG'),
(117, 'Valvula protectora 4 circuitos', '81.52151-6098\r\n', 0.00, 18, '../imagenes/Valvula protectora 4 circuitos 81.52151-6098.PNG'),
(118, 'Tanque de aire', '81.51401-0241\r\n', 0.00, 18, '../imagenes/Tanque de aire 81.51401-0241.PNG'),
(119, 'Valvula del secador de aire', '81.52102-6101\r\n', 0.00, 18, '../imagenes/Valvula del secador de aire 81.52102-6101.PNG'),
(120, 'Sensor de la temperatura de gases de escape', '81.27421-0264\r\n', 0.00, 19, '../imagenes/Sensor de la temperatura de gases de escape 81.27421-0264.PNG'),
(121, 'Sensor de temperatura del Retarder', '81.27420-0101\r\n', 0.00, 19, '../imagenes/Sensor de temperatura del Retarder 81.27420-0101.PNG'),
(122, 'Sensor del volante de inercia', '51.27120-0014\r\n', 0.00, 19, '../imagenes/Sensor del volante de inercia 51.27120-0014.PNG'),
(123, 'Sensor de presiÃ³n del turbo', '51.27421-0216\r\n', 0.00, 19, '../imagenes/Sensor de presiÃ³n del turbo 51.27421-0216.PNG'),
(124, 'Sonda de nivel lÃ­quido para autochequeo', '51.27421-0280\r\n', 0.00, 19, '../imagenes/Sonda de nivel lÃ­quido para autochequeo 51.27421-0280.PNG'),
(125, 'Sensor desgaste zapatas', '81.25937-6041\r\n', 0.00, 19, '../imagenes/Sensor desgaste zapatas 81.25937-6041.PNG'),
(126, 'Sensor RPM disco', '81.27120-6182\r\n', 0.00, 19, '../imagenes/Sensor RPM disco 81.27120-6182.PNG'),
(127, 'Sensor temperatura calefacciÃ³n', '81.27420-0098\r\n', 0.00, 19, '../imagenes/Sensor temperatura calefacciÃ³n 81.27420-0098.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestoscabina`
--

CREATE TABLE `repuestoscabina` (
  `repuesto_id` int(11) NOT NULL,
  `nombre_repuesto` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `subcategoria_id` int(11) DEFAULT NULL,
  `imagen1` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `repuestoscabina`
--

INSERT INTO `repuestoscabina` (`repuesto_id`, `nombre_repuesto`, `descripcion`, `precio`, `subcategoria_id`, `imagen1`) VALUES
(1, 'Sistema elevavidrios electrico izquierdo', '81.62645-6055\r\n', 0.00, 1, '../imagenes/Sistema elevavidrios electrico izquierdo 81.62645-6055.PNG'),
(2, 'Sistema elevavidrios electrico derecho', '81.62645-6054\r\n', 0.00, 1, '../imagenes/Sistema elevavidrios electrico derecho 81.62645-6054.PNG'),
(3, 'Manija apertura interna derecha', '81.62641-5011\r\n', 0.00, 2, '../imagenes/Manija apertura interna derecha 81.62641-5011.PNG'),
(4, 'Manija apertura interna izquierda', '81.62641-5010\r\n', 0.00, 2, '../imagenes/Manija apertura interna izquierda 81.62641-5010.PNG'),
(5, 'Manija apertura externa derecha', '81.62641-6080\r\n', 0.00, 2, '../imagenes/Manija apertura externa derecha 81.62641-6080.PNG'),
(6, 'Manija apertura externa izquierda', '81.62641-6081\r\n', 0.00, 2, '../imagenes/Manija apertura externa izquierda 81.62641-6081.PNG'),
(7, 'Cable de la puerta ', '81.62680-0132\r\n', 0.00, 2, '../imagenes/Cable de la puerta 81.62680-0132.PNG'),
(10, 'Faldon inferior izquierdo', '81.62610-0033\r\n', 0.00, 3, '../imagenes/Faldon inferior izquierdo 81.62610-0033.PNG'),
(9, 'Faldon inferior derecho', '81.62610-0032\r\n', 0.00, 3, '../imagenes/Faldon inferior derecho 81.62610-0032.PNG'),
(11, 'Bisagra superior puerta derecha', '81.62690-6050\r\n', 0.00, 4, '../imagenes/Bisagra superior puerta derecha 81.62690-6050.PNG'),
(12, 'Bisagra superior puerta derecha', '81.62690-6064\r\n', 0.00, 4, '../imagenes/Bisagra superior puerta derecha 81.62690-6064.PNG'),
(13, 'Bisagra superior puerta izquierda', '81.62690-6049\r\n', 0.00, 4, '../imagenes/Bisagra superior puerta izquierda 81.62690-6049.PNG'),
(14, 'Bisagra superior puerta izquierda', '81.62690-6063\r\n', 0.00, 4, '../imagenes/Bisagra superior puerta izquierda 81.62690-6063.PNG'),
(15, 'TapicerÃ­a puerta derecha ', '81.62630-6108\r\n', 0.00, 5, '../imagenes/TapicerÃ­a puerta derecha 81.62630-6108.PNG'),
(16, 'TapicerÃ­a puerta izquierda ', '81.62630-6107\r\n', 0.00, 5, '../imagenes/TapicerÃ­a puerta izquierda  81.62630-6107.PNG'),
(17, 'Tirador puerta derecha', '81.62630-4156\r\n', 0.00, 5, '../imagenes/Tirador puerta derecha 81.62630-4156.PNG'),
(18, 'Tirador puerta izquierda', '81.62630-4155\r\n', 0.00, 5, '../imagenes/Tirador puerta izquierda 81.62630-4155.PNG'),
(19, 'Ventolera de aire puerta izq/der ', '81.61950-0426\r\n', 0.00, 5, '../imagenes/Ventolera de aire puerta izq-der 81.61950-0426.PNG'),
(20, 'Trampilla frontal TSG', '81.61110-6042\r\n', 0.00, 6, '../imagenes/Trampilla frontal TSG  81.61110-6042.PNG'),
(21, 'Rejilla delantera', '81.61150-6059\r\n', 0.00, 6, '../imagenes/Rejilla delantera 81.61150-6059.PNG'),
(22, 'Liston cromado superior', '81.61150-0125\r\n', 0.00, 6, '../imagenes/Liston cromado superior 81.61150-0125.PNG'),
(23, 'Derivabrisas izquierdo', '81.61110-0067\r\n', 0.00, 6, '../imagenes/Derivabrisas izquierdo 81.61110-0067.PNG'),
(24, 'Derivabrisas derecho', '81.61110-0068\r\n', 0.00, 6, '../imagenes/Derivabrisas derecho 81.61110-0068.PNG'),
(25, 'Tapa de las plumas', '81.61140-0032\r\n', 0.00, 6, '../imagenes/Tapa de las plumas 81.61140-0032.PNG'),
(26, 'Resorte a gas ', '81.97006-0029\r\n', 0.00, 6, '../imagenes/Resorte a gas 81.97006-0029.PNG'),
(27, 'Grada inferior izquierda', '81.61510-0679\r\n', 0.00, 7, '../imagenes/Grada inferior izquierda 81.61510-0679.PNG'),
(28, 'Grada inferior derecha', '81.61510-0680\r\n', 0.00, 7, '../imagenes/Grada inferior derecha 81.61510-0680.PNG'),
(29, 'Estribo metÃ¡lico inferior', '81.61510-5187\r\n', 0.00, 7, '../imagenes/Estribo metÃ¡lico inferior 81.61510-5187.PNG'),
(35, 'Tapa de la grada', '81.61510-0823\r\n', 0.00, 7, '../imagenes/Tapa de la grada 81.61510-0823.PNG'),
(31, 'Escalera de subida izquierda', '81.61510-0801\r\n', 0.00, 8, '../imagenes/Escalera de subida izquierda 81.61510-0801.PNG'),
(32, 'Escalera de subida derecha', '81.61510-0978\r\n', 0.00, 8, '../imagenes/Escalera de subida derecha 81.61510-0978.PNG'),
(33, 'Faldon cubre rueda izquierda', '81.61210-0617\r\n', 0.00, 8, '../imagenes/Faldon cubre rueda izquierda 81.61210-0617.PNG'),
(34, 'Faldon cubre rueda izquierda', '81.61210-0616\r\n', 0.00, 8, '../imagenes/Faldon cubre rueda izquierda 81.61210-0616.PNG'),
(36, 'Estribo metÃ¡lico medio', '81.61511-0001\r\n\r\n', 0.00, 8, '../imagenes/Estribo metÃ¡lico medio 81.61511-0001.png'),
(37, 'Estribo metÃ¡lico superior', '81.61510-0490\r\n', 0.00, 8, '../imagenes/Estribo metÃ¡lico superior 81.61510-0490.png'),
(38, 'Soporte metÃ¡lico izquierdo', '81.61540-5075\r\n', 0.00, 8, '../imagenes/Soporte metÃ¡lico izquierdo 81.61540-5075.png'),
(39, 'Soporte metÃ¡lico derecho', '81.61540-5076\r\n', 0.00, 8, '../imagenes/Soporte metÃ¡lico derecho 81.61540-5076.png'),
(40, 'Cilindro hidrÃ¡ulico de elevaciÃ³n', '81.41723-6123\r\n', 0.00, 9, '../imagenes/Cilindro hidrÃ¡ulico de elevaciÃ³n 81.41723-6123.png'),
(41, 'Kit de reparacion bujes  barra de volteo', '81.41715-6014\r\n', 0.00, 9, '../imagenes/Kit de reparacion bujes  barra de volteo 81.41715-6014.png'),
(42, 'Barra de volteo', '81.41715-6016\r\n', 0.00, 9, '../imagenes/Barra de volteo 81.41715-6016.png'),
(43, 'Cerradura de cabina', '81.61851-6030\r\n', 0.00, 9, '../imagenes/Cerradura de cabina 81.61851-6030.png'),
(44, 'Amortiguador delantero ', '81.41722-6060\r\n\r\n', 0.00, 10, '../imagenes/Amortiguador delantero 81.41722-6060.png'),
(45, 'Amortiguador posterior izquierdo', '81.41722-6061', 0.00, 10, '../imagenes/Amortiguador posterior izquierdo 81.41722-6061.png'),
(46, 'Amortiguador posterior derecho', '81.41722-6061\r\n', 0.00, 10, '../imagenes/Amortiguador posterior derecho 81.41722-6061.png'),
(47, 'Boya neumÃ¡tica de amortiguaciÃ³n delantera', '81.41722-6069\r\n', 0.00, 10, '../imagenes/Boya neumÃ¡tica de amortiguaciÃ³n delantera 81.41722-6069.png'),
(48, 'Boya neumÃ¡tica de amortiguaciÃ³n posterior izquierdo', '81.41722-6073\r\n', 0.00, 10, '../imagenes/Boya neumÃ¡tica de amortiguaciÃ³n posterior izquierdo 81.41722-6073.png'),
(49, 'Boya neumÃ¡tica de amortiguaciÃ³n posterior derecho', '81.41722-6075\r\n', 0.00, 10, '../imagenes/Boya neumÃ¡tica de amortiguaciÃ³n posterior derecho 81.41722-6075.png'),
(50, 'Cristal lateral izquierdo', '81.62550-0009\r\n', 0.00, 11, '../imagenes/Cristal lateral izquierdo 81.62550-0009.png'),
(51, 'Cristal lateral derecho', '81.62550-0010\r\n', 0.00, 11, '../imagenes/Cristal lateral derecho  81.62550-0010.png'),
(52, 'Ventana puerta derecha', '81.62645-6056\r\n', 0.00, 11, '../imagenes/Ventana puerta derecha 81.62645-6056.png'),
(53, 'Ventana puerta izquierda', '81.62645-6057\r\n', 0.00, 11, '../imagenes/Ventana puerta izquierda 81.62645-6057.png'),
(54, 'Parabrisas', '81.62450-0078\r\n', 0.00, 11, '../imagenes/Parabrisas 81.62450-0078.png'),
(55, 'Retrovisor auxiliar puerta derecha', '81.63730-6733\r\n', 0.00, 12, '../imagenes/Retrovisor auxiliar puerta derecha 81.63730-6733.png'),
(56, 'Retrovisor auxiliar frontal', '81.63730-6656\r\n', 0.00, 12, '../imagenes/Retrovisor auxiliar frontal 81.63730-6656.png'),
(57, 'Retrovisor elÃ©ctrico con calefacciÃ³n derecho', '81.63730-6531\r\n', 0.00, 12, '../imagenes/Retrovisor elÃ©ctrico con calefacciÃ³n derecho 81.63730-6531.png'),
(58, 'Retrovisor elÃ©ctrico con calefacciÃ³n izquierdo', '81.63730-6530\r\n', 0.00, 12, '../imagenes/Retrovisor elÃ©ctrico con calefacciÃ³n izquierdo 81.63730-6530.png'),
(59, 'Guardabarro interno izquierdo', '81.61230-0287\r\n', 0.00, 13, '../imagenes/Guardabarro interno izquierdo 81.61230-0287.png'),
(60, 'Guardabarro interno derecho', '81.61230-0288\r\n', 0.00, 13, '../imagenes/Guardabarro interno derecho 81.61230-0288.png'),
(61, 'Guardabarro derecho', '81.61210-0674\r\n', 0.00, 13, '../imagenes/Guardabarro derecho 81.61210-0674.png'),
(62, 'Guardabarro izquierdo', '81.61210-0673\r\n', 0.00, 13, '../imagenes/Guardabarro izquierdo 81.61210-0673.png'),
(63, 'Sensor de asentamiento de cabina', '81.25520-0213\r\n', 0.00, 14, '../imagenes/Sensor de asentamiento de cabina 81.25520-0213.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestosmecanica`
--

CREATE TABLE `repuestosmecanica` (
  `repuesto_id` int(11) NOT NULL,
  `nombre_repuesto` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `subcategoria_id` int(11) DEFAULT NULL,
  `imagen1` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `repuestosmecanica`
--

INSERT INTO `repuestosmecanica` (`repuesto_id`, `nombre_repuesto`, `descripcion`, `precio`, `subcategoria_id`, `imagen1`) VALUES
(2, 'Depurador', 'a', 0.00, 2, '../imagenes/depurador 81.08400-6031.jpg'),
(3, 'Filtro de aire principal', 'a', 0.00, 2, '../imagenes/filtro de aire principal 81.08405-0021.jpeg'),
(4, 'Filtro de aire secundario', 'a', 0.00, 2, '../imagenes/filtro de aire secundario 81.08405-0017.jpg'),
(5, 'Acordeon de caucho', 'a', 0.00, 2, '../imagenes/acordeon de caucho 81.96420-0517.JPG'),
(6, 'Turbo de aspiraciÃ³n', 'a', 0.00, 2, '../imagenes/turbo de aspiracion 81.08201-0538.jpeg'),
(7, 'Columna de aspiraciÃ³n', 'a', 0.00, 2, '../imagenes/columna de apiracion 81.08201-0483.jpg'),
(8, 'Camisas', 'b', 1.00, 3, '../imagenes/camisas 51.01201-0459.jpg'),
(9, 'CigueÃ±al', 'b', 1.00, 3, '../imagenes/CigueÃ±al 51.02101-0801.jpg'),
(10, 'Piston', 'b', 2.00, 3, '../imagenes/Piston 51.02500-6288.JPG'),
(11, 'Rines de piston', 'b', 2.00, 3, '../imagenes/Rines de piston 51.02503-0818.jpeg'),
(12, 'Bielas', 'b', 1.00, 3, '../imagenes/Bielas 51.02400-6151.jpg'),
(13, 'Cojinetes', 'b', 2.00, 3, '../imagenes/Cojinetes 51.02410-6698.JPG'),
(14, 'Volante de inercia', 'b', 1.00, 3, '../imagenes/Volante de inercia 51.02301-6093.JPG'),
(15, 'Corona del volante', 'b', 1.00, 3, '../imagenes/Corona del volante 51.02310-0097.jpg'),
(16, 'Bomba de agua', 'b', 1.00, 3, '../imagenes/Bomba de agua 51.06330-5040.jpeg'),
(17, 'Juego de reparaciÃ³n de bomba de agua', 'b', 1.00, 3, '../imagenes/Juego de reparaciÃ³n de bomba de agua 51.06599-6094.jpg'),
(18, 'Termostatos', 'b', 1.00, 3, '../imagenes/Termostatos 51.06402-6005.jpeg'),
(19, 'Base filtro de aceite', 'b', 1.00, 3, '../imagenes/Base filtro de aceite 51.05000-7099.JPG'),
(20, 'Cabezote armado con vÃ¡lvulas', 'c', 3.00, 4, '../imagenes/Cabezote armado  51.03100-6332.JPG'),
(21, 'Empaque cabezote', 'c', 3.00, 4, '../imagenes/Empaque del cabezote 51.03901-0402.jpeg'),
(22, 'Valvulas de admisiÃ³n/escape', 'c', 3.00, 4, '../imagenes/Valvulas de admisiÃ³n escape 51.04101-0523.jpg'),
(23, 'Valvulas resortes/seguros', 'c', 3.00, 4, '../imagenes/Valvulas resortes seguros 51.04102-0159.JPG'),
(24, 'Tapa valvulas', 'c', 3.00, 4, '../imagenes/Tapa valvulas man 51.03401-6039.jpg'),
(25, 'Ensamblaje Arbol de levas', 'c', 3.00, 4, '../imagenes/Ensamblaje Arbol de levas 51.04401-5088.jpg'),
(26, 'Balancines admision/escape', 'c', 3.00, 4, '../imagenes/Balancines admision escape 51.04201-6195.jpeg'),
(27, 'Carter', 'c', 3.00, 5, '../imagenes/Carter 51.05800-6370.jpeg'),
(28, 'Empaque de carter', 'c', 3.00, 5, '../imagenes/Empaque de carter 51.05904-0212.JPG'),
(29, 'Bomba de aceite', 'c', 3.00, 5, '../imagenes/Bomba de aceite 51.05103-5036.JPG'),
(30, 'Multiples de escape', 'e', 5.00, 6, '../imagenes/Multiples de escape 51.08102-0116.PNG'),
(31, 'Base del turbo', 'e', 5.00, 6, '../imagenes/Base del turbo 51.08102-0634.jpg'),
(32, 'Empaques del escape', 'e', 5.00, 6, '../imagenes/Empaques de escape 51.08901-0315.jpg'),
(33, 'Tuberia de escape', '51.09411-5164', 0.00, 6, '../imagenes/Tuberia de escape 51.09411-5164.PNG'),
(34, 'Silenciador de escape', 'E', 5.00, 6, '../imagenes/Silenciador de escape 81.15101-0333.jpeg'),
(35, 'Espiral de escape', 'e', 5.00, 6, '../imagenes/Espiral de escape 06.11222-6507.PNG'),
(36, 'Abrazaderas de escape', 'e', 5.00, 6, '../imagenes/Abrazaderas de escape 81.97420-0152.JPG'),
(37, 'Intercooler', 'f', 6.00, 7, '../imagenes/Intercooler 81.06130-0231.JPG'),
(38, 'Radiador de refrigerante', 'f', 6.00, 7, '../imagenes/Radiador de refrigerante 81.06101-6519.jpg'),
(39, 'Sensor del nivel de refrigerante', 'f', 6.00, 7, '../imagenes/Sensor del nivel de refrigerante 81.27421-0232.jpeg'),
(40, 'Cubierta del ventilador', 'f', 6.00, 7, '../imagenes/Cubierta del ventilador 81.06620-0187.PNG'),
(41, 'Ventilador del embrague', 'f', 6.00, 7, '../imagenes/Ventilador con embrague 51.06600-7052.jpg'),
(42, 'Torre de ventilador', 'f', 6.00, 7, '../imagenes/Torre de ventilador camiones man 51.06609-5012.jpg'),
(43, 'Soporte del radiador', 'f', 6.00, 7, '../imagenes/Soporte de radiadorr 81.06225-0005.jpeg'),
(44, 'Tuberia de refrigerante', 'f', 6.00, 7, '../imagenes/Tuberia de refrigerante 81.96301-0961.jpeg'),
(45, 'Manguera de Intercooler ', 'f', 6.00, 7, '../imagenes/Manguera de Intercooler 81.96301-0900.jpeg'),
(46, 'Turbo compresor BORGWARNER ', 'f', 6.00, 8, '../imagenes/Turbocompresor BORGWARNER 51.09100-7821.jpg'),
(47, 'Juego de empaques de turbo', '7', 7.00, 8, '../imagenes/Juego de empaques de turbo 51.08901-0209.JPG'),
(48, 'Esparragos y tuercas', 'g', 7.00, 8, '../imagenes/Esparragos y tuercas 51.90210-0017.JPG'),
(49, 'Tuberia de alta presiÃ³n', 'g', 7.00, 8, '../imagenes/Tuberia de alta presiÃ³n51.05703-5350.jpeg'),
(50, 'TuberÃ­a de retorno', 'g', 7.00, 8, '../imagenes/Tuberia de retorno 51.05703-5395.PNG'),
(51, 'Tanque de combustible', 'h', 7.00, 9, '../imagenes/Tanque de combustible 81.12201-5690.jpg'),
(52, 'Soportes de tanque de combustible', 'h', 8.00, 9, '../imagenes/Soportes de tanque de combustible 81.97460-6058.jpg'),
(53, 'Racor filtro de combustible', 'h', 8.00, 9, '../imagenes/Racor filtro de combustible 81.12501-6085.jpg'),
(56, 'Unidad de alimentaciÃ³n', 'h', 8.00, 9, '../imagenes/Unidad de alimentaciÃ³n 81.27203-6020.jpg'),
(55, 'Inyectores D20/D26/D28', 'h', 8.00, 9, '../imagenes/Inyectores D20 D26 D28 51.10100-6127.jpg'),
(57, 'Tuberias de inyecciÃ³n de alta', 'h', 8.00, 9, '../imagenes/Tuberias de inyecciÃ³n de alta 51.10304-0318.jpeg'),
(58, 'Riel comÃºn', 'H', 8.00, 9, '../imagenes/Riel comun (common rail) 51.10311-6082.PNG'),
(59, 'Sensor de presiÃ³n del riel comÃºn', 'H', 8.00, 9, '../imagenes/Sensor de presiÃ³n del riel comun 51.27421-0229.JPG'),
(60, 'Bomba inyectora de alta presiÃ³n', 'h', 8.00, 9, '../imagenes/Bomba inyectora de alta presiÃ³n 51.11103-7846.jpg'),
(61, 'Modulo de inyecciÃ³n', 'h', 8.00, 9, '../imagenes/Modulo de inyecciÃ³n 51.25803-7893.jpg'),
(62, 'Carcasa filtros de combustible', 'h', 8.00, 9, '../imagenes/Carcasa filtros de combustible 51.12501-7313.jpg'),
(63, 'Tuberias de combustible', 'h', 8.00, 9, '../imagenes/Tuberias de combustible 51.12305-5364.jpg'),
(64, 'Ejes', '0', 0.00, 11, '../imagenes/ejes 81.32206-0130.jpg'),
(65, 'Disco de embrague', '0', 0.00, 10, '../imagenes/disco de embrague 81.30301-0630.jpg'),
(66, 'Engranaje planetario', '0', 0.00, 12, '../imagenes/Engranaje planetario 81.37501-0041.jpeg'),
(67, 'Plato de embrague', '0', 0.00, 10, '../imagenes/Plato de embrague 81.30305-0229.PNG'),
(68, 'Rodamiento de embrague', '0', 0.00, 10, '../imagenes/Rodamiento de embrague 81.30550-0116.PNG'),
(69, 'Horquilla de embrague', '0', 0.00, 10, '../imagenes/Horquilla de embrague 81.32411-0007.PNG'),
(70, 'Reservorio de lÃ­quido de embrague', '0', 0.01, 10, '../imagenes/Reservorio de lÃ­quido de embrague 81.51501-6050.PNG'),
(71, 'Cilindro maestro', '81.30715-6152', 0.00, 10, '../imagenes/Cilindro maestro 81.30715-6152.PNG'),
(72, 'Booster de embrague', '81.30725-6116\r\n', 0.00, 10, '../imagenes/Booster de embrague 81.30725-6116.PNG'),
(73, 'PiÃ±ones', '81.32302-0033\r\n', 0.00, 11, '../imagenes/PiÃ±ones 81.32302-0033.PNG'),
(74, 'Rodamientos ', 'ninguno', 0.00, 11, '../imagenes/Rodamientos.PNG'),
(75, 'Collarines (todas las marchas)', '81.32402-0197\r\n', 0.00, 11, '../imagenes/Collarines (todas las marchas) 81.32402-0197.PNG'),
(76, 'Sincronizados (todas las marchas)', '81.32420-0230\r\n', 0.00, 11, '../imagenes/Sincronizados (todas las marchas) 81.32420-0230.PNG'),
(77, 'Cuerpo de embrague (todas las marchas)', '81.32425-0092\r\n', 0.00, 11, '../imagenes/Cuerpo de embrague (todas las marchas) 81.32425-0092.PNG'),
(78, 'Empaques', '81.32903-0262', 0.00, 11, '../imagenes/Empaques 81.32903-0262.PNG'),
(79, 'Carcasas', '81.32101-0311\r\n', 0.00, 11, '../imagenes/Carcasas 81.32101-0311.PNG'),
(80, 'Servo shift', '81.32690-6058\r\n', 0.00, 11, '../imagenes/Servo shift 81.32690-6058.PNG'),
(81, 'Bomba de aceite ', '82.32101-0021\r\n', 0.00, 11, '../imagenes/Bomba de aceite 82.32101-0021.PNG'),
(82, 'Cable de caja de cambios', '81.32655-6311\r\n', 0.00, 11, '../imagenes/Cable de caja de cambios 81.32655-6311.PNG'),
(84, 'Estator y rotor', '82.32001-0004 81.55207-0004\r\n', 0.00, 12, '../imagenes/Estator y rotor 82.32001-0004 81.55207-0004.PNG'),
(85, 'Engranajes', '81.55201-0005\r\n', 0.00, 12, '../imagenes/Engranajes 81.55201-0005.PNG'),
(86, 'Empaques', '81.55201-0004\r\n', 0.00, 12, '../imagenes/Empaques 81.55201-0004.PNG'),
(87, 'Filtro de retarder', '81.33215-0002\r\n', 0.00, 12, '../imagenes/Filtro de retarder 81.33215-0002.PNG'),
(88, 'Mando control de vÃ¡lvulas', '81.25935-0042\r\n', 0.00, 12, '../imagenes/Mando control de vÃ¡lvulas 81.25935-0042.PNG'),
(89, 'Intercambiador tÃ©rmico', '81.32560-0071\r\n', 0.00, 12, '../imagenes/Intercambiador tÃ©rmico 81.32560-0071.PNG'),
(90, 'Cilindro Dual', '81.32638-0037\r\n', 0.00, 12, '../imagenes/Cilindro Dual 81.32638-0037.PNG'),
(91, 'Cilindro Doble', '81.32638-0052\r\n', 0.00, 12, '../imagenes/Cilindro Doble 81.32638-0052.PNG'),
(92, 'Cardan principal armado', '81.39325-6156\r\n', 0.00, 13, '../imagenes/Cardan principal armado 81.39325-6156.PNG'),
(93, 'Cardan secundario armado', '81.39324-6068\r\n', 0.00, 13, '../imagenes/Cardan secundario armado 81.39324-6068.PNG'),
(94, 'Crucetas', '81.39374-6003\r\n', 0.00, 13, '../imagenes/Crucetas 81.39374-6003.PNG'),
(95, 'Kit de reparaciÃ³n de diferencial', '81.35107-6044\r\n', 0.00, 14, '../imagenes/Kit de reparaciÃ³n de diferencial 81.35107-6044.PNG'),
(96, 'Cono y corona', '81.35199-6658\r\n', 0.00, 14, '../imagenes/Cono y corona 81.35199-6658.PNG'),
(97, 'Arandelas de diferencial', '81.35613-0043\r\n', 0.00, 14, '../imagenes/Arandelas de diferencial 81.35613-0043.PNG'),
(98, 'Engranajes planetarios y satelites', '81.35106-0036\r\n', 0.00, 14, '../imagenes/Engranajes planetarios y satelites 81.35106-0036.PNG'),
(99, 'Rodamientos', '06.32489-0119\r\n', 0.00, 14, '../imagenes/Rodamientos 06.32489-0119.PNG'),
(100, 'Brida de corona y de caja', '81.39115-5106\r\n', 0.00, 14, '../imagenes/Brida de corona y de caja 81.39115-5106.PNG'),
(101, 'Kit de reparaciÃ³n de planetarios', '81.35112-6023\r\n', 0.00, 15, '../imagenes/Kit de reparaciÃ³n de planetarios 81.35112-6023.PNG'),
(102, 'Soporte de planetarios', '81.35114-0134\r\n', 0.00, 15, '../imagenes/Soporte de planetarios 81.35114-0134.PNG'),
(103, 'Retenedores', '06.56341-4254\r\n', 0.00, 15, '../imagenes/Retenedores 06.56341-4254.PNG'),
(104, 'Cubo de campana', '81.35114-0135\r\n', 0.00, 15, '../imagenes/Cubo de campana 81.35114-0135.PNG'),
(105, 'Rueda dentada', '81.35111-0026\r\n', 0.00, 15, '../imagenes/Rueda dentada 81.35111-0026.PNG'),
(106, 'Martillo freno de arbol de leva', '81.50301-0112\r\n', 0.00, 16, '../imagenes/Martillo freno de arbol de leva 81.50301-0112.PNG'),
(107, 'Rache delantero/posterior', '81.50610-6266\r\n', 0.00, 16, '../imagenes/Rache delantero-posterior 81.50610-6266.PNG'),
(108, 'Pulmon de freno', '81.50410-6551\r\n', 0.00, 16, '../imagenes/Pulmon de freno 81.50410-6551.PNG'),
(109, 'Portafrenos', '81.50202-0127\r\n', 0.00, 16, '../imagenes/Portafrenos 81.50202-0127.PNG'),
(110, 'Tambor de freno', '81.50110-0144\r\n', 0.00, 16, '../imagenes/Tambor de freno 81.50110-0144.PNG'),
(111, 'Resorte de zapatas', '81.97610-0317\r\n', 0.00, 16, '../imagenes/Resorte de zapatas 81.97610-0317.PNG'),
(112, 'Zapatas', '81.50201-6223\r\n', 0.00, 16, '../imagenes/Zapatas 81.50201-6223.PNG'),
(113, 'Freno de mÃ¡quina ensamblado', '51.15201-6174\r\n', 0.00, 17, '../imagenes/Freno de mÃ¡quina ensamblado 51.15201-6174.PNG'),
(114, 'Cilindro de aire', '81.15701-6124\r\n', 0.00, 17, '../imagenes/Cilindro de aire 81.15701-6124.PNG'),
(115, 'Compresor de aire', '51.54100-7121\r\n', 0.00, 18, '../imagenes/Compresor de aire 51.54100-7121.PNG'),
(116, 'Kit reparacion de compresor de aire', '51.54100-6049\r\n', 0.00, 18, '../imagenes/Kit reparacion de compresor de aire 51.54100-6049.PNG'),
(117, 'Valvula protectora 4 circuitos', '81.52151-6098\r\n', 0.00, 18, '../imagenes/Valvula protectora 4 circuitos 81.52151-6098.PNG'),
(118, 'Tanque de aire', '81.51401-0241\r\n', 0.00, 18, '../imagenes/Tanque de aire 81.51401-0241.PNG'),
(119, 'Valvula del secador de aire', '81.52102-6101\r\n', 0.00, 18, '../imagenes/Valvula del secador de aire 81.52102-6101.PNG'),
(120, 'Sensor de la temperatura de gases de escape', '81.27421-0264\r\n', 0.00, 19, '../imagenes/Sensor de la temperatura de gases de escape 81.27421-0264.PNG'),
(121, 'Sensor de temperatura del Retarder', '81.27420-0101\r\n', 0.00, 19, '../imagenes/Sensor de temperatura del Retarder 81.27420-0101.PNG'),
(122, 'Sensor del volante de inercia', '51.27120-0014\r\n', 0.00, 19, '../imagenes/Sensor del volante de inercia 51.27120-0014.PNG'),
(123, 'Sensor de presiÃ³n del turbo', '51.27421-0216\r\n', 0.00, 19, '../imagenes/Sensor de presiÃ³n del turbo 51.27421-0216.PNG'),
(124, 'Sonda de nivel lÃ­quido para autochequeo', '51.27421-0280\r\n', 0.00, 19, '../imagenes/Sonda de nivel lÃ­quido para autochequeo 51.27421-0280.PNG'),
(125, 'Sensor desgaste zapatas', '81.25937-6041\r\n', 0.00, 19, '../imagenes/Sensor desgaste zapatas 81.25937-6041.PNG'),
(126, 'Sensor RPM disco', '81.27120-6182\r\n', 0.00, 19, '../imagenes/Sensor RPM disco 81.27120-6182.PNG'),
(127, 'Sensor temperatura calefacciÃ³n', '81.27420-0098\r\n', 0.00, 19, '../imagenes/Sensor temperatura calefacciÃ³n 81.27420-0098.PNG'),
(128, 'Sistema elevavidrios electrico izquierdo', '81.62645-6055\r\n', 0.00, 20, '../imagenes/Sistema elevavidrios electrico izquierdo 81.62645-6055.PNG'),
(129, 'Sistema elevavidrios electrico derecho', '81.62645-6054\r\n', 0.00, 20, '../imagenes/Sistema elevavidrios electrico derecho 81.62645-6054.PNG'),
(130, 'Manija apertura interna derecha', '81.62641-5011\r\n', 0.00, 21, '../imagenes/Manija apertura interna derecha 81.62641-5011.PNG'),
(131, 'Manija apertura interna izquierda', '81.62641-5010\r\n', 0.00, 21, '../imagenes/Manija apertura interna izquierda 81.62641-5010.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `subcategoria_id` int(11) NOT NULL,
  `nombre_subcategoria` varchar(100) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`subcategoria_id`, `nombre_subcategoria`, `categoria_id`) VALUES
(2, 'ADMISION DE AIRE', 1),
(3, 'BLOC', 1),
(4, 'CABEZOTE', 1),
(5, 'CARTER', 1),
(6, 'ESCAPE', 1),
(7, 'REFRIGERACION', 1),
(8, 'TURBO', 1),
(9, 'ALIMENTACION', 1),
(10, 'EMBRAGUE', 3),
(11, 'CAJA DE CAMBIOS ZF', 3),
(12, 'RETARDER', 3),
(13, 'CARDAN', 3),
(14, 'DIFERENCIALES', 3),
(15, 'CATALINAS', 4),
(16, 'FRENOS DE TAMBOR', 4),
(17, 'FRENO DE MAQUINA', 4),
(18, 'AIRE COMPRIMIDO', 5),
(19, 'SENSORES', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoriascabina`
--

CREATE TABLE `subcategoriascabina` (
  `subcategoria_id` int(11) NOT NULL,
  `nombre_subcategoria` varchar(100) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `subcategoriascabina`
--

INSERT INTO `subcategoriascabina` (`subcategoria_id`, `nombre_subcategoria`, `categoria_id`) VALUES
(1, 'SISTEMA ELEVAVIDRIOS', 1),
(2, 'APERTURA', 1),
(3, 'CUBIERTAS', 1),
(4, 'BISAGRAS', 1),
(5, 'TAPICERIA', 1),
(6, 'CAPOT FRONTAL', 2),
(7, 'ESCALON INFERIOR', 3),
(8, 'ESCALON SUPERIOR', 3),
(9, 'ELEVACION DE CABINA', 4),
(10, 'SUSPENSION DE CABINA', 5),
(11, 'VIDRIOS', 6),
(12, 'RETROVISORES', 7),
(13, 'GUARDABARROS', 8),
(14, 'SENSORES', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoriasmecanica`
--

CREATE TABLE `subcategoriasmecanica` (
  `subcategoria_id` int(11) NOT NULL,
  `nombre_subcategoria` varchar(100) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `subcategoriasmecanica`
--

INSERT INTO `subcategoriasmecanica` (`subcategoria_id`, `nombre_subcategoria`, `categoria_id`) VALUES
(2, 'ADMISION DE AIRE', 1),
(3, 'BLOC', 1),
(4, 'CABEZOTE', 1),
(5, 'CARTER', 1),
(6, 'ESCAPE', 1),
(7, 'REFRIGERACION', 1),
(8, 'TURBO', 1),
(9, 'ALIMENTACION', 1),
(10, 'EMBRAGUE', 3),
(11, 'CAJA DE CAMBIOS ZF', 3),
(12, 'RETARDER', 3),
(13, 'CARDAN', 3),
(14, 'DIFERENCIALES', 3),
(15, 'CATALINAS', 4),
(16, 'FRENOS DE TAMBOR', 4),
(17, 'FRENO DE MAQUINA', 4),
(18, 'AIRE COMPRIMIDO', 5),
(19, 'SENSORES', 6),
(20, 'SISTEMA ELEVAVIDRIOS', 7),
(21, 'APERTURA', 7),
(22, 'CUBIERTAS', 7),
(23, 'BISAGRAS', 7),
(24, 'TAPICERIA', 7),
(25, 'CAPOT FRONTAL', 8),
(26, 'ESCALON INFERIOR', 10),
(27, 'ESCALON SUPERIOR', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `categoriascabina`
--
ALTER TABLE `categoriascabina`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `categoriasmecanica`
--
ALTER TABLE `categoriasmecanica`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD PRIMARY KEY (`repuesto_id`),
  ADD KEY `subcategoria_id` (`subcategoria_id`);

--
-- Indices de la tabla `repuestoscabina`
--
ALTER TABLE `repuestoscabina`
  ADD PRIMARY KEY (`repuesto_id`),
  ADD KEY `subcategoria_id` (`subcategoria_id`);

--
-- Indices de la tabla `repuestosmecanica`
--
ALTER TABLE `repuestosmecanica`
  ADD PRIMARY KEY (`repuesto_id`),
  ADD KEY `subcategoria_id` (`subcategoria_id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`subcategoria_id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `subcategoriascabina`
--
ALTER TABLE `subcategoriascabina`
  ADD PRIMARY KEY (`subcategoria_id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `subcategoriasmecanica`
--
ALTER TABLE `subcategoriasmecanica`
  ADD PRIMARY KEY (`subcategoria_id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `categoriascabina`
--
ALTER TABLE `categoriascabina`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categoriasmecanica`
--
ALTER TABLE `categoriasmecanica`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  MODIFY `repuesto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT de la tabla `repuestoscabina`
--
ALTER TABLE `repuestoscabina`
  MODIFY `repuesto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `repuestosmecanica`
--
ALTER TABLE `repuestosmecanica`
  MODIFY `repuesto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `subcategoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `subcategoriascabina`
--
ALTER TABLE `subcategoriascabina`
  MODIFY `subcategoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `subcategoriasmecanica`
--
ALTER TABLE `subcategoriasmecanica`
  MODIFY `subcategoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

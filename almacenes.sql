-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2021 a las 09:07:31
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

drop database if exists Almacenes;
create database Almacenes;

use Almacenes;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `idAlmacen` int(11) NOT NULL,
  `lugar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`idAlmacen`, `lugar`) VALUES
(1, 'AlmacenAF'),
(2, 'AlmacenEF'),
(3, 'Almacen_Pabellon'),
(4, 'Pabellon'),
(5, 'Sala_Anexa_Pabellon'),
(6, 'Almacen_bicis'),
(7, 'Departamento'),
(8, 'Jaula'),
(9, 'Teka'),
(10, 'Move_Go'),
(11, 'Pabellon_Interior'),
(12, 'Aula_AF'),
(13, 'Armario_amm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idArticulo` int(11) NOT NULL,
  `idAlmacen` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `detalles` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idArticulo`, `idAlmacen`, `nombre`, `cantidad`, `detalles`) VALUES
(1, 1, 'Cuerdas', 7, '4 combas largas, una cuerdacorta, 2 sogas crossfit'),
(2, 1, 'Aletas de natacion (pares)', 4, 'Baldas'),
(3, 1, 'Apuntes de anatomia', 5, 'Formato transparencias 4 de transp, 1 azul'),
(4, 1, 'Arneses para uso', 15, 'baldas en caja de cart?n'),
(5, 1, 'Arneses viejos', 11, 'Bolsa en baldas'),
(6, 1, 'Aros de canasta', 4, 'baldas superiores'),
(7, 1, 'Baraja', 1, 'Balda / Caja juegos de mesa'),
(8, 1, 'Bid?n de piragua (5 l.)', 1, 'en baldas'),
(9, 1, 'Bolsa con tapones', 1, ''),
(10, 1, 'Boomerang de tres brazos', 4, 'en baldas'),
(11, 1, 'Botiqu?n', 1, 'Estuche r?gido'),
(12, 1, 'Brazo de maniqu? de PPAA', 2, 'Baldas'),
(13, 1, 'Cables de acero', 2, 'enrollados. Baldas'),
(14, 1, '', 1, 'caja con un transformador de 4,5 v y cable de alim'),
(15, 1, 'Caja con mascarillas de pl?stico', 5, 'en baldas. Para la RCP'),
(16, 1, 'Caja con tornillos presas y normales', 1, 'Baldas'),
(17, 1, 'Camaras de aire', 2, 'Armario beige'),
(18, 1, 'Cascos de escalada', 12, 'balda'),
(19, 1, 'Cintas escalada', 14, 'Caja pl?stico - 5 moradas 3 verdes 1 azul 3 blanca'),
(20, 1, 'Colchoneta inflable', 1, 'Color naranja / caja transparente'),
(21, 1, 'Collar?n', 1, 'Bolsa de maniqu?'),
(22, 1, 'Cordel fucsia', 1, 'Un rollo. Balda'),
(23, 1, 'Cordino (6-8mm), rollo', 1, '30 metros'),
(24, 1, 'Cuerdas de escalada viejas', 0, 'Bolsa azul ikea. No son para escalar: cuerdas y co'),
(25, 1, 'Cuerdas el?sticas. En bolsita', 2, 'Mochila virja verde. Balda'),
(26, 1, 'Cuerdas escalada para uso', 3, 'Baldas'),
(27, 1, 'Discos atletismo', 9, '5 de 1 kg y 4 de 500gr'),
(28, 1, 'Disipadores', 5, 'Baldas en bolsa verde repsol, (2 malos,3 ?ptimos)'),
(29, 1, 'Estuche de f?rulas hinchables', 1, 'Naranja.Cuatro f?rulas diferentes'),
(30, 1, 'Fichas de ajedrez', 2, 'Baldas. Fichas no verificadas / junto con tableros'),
(31, 1, 'Jabalinas de pl?stico', 4, 'Baldas'),
(32, 1, 'Jabalinas grandes', 2, 'de pie junto armario'),
(33, 1, 'Juego de Trivial', 1, 'Balda'),
(34, 1, 'Lote de RCP Little Family', 1, '3 maniqu?s, accesorios,alfo0mbrillas, bolsa de tra'),
(35, 1, 'Magnesera', 4, 'En bolsa'),
(36, 1, 'Maniqu? de PPAA', 1, 'baldas. En funda azul'),
(37, 1, 'Martillos de atletismo bal?n medicinal', 5, 'balda'),
(38, 1, 'Martillos de atletismo de goma', 2, 'balda'),
(39, 1, 'M?scaras de maniqu? RCP', 3, 'Bolsa Azul \"Laerdal\"\r'),
(40, 1, 'Mazas de malabares', 69, 'Baldas. 30 peque?as en TEKA'),
(41, 1, 'Mochila ELK escalada', 0, 'Mosquetones, grirgri, mosquetones de seguridad, oc'),
(42, 1, 'Muletas', 2, ''),
(43, 1, 'Pa?uelos verdes', 9, 'Son como servilletas triangulares / caja pl?stico '),
(44, 1, 'Pastillas de hockey', 36, '3 moradas y 2 fieltro (bolsa Amarilla) balda'),
(45, 1, 'Patines en l?nea', 4, 'en dos parejas, n? 44 y 41'),
(46, 1, 'Pies de gato (pares)', 7, 'baldas en bolsa verde'),
(47, 1, 'Raquetas de nieve (pares)', 2, 'Fundas blancas - Baldas'),
(48, 1, 'Red de voley-playa', 4, '2 funda negra y 2 funda azul'),
(49, 1, 'Red rosa floorball', 1, 'Baldas'),
(50, 1, 'Reposabrazos de silla de ruedas', 2, 'Armario beige'),
(51, 1, 'Reposapi?s de silla de ruedas', 4, 'Acompa?ados de torniller?a. Armario beige'),
(52, 1, 'Rodilleras de patinaje', 4, 'baldas'),
(53, 1, 'Segmentos para f?rulas', 2, 'armario beige, Balda, funda azul'),
(54, 1, 'Segmentos para f?rulas', 63, 'varios colores. En bolsa negra'),
(55, 1, 'Segmentos para f?rulas', 40, 'Bolsa negra'),
(56, 1, 'Segmentos para f?rulas', 12, 'Bolsa negra'),
(57, 1, 'Segmentos para f?rulas', 19, 'en varios colores'),
(58, 1, 'Sticks de floorball Vision', 14, 'funda roja'),
(59, 1, 'Sticks de hockey hierba', 26, 'en funda roja'),
(60, 1, 'Tabla de inmovilizaci?n (camilla)', 1, 'roja'),
(61, 1, 'Tableros de ajedrez', 6, 'Balda'),
(62, 1, 'Taladro Makita', 1, 'Balda. Estuche r?gido verde'),
(63, 1, 'Testigos de atletismo', 17, 'Balda / En caja'),
(64, 1, 'Tienda de campa?a', 2, 'en baldas'),
(65, 1, 'Tren inferior de maniqu? de PPAA', 1, 'Baldas'),
(66, 1, 'Trivial', 1, 'Baldas / Caja Juegos de mesa'),
(67, 1, 'Tuber?as grises en segmentos', 35, 'para hacer porter?as/vallas'),
(68, 1, 'Vendajes adhesivos el?sticos', 19, 'En caja carton blanco'),
(69, 1, 'Vendajes no el?sticos', 22, 'En caja de carton blanca'),
(70, 1, 'Cintas para reuni?nes escalada', 14, 'En caja pl?stico (5 moradas, 3 verdes, 3 blancas, '),
(71, 12, 'Rack de pres banca/sentadilla', 1, ''),
(72, 12, 'Discos para rack', 12, '10 kg (2), 5 kg (4), 4kg (2), 1.5 kg (2), 0,25 kg '),
(73, 12, 'Banco pres banca', 1, ''),
(74, 12, 'Barra fitness', 2, ''),
(75, 12, 'Mu?eco esqueleto humano', 1, ''),
(76, 12, 'Gomas fitness', 5, '1 verde fina, 2 naranjas y 2 verdes anchas'),
(77, 12, 'Pelotas Hockey', 14, ''),
(78, 12, 'Goni?metro', 2, 'Caja pl?stico transparente'),
(79, 12, 'Bota ortop?dica', 1, 'Caja pl?stico transparente'),
(80, 12, 'Saco cuerdas grandes', 1, 'Bolsa azul y blanca / soga toria -subir cuerda'),
(81, 12, 'L?mpara de carburo', 2, 'Saco peque?o viejo'),
(82, 1, 'Varillas de Orientacion', 25, 'VARILLAS MET?LICAS (FALTA ACONDICIONAR)'),
(83, 3, 'Globo multicolor gigante', 1, ''),
(84, 3, 'Monociclos', 6, ''),
(85, 3, 'Puntales de obra', 7, ''),
(86, 3, 'Plinto', 1, ''),
(87, 3, 'Carro portacolchonetas', 1, 'Deteriorado 1 poco en la base. Rueda se traba.'),
(88, 3, 'Carros porta step', 2, ''),
(89, 3, 'Steps', 27, ''),
(90, 3, 'Antideslizantes de step', 10, ''),
(91, 3, 'Bases de step', 111, ''),
(92, 3, 'Fitball peque?os', 16, ''),
(93, 3, 'Fitball medianos', 7, ''),
(94, 3, 'Fitball grandes azules', 7, ''),
(95, 3, 'Bosus', 11, '2 bien. Resto deteriorado.'),
(96, 3, 'Quitamiedos', 5, '3 de tela y 2 de pl?stico'),
(97, 3, 'Colchonetas de gimnasia', 14, '2 estado regular'),
(98, 3, 'Esterillas sin agujeros', 7, 'Estado regular'),
(99, 3, 'Mesas de estudiante', 8, '1 separada en 2 piezas'),
(100, 3, 'Televisi?n con soporte con ruedas', 1, ''),
(101, 3, 'Silla estudiante', 1, ''),
(102, 3, 'Mando a distancia tele', 1, ''),
(103, 3, 'Cable VGA', 1, 'Junto con el mando'),
(104, 2, 'Antifaces Disc.Visual', 15, '2 vision reducida'),
(105, 2, 'aros de colores', 1, 'azul, colgado'),
(106, 2, 'aros de colores peque?os', 3, ''),
(107, 2, 'aros de malabares', 29, 'En TEKA Sept y Octubre'),
(108, 2, 'aros medianos ', 1, 'colgados'),
(109, 2, 'aros negros grandes', 11, 'colgados'),
(110, 2, 'Balones goma espuma', 14, 'cajon verde metalico'),
(111, 2, 'Balones sin clasificar', 27, 'cubo grande de basura'),
(112, 2, 'Balones RUGBY', 11, 'Mochila ELK azul'),
(113, 2, 'Bandas rosas con asa', 21, 'En armario de madera'),
(114, 2, 'Ba?adores piscina', 2, 'Talla s, color naranja, en caja piscina compe'),
(115, 2, 'Base bate in tee', 1, 'Falta la base'),
(116, 2, 'bases de b?isbol ', 4, 'Arriba armario metalico'),
(117, 2, 'Bate de criquet', 1, 'estanter?a metal'),
(118, 2, 'bates b?isbol ', 8, 'estanter?a metal, de varios tipos y estados'),
(119, 2, 'bola de hockey', 1, 'en armario de madera'),
(120, 2, 'Bolas de beisbol y softball', 22, 'estanter?a metal'),
(121, 2, 'Bolas de espuma arcoiris', 6, ''),
(122, 2, 'Bolas de espuma peque?os', 3, ''),
(123, 2, 'Bolas de lanz.peso', 7, '2 (1kg), 3 (3kg), 1 (2kg), 1 (4kg),Armario madera'),
(124, 2, 'Bolas de petanca ', 15, 'armario madera( 2 juegos profesionales, el resto j'),
(125, 2, 'Bolas Malabares', 57, '1 Botes x 30 y 1 bote x 27 , Han robado 44 pelotas'),
(126, 2, 'bolas petanca', 15, 'armario madera'),
(127, 2, 'bomba de hinchar de pie', 1, ''),
(128, 2, 'Boomerang de tres brazos', 7, 'armario madera'),
(129, 2, 'Caballetes', 18, 'alguno da?ado'),
(130, 2, 'cariocas', 12, 'caj?n met?lico'),
(131, 2, 'carro de transporte', 1, 'armario de madera'),
(132, 2, 'cascos de beisbol', 2, 'armario madera'),
(133, 2, 'chisteras', 2, 'armario met?lico'),
(134, 2, 'churros de piscina', 20, 'cubo azul'),
(135, 2, 'cilindros de foam para indoorboard', 5, 'baldas blancas'),
(136, 2, 'cilindros de pvc para indoorboard', 9, 'baldas blancas'),
(137, 2, 'cinta m?trica ', 2, 'en armario de madera'),
(138, 2, 'C?rculos elasticos ', 10, 'encima del armario met?lico'),
(139, 2, 'combas individual', 50, ''),
(140, 2, 'combas largas', 22, ''),
(141, 2, 'combas plastico', 43, '25 nuevas'),
(142, 2, 'Compresor', 1, ''),
(143, 2, 'Cono naranja tr?fico ', 1, ''),
(144, 2, 'Conos medianos', 33, ''),
(145, 2, 'Conos naranjas medianos', 6, ''),
(146, 2, 'cordel de raquetas de b?dminton', 5, 'armario de madera estuche con herramienta'),
(147, 2, 'di?bolos ', 30, '2 palos sin di?bolos, 8 palos sin cuerda. Caj?n me'),
(148, 2, 'discos de hockey', 9, '6 pastillas negras y 3 de iniciaci?n, en armario d'),
(149, 2, 'Escalera psicomotricidad', 4, 'Caj?n met?lico, Estan en bolsa de pabell?n Interio'),
(150, 2, 'escaleta met?lica', 2, 'armario de madera'),
(151, 2, 'frisbees', 44, '12 trasladados temporalmente al P. Interior'),
(152, 2, 'Gafas nataci?n', 3, 'En caja piscina compe'),
(153, 2, 'gomas de dominadas (rojas)', 10, 'en armario de madera'),
(154, 2, 'Gomas el?sticas', 23, '13 verdes 10 rojas (colgadas en donde los aros)'),
(155, 2, 'Gomas negras para soportr (pares)', 13, 'cubo grande de basura'),
(156, 2, 'Gorros nataci?n federaci?n C?ntabra', 3, ''),
(157, 2, 'guantes beisbol', 13, ''),
(158, 2, 'Indiacas', 16, '16 completa, 5 sin pluma'),
(159, 2, 'Indoorboard (tablas de equilibrio)', 5, 'balda estanter?a met?lica'),
(160, 2, 'infladores port?tiles manuales', 3, 'color azul, rojo y fosforito armario'),
(161, 2, 'Jabalina gomaespuma', 1, 'Falta un ala'),
(162, 2, 'juegos petanca', 3, 'armario madera, dos profesionales y 1 de pl?stico '),
(163, 2, 'ladrillos psicomotricidad', 3, 'En cubo azul'),
(164, 2, 'lastres red de volley', 2, 'en armario de madera'),
(165, 2, 'Lycra nataci?n/surf', 1, 'En caja piscina compe'),
(166, 2, 'mancuernas 1,5Kg', 20, 'En el portamancuernas'),
(167, 2, 'mancuernas 1Kg', 14, 'En el portamancuernas'),
(168, 2, 'mancuernas 2Kg', 19, 'En el portamancuernas'),
(169, 2, 'mancuernas 3Kg', 2, 'En el portamancuernas'),
(170, 2, 'm?scara  protector b?isbol ', 1, ''),
(171, 2, 'material l?dico', 0, 'globos y canicas, cubeta, caja de pl?stico doble, '),
(172, 2, 'Palas de p?del', 18, 'armario met?lico'),
(173, 2, 'palos de malabares (manos)', 33, 'caj?n'),
(174, 2, 'palos de malabares (palo libre)', 18, 'caj?n'),
(175, 2, 'Palos lacrosse', 18, 'revisar su estado(contenedor basura)'),
(176, 2, 'Palos mazaball', 16, 'caj?n verde madera'),
(177, 2, 'Pa?uelos malabares', 84, 'bote rojo. Arriba armario metal'),
(178, 2, 'paraca?das', 2, 'armario met?lico'),
(179, 2, 'pelotas de tenis', 14, 'En cubo amarillo'),
(180, 2, 'pelotas floorball', 37, 'bote pl?stico  blanco, Traslado temporal a P. Inte'),
(181, 2, 'pelucas', 5, 'de payaso, una morena, armario beige'),
(182, 2, 'percha cuelga-aros', 1, 'sin colgar a?n '),
(183, 2, 'peto protector de besibol', 1, 'estanter?a metal'),
(184, 2, 'Petos amarillos ', 5, 'estanter?a metal'),
(185, 2, 'Petos amarillos fluor', 10, 'estanter?a metal (-5 unidades @)'),
(186, 2, 'Petos ambar', 28, 'estanter?a metal (-5 unidades @)'),
(187, 2, 'Petos azules', 20, 'estanter?a metal (-5 unidades @)'),
(188, 2, 'Petos morados', 8, 'estanter?a metal'),
(189, 2, 'Petos naranjas', 19, 'estanter?a metal (-5 unidades @)'),
(190, 2, 'Petos negros', 12, 'estanter?a metal (-5 unidades @)'),
(191, 2, 'Petos rojos', 33, 'estanter?a metal (-5 unidades @)'),
(192, 2, 'Petos varios colores', 5, 'estanter?a metal'),
(193, 2, 'Picas de 2 metros', 22, 'colocadas en vertical'),
(194, 2, 'picas de pl?stico', 19, 'cubo rojo'),
(195, 2, 'Picas Slalom S.R.', 14, 'Las tiene Chiki para pintarlas'),
(196, 2, 'platos chinos', 32, 'Solo hay 13 palos, armario met?lico'),
(197, 2, 'raquetas de b?dminton', 40, 'en bolsa-maleta azul'),
(198, 2, 'Raquetas de shuttlebal', 4, 'Colgadas en sus fundas.'),
(199, 2, 'Raquetas de tenis', 9, 'colgadas'),
(200, 2, 'red canasta', 1, 'cajon verde metal'),
(201, 2, 'Red de badminton', 2, 'cajon verde metal'),
(202, 2, 'red de voleibol', 1, 'cajon verde metal'),
(203, 2, 'red porteria floorball', 1, 'cajon verde metal'),
(204, 2, 'redes porteria futbol', 2, 'cajon verde metal'),
(205, 2, 'Repuesto cordaje Badminton', 5, 'en armario de madera'),
(206, 2, 'semiesferas lastradas', 6, 'en armario de madera'),
(207, 2, 'setas redondas', 49, 'armario met?lico (abajo)'),
(208, 2, 'Setas triangulares', 62, ''),
(209, 2, 'Silbato de mano', 1, 'Cesta de mimbre de cron?metros. Color rojo'),
(210, 2, 'Slackline', 1, 'armario de madera (esquina inferior derecha)'),
(211, 2, 'Slacklines', 1, 'Armario madera'),
(212, 2, 'soporte de mancuernas', 1, '6 rojas 2 verdes'),
(213, 2, 'Sticks cortos', 10, '6 rojos 4 verdes'),
(214, 2, 'Sticks floorball rojos', 19, 'En cubo de basura. Revisar estado,Traslado tempora'),
(215, 2, 'Sticks floorball verdes', 33, 'En cubo de basura. Revisar estado, 6 sticks, trasl'),
(216, 2, 'Tablas con ruedas', 3, '3 madera grandes '),
(217, 2, 'Tableros de ping pong ', 12, '10 medios campos'),
(218, 2, 'Tacos de madera', 8, 'en armario de madera'),
(219, 2, 'Telas de colores para lanzar', 35, 'Caja blanca. Arriba armario metalico'),
(220, 2, 'tijas de monociclos', 6, 'caj?n met?lico'),
(221, 2, 'vallas atletismo ', 6, '5 metalicas 1roja de pl?stico'),
(222, 2, 'Vallas azules plegables', 10, 'De cart?n,  plegables. Encima estanteria metal'),
(223, 2, 'v?vulas y agujas de inflar', 3, 'en armario de madera'),
(224, 2, 'volantes badminton', 30, 'En armario de madera'),
(225, 2, 'Alargadera', 1, 'estanter?a met?lica '),
(226, 2, 'paraca?das lastres', 2, 'baldas de madera, a la derecha'),
(227, 2, 'plato de bohler', 1, 'estanter?a met?lica '),
(228, 2, 'bolsa azul elksport', 5, 'metidas en una bolsa azul elk'),
(229, 2, 'saca balones elksport', 2, 'metidas en una bolsa azul elk, color negra'),
(230, 2, 'bolsas balones', 6, 'metidas en el lateral de la bolsa azul elk'),
(231, 2, 'pala cantabra', 63, '22 viejas + 40 nuevas (1 peque?a de madera)'),
(232, 2, 'Palas peque?as de pl?stico', 8, ''),
(233, 2, 'Pelotitas peque?as ', 4, 'pelotas para jugar con las palas peque?as de pl?st'),
(234, 2, 'Pelotas de colores', 6, 'De dos formas diferentes'),
(235, 4, 'Bancos suecos', 7, ''),
(236, 4, 'Telas acrobacia', 5, ''),
(237, 4, 'Trapecio', 1, ''),
(238, 4, 'Reloj marcador', 1, ''),
(239, 4, 'Pizarra blanca', 1, 'Colgada pared'),
(240, 4, 'Borrador', 1, 'Pegado en pizarra'),
(241, 5, 'Altavoces bluetooh', 2, 'No tienen mucha potencia, M?s antiguos que los pun'),
(242, 5, 'Altavoces punker ', 5, 'Armario madera'),
(243, 5, 'Bancos suecos', 4, ''),
(244, 5, 'barras lastradas 2Kg', 16, ''),
(245, 5, 'barras lastradas 3Kg', 14, ''),
(246, 5, 'barras lastradas 5Kg', 5, ''),
(247, 5, 'Kettlebells', 11, 'Armario madera'),
(248, 5, 'Patas step (rojos)', 16, 'Armario madera arriba'),
(249, 5, 'pelotas tenis mesa', 32, 'bote blanco dentro caja mareial tenis de mesa'),
(250, 5, 'pelotas tenis mesa repuesto', 26, '20 en caja tenis de mesa 6 en paquete de pl?stico'),
(251, 5, 'Pizarra blanca ruedas', 1, 'con borrador'),
(252, 5, 'Raquetas Tenis de mesa', 21, 'caja tenis de mesa'),
(253, 5, 'RedesTenis de mesa', 15, '6 en buen estado'),
(254, 5, 'Step rojos', 10, 'Al fondo junto tatamis'),
(255, 5, 'Tablet Huawei', 5, 'Armario madera'),
(256, 5, 'Tablet Lenovo', 2, 'Armario madera'),
(257, 5, 'Tatami', 30, ''),
(258, 5, 'TRX', 25, '24 normales 1 m?s rango de movimiento. Armario pl?'),
(259, 5, 'tr?pode ', 6, 'Armario madera'),
(260, 6, 'Potro-soporte para bicis', 3, ''),
(261, 7, 'Alargadera roja', 1, 'En balda repuestos papeler?a'),
(262, 7, 'Altavoz Fonestar de mano', 0, 'Falta cargador'),
(263, 7, 'Altavoz portatil Fonestar grande', 1, '200W m?x, 40W RMS'),
(264, 7, 'Altavoz portatil Ibiza Sound', 1, ''),
(265, 7, 'Altavoz portatil Phonestar peque?o', 1, '100W m?x, 20W RMS'),
(266, 7, 'Cables jack y adpatadores', 0, 'En balda material TIC'),
(267, 7, 'Cables varios', 1, 'Bolsa en balda repuestos papeler?a'),
(268, 7, 'Cables varios', 1, 'En armario de madera marr?n'),
(269, 7, 'C?mara de video sony', 1, 'En balda material TIC'),
(270, 7, 'C?mara de video sumergible', 1, 'En balda material TIC'),
(271, 7, 'Ca??n Epson', 1, 'Probar si funciona, Armario de madera marr?n'),
(272, 7, 'Ca?on Sony', 1, 'cable RGB + adaptador HDI + Jack, Armario de mader'),
(273, 7, 'Cargador de bater?a externo', 6, 'En armario de madera marr?n'),
(274, 7, 'Cartuchos impresora', 1, 'Pack de 4, segundo caj?n mesa escritorio'),
(275, 7, 'Disco duro conceptronic', 1, 'En balda material TIC'),
(276, 7, 'Impresora HP 8710', 1, 'Para imprimir por wifi'),
(277, 7, 'Ladr?n', 1, '3 tomas, Tercer caj?n mesa escritorio'),
(278, 7, 'Micr?fono sobremesa', 1, 'En balda material TIC'),
(279, 7, 'Miniproyector Philips', 1, 'En balda material TIC, la bateria dura 10 minutos'),
(280, 7, 'Ordenador de sobremesa ASUS', 1, 'Mesa de escritorio'),
(281, 7, 'Ordenador de sobremesa HP', 1, 'Mesa de escritorio'),
(282, 7, 'Ordenador portatil Acer', 0, 'Hdmi, comprado en 2019, etiqueta n? 1,  Armario de'),
(283, 7, 'Ordenador portatil Asus', 1, 'Hdmi, RGB roto, etiqueta n? 3, ordenador m?s antig'),
(284, 7, 'Ordenador portatil Lenovo', 1, 'Hdmi, comprado en 2019, etiqueta n? 2,  Armario de'),
(285, 7, 'Rat?n bluetooh logitech', 1, 'Armario blanco grande, balda de abajo'),
(286, 7, 'Teclado inal?mbrico HP', 1, 'Armario blanco grande, balda de abajo'),
(287, 7, 'Bitiqu?n rojo', 2, 'Armario blanco peque?o'),
(288, 7, 'Botiqu?n grande', 1, 'Armario blanco peque?o'),
(289, 7, 'Productos recambio botiqu?n', 2, '2 cajas de pl?stico con recambios, Armario blanco '),
(290, 7, 'Malet?n azul de orientaci?n', 1, 'Armario blanco peque?o,Lo tiene Alex'),
(291, 7, 'Caja de mapas topogr?ficos', 1, 'Armario blanco peque?o'),
(292, 7, 'Encoder', 1, 'armario, lo tiene Jose'),
(293, 7, 'Puls?metro geonaute', 7, 'armario '),
(294, 7, 'Plic?metro ', 10, 'armario '),
(295, 7, 'Puls?metro accurex', 2, 'sin pilas. '),
(296, 7, 'Polar pcer', 3, 'no arrancan o no funcionan. Tienen banda'),
(297, 7, '', 0, ''),
(298, 13, 'Bolsas mec?nica bici', 3, 'Vacio'),
(299, 13, 'Estuches herramienta ruta', 3, 'Vacio'),
(300, 13, 'Camaras repuesto', 9, 'Vacio'),
(301, 13, 'Bombas', 4, 'Vacio'),
(302, 13, 'Cajas de parches', 3, 'Vacio'),
(303, 13, 'Cables de freno', 4, 'Vacio'),
(304, 13, 'Cables de cambio', 2, 'Vacio'),
(305, 13, 'Extractor de bielas', 1, 'Vacio'),
(306, 13, 'Llaves inglesas', 2, 'Vacio'),
(307, 13, 'Tronchacadena', 1, 'Vacio'),
(308, 13, 'Cierrefacil', 2, 'Vacio'),
(309, 13, 'Kit de limpieza', 1, 'Vacio'),
(310, 13, 'Caja mapas LA VACA (limpios)', 1, 'Vacio'),
(311, 13, 'Caja mapas LA VACA (relevos)', 1, 'Vacio'),
(312, 8, 'Balizas con pinzas', 20, 'Vacio'),
(313, 8, 'BALONES MEDIC.', 29, 'Vacio'),
(314, 8, 'BALONES VOLEY', 59, 'Vacio'),
(315, 8, 'BALONES BALONC.', 27, '13 nuevos: 7  del n?5, 6 del n?6'),
(316, 8, 'BALONES F?TBOL', 48, ''),
(317, 8, 'BALONES BALONM.', 32, ''),
(318, 8, 'BOLSAS DE BALONES DE RED', 4, ''),
(319, 8, 'BOLSAS DEPORTIVAS', 4, ''),
(320, 8, 'KITs HIGIENE COVID19', 5, 'ALMACEN DETRAS DE PORTERIA FONDO SUR, GEL, SPRAY, '),
(321, 9, 'ANTIFACES', 47, 'ALMACEN DETRAS DE PORTERIA FONDO SUR, 33 NEGROS - '),
(322, 9, 'BALONES GOALBALL', 9, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(323, 9, 'BALONES VOLEI SENT.', 4, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(324, 9, 'COLCHONETAS', 2, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(325, 9, 'FITBALL', 6, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(326, 9, 'AROS DE COLORES', 15, 'ALMACEN E.F. (PARA TRABAJO CON BACH.)'),
(327, 9, 'BALONES CASCABEL PEQ.', 6, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(328, 9, 'PICAS DE COLORES', 12, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(329, 9, 'BALONES DE KINBALL', 2, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(330, 9, 'ESTERILLAS VERDES', 14, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(331, 9, 'PORTERIAS PEQUE?AS', 2, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(332, 9, 'BOCCIA', 42, 'ALMACEN DETRAS DE PORTERIA FONDO SUR, 18 AZULES, 5'),
(333, 9, 'SILLAS DE RUEDAS', 9, 'ALMACEN DETRAS DE PORTERIA FONDO SUR, 1 \"TALLER\"\r'),
(334, 9, 'AROS NEGROS', 6, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(335, 9, 'COMBAS LARGAS', 2, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(336, 9, 'BALONES BALONMANO', 0, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(337, 9, 'BALONES FUTBOL', 2, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(338, 9, 'BALONES BALONCESTO', 31, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(339, 9, 'BALONES VOLEY', 7, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(340, 9, 'SETAS triang.', 26, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(341, 9, 'GOMA ESPUMA', 2, 'ALMACEN DETRAS DE PORTERIA FONDO SUR'),
(342, 9, 'Balones F.Americano', 2, ''),
(343, 9, 'Goma Elast. 40 mts', 1, ''),
(344, 9, 'conos', 27, '8 amarillos, 8 rojos, 8 verdes, 2 naranjas'),
(345, 9, 'Setas redondas', 13, ''),
(346, 9, 'Marcas Suelo', 12, '10 pentagonos,2 redondas'),
(347, 9, 'frisbees', 7, ''),
(348, 9, 'pizarra grande ', 1, ''),
(349, 9, 'bomba peque?a', 1, ''),
(350, 9, 'KIT PORTATIL PRIMEROS AUXILIOS', 0, 'DENTRO DE MOCHILA KIT'),
(351, 10, 'Mancuernas espuma piscina (pares)', 16, 'Est?n marcadas'),
(352, 10, 'Rulos', 16, 'Est?n marcadas'),
(353, 10, 'Aros pilates', 15, 'Estan marcados / color negro'),
(354, 10, 'Aros tonificaci?n', 15, 'Est?n marcados / color gris-azul'),
(355, 10, 'Pelotas pilates', 8, 'Estan marcadas'),
(356, 10, 'Pelotas miofascial', 14, 'Est?n marcadas / peque?as de colores'),
(357, 10, 'sillas de pala', 16, '2 EN ALMACEN IES'),
(358, 10, 'Pelotas azules piscina', 15, ''),
(359, 10, 'Cinturones de flotaci?n ', 15, ''),
(360, 10, 'Lastres Tobillo (pares)', 16, ''),
(361, 10, 'Bandas el?sticas', 0, 'Rollo naranja y marr?n'),
(362, 10, 'Gomas el?sticas con tela', 26, 'verdes 9 azules 7 rojas 10'),
(363, 10, 'Pelotas rojas piscina', 2, ''),
(364, 10, 'Setas redondas', 8, ''),
(365, 11, 'MOCHILA KIT BASICOS-kipsta', 1, 'Setas, Conos, Balones Espuma, 3 rotuladores'),
(366, 11, 'PIZARRA con ruedas', 1, ''),
(367, 11, 'KITs HIGIENE COVID19', 5, 'GEL, SPRAY, ROLLO PAPEL, BAYETA'),
(368, 11, 'setas variadas. + 1 cono.', 38, ''),
(369, 11, 'Setas triangulares', 42, 'MOCHILA KIT'),
(370, 11, ' pelotas de tenis.', 65, ''),
(371, 11, 'sbeesFrisbees', 5, ''),
(372, 11, ' cestos de pelotas de tenis.', 2, ''),
(373, 11, ' palas padel.', 14, ''),
(374, 11, ' pelotas baja presion.', 9, ''),
(375, 11, 'Balones de Volley ELK -5', 17, ''),
(376, 11, 'ELK celular.', 4, ''),
(377, 11, ' KIPSTA Soft.', 5, ''),
(378, 11, 'porterias floorball.', 2, ''),
(379, 11, 'Bomba de pie', 1, 'en Teka temporalmente'),
(380, 11, 'Carrito porta balones.', 1, ''),
(381, 11, 'Vallas plegables amarillas.', 4, ''),
(382, 11, 'Balones FutSal (8 nuevos- 11 viejos).', 19, ''),
(383, 11, 'Aros colores.', 11, ''),
(384, 11, 'Balones Futbol (10 nuevos 4 viejos).', 14, ''),
(385, 11, 'conos (8 azules-8 morados-7 naranjas).', 23, ''),
(386, 11, 'pelotas goma espuma.', 3, ''),
(387, 11, ' seta.', 1, ''),
(388, 11, 'raquetas badminton.', 14, ''),
(389, 11, 'Marcadores de suelo (4 angulo recto, 4 rectos).', 8, ''),
(390, 11, 'miniconos. (azules y amarillos)', 16, ''),
(391, 11, 'Balones de balonmano', 28, 'en Teka temporalmente'),
(392, 11, 'balones plastico (tipo colpbol)', 2, ''),
(393, 11, 'sticks floorball verde', 12, ''),
(394, 11, 'sticks floorball rojos', 12, ''),
(395, 11, 'Pelotas de floorball', 6, ''),
(396, 11, 'KIT PORTATIL PRIMEROS AUXILIOS', 1, 'DENTRO DE MOCHILA KIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `externo`
--

CREATE TABLE `externo` (
  `idUsuario` varchar(50) NOT NULL,
  `organizacion` varchar(50) NOT NULL,
  `direccion_1` varchar(50) DEFAULT NULL,
  `direccion_2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `externo`
--

INSERT INTO `externo` (`idUsuario`, `organizacion`, `direccion_1`, `direccion_2`) VALUES
('Adrian02', 'Teka', 'Calle Ruth Betia', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `permisos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `permisos`) VALUES
(1, 'Administrador'),
(2, 'Profesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `idUsuario` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`idUsuario`, `departamento`) VALUES
('Pedro03', 'TAFAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `idUsuario` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_recogida` datetime NOT NULL,
  `fecha_devolucion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` varchar(50) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `idPerfil`, `nombre`, `apellidos`, `telefono`, `contrasena`) VALUES
('Adrian02', 2, 'Adrian', 'Fernandez', '124578963', 'Adrian02'),
('Andre01', 1, 'Andre', 'Martinez', '987654321', 'Andre01'),
('Pedro03', 2, 'Pedro', 'Otero', '132456789', 'Pedro03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`idAlmacen`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `fkArticuloAlmacen` (`idAlmacen`);

--
-- Indices de la tabla `externo`
--
ALTER TABLE `externo`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_Externo_Usuario1_idx` (`idUsuario`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_Profesores_Usuario1_idx` (`idUsuario`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `fkReservaArticulo` (`idArticulo`),
  ADD KEY `fkReservaUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fkUsuarioPerfil` (`idPerfil`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `fkArticuloAlmacen` FOREIGN KEY (`idAlmacen`) REFERENCES `almacen` (`idAlmacen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `externo`
--
ALTER TABLE `externo`
  ADD CONSTRAINT `fk_Externo_Usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `fk_Profesores_Usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fkReservaArticulo` FOREIGN KEY (`idArticulo`) REFERENCES `articulo` (`idArticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkReservaUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fkUsuarioPerfil` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

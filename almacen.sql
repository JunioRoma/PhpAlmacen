-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2018 a las 16:33:09
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `Nombre` varchar(140) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ID` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Num_Serie` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cantidad` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`Nombre`, `ID`, `Num_Serie`, `Cantidad`) VALUES
('Cámara 35 mm', '100001', 'E04FC', 1),
('Cámara digital 1', '100002', '1C76BF', 1),
('Cámara digital', '100003', '110F2E', 1),
('Cámara digital', '100004', '383FD9', 1),
('Cámara digital', '100005', '651461', 1),
('Cámara digital', '100006', '1B7840', 1),
('Trípode', '100007', '5E6DB1', 1),
('Zapata', '100008', '5B88BF', 1),
('Batería', '100009', '757F2', 1),
('Cargador', '100010', '71BCBD', 1),
('Compact Flash', '100011', '662A68', 1),
('Filtro azul', '100012', '607727', 1),
('Carta grises', '100013', '544852', 1),
('Filtro rojo', '100014', '7CED47', 1),
('Filtro polarizado', '100015', '1AE81D', 1),
('Adaptador filtro', '100016', '4C74D2', 1),
('Flash Metz', '100017', '66854D', 1),
('Flash Canon', '100018', '74CF22', 1),
('Cámara hasselblad', '100019', '212564', 1),
('Objetivo 2470 mm', '100020', '3B4143', 1),
('Objetivo 70200', '100021', '7E16E0', 1),
('Fotómetro', '100022', '627E61', 1),
('Gelatinas', '100023', '6F1207', 1),
('Reflector', '100024', '7E9417', 1),
('Stiko', '100025', '46EED3', 1),
('CTO', '100026', '7E423', 1),
('CTB', '100027', '2F56E6', 1),
('WD', '100028', '496F61', 1),
('Cinefoil', '100029', '5EC8D2', 1),
('Regleta', '100030', '270249', 1),
('Alargador', '100031', '513F21', 1),
('BNCBNC', '100032', '483BB3', 1),
('CanonCanon', '100033', '5207E8', 1),
('JackJack', '100034', '5EF0AA', 1),
('RCARCA', '100035', '925EE4', 1),
('Alimentación', '100036', '39D755', 1),
('JackMinijack', '100037', '1781D7', 1),
('RCAJack', '100038', '3E242F', 1),
('RCACanon', '100039', '5942A2', 1),
('EuroEuro', '100040', '58C626', 1),
('EuroRCA', '100041', '167864', 1),
('USB', '100042', '2369CF', 1),
('Firewire', '100043', '4BA773', 1),
('Paralelo', '100044', '7E07CE', 1),
('Adaptador  Portátil', '100045', '498670', 1),
('DVD', '100046', '51DD0A', 1),
('Radiocassette', '100047', '329DE9', 1),
('Cañón', '100048', '15D55E', 1),
('Teclado', '100049', '50219E', 1),
('Ratón', '100050', '7C52E3', 1),
('Polímetro', '100051', '592DE3', 1),
('Micro AKG 880', '100052', '649F65', 1),
('Micro AKG 3700', '100053', '5DC731', 1),
('Micro AKG 414', '100054', '7C2EDE', 1),
('Micro AKG 421', '100055', '2053AD', 1),
('Micro AKG 1000', '100056', '357674', 1),
('Micro AKG 300 B', '100057', 'B6BBF', 1),
('Micro AKG 112', '100058', '34D7EE', 1),
('Micro SHURE SM 57', '100059', 'FBC8F', 1),
('Micro SHURE SM 58', '100060', '2429EF', 1),
('Micro Sennheiser', '100061', '5DB7A1', 1),
('Micro Sennheiser', '100062', '349D59', 1),
('Micro Sennheiser', '100063', '4D7A89', 1),
('Micro Sennheiser', '100064', '21DAD1', 1),
('Micro Behringer', '100065', '715CE4', 1),
('Micro ECM 8000', '100066', '968BB0', 1),
('Micro AUDIX', '100067', '81BD66', 1),
('Micro OPUS 69 Audio Technica', '100068', '7B3BCB', 1),
('Micro inalámbrico', '100069', '79A9DD', 1),
('Micro Sennheiser', '100070', '40ED79', 1),
('Micro cañón', '100071', '3E291B', 1),
('Micro corbata', '100072', '74627E', 1),
('Cápsula CK 91', '100073', '6CEBA0', 1),
('Cápsula CK92', '100074', '60A154', 1),
('Cápsula CK93', '100075', '1924B3', 1),
('Cápsula CK94', '100076', '5354B2', 1),
('MBOX + usb', '100077', '1B1149', 1),
('Cascos', '100078', '7E0176', 1),
('Zepelin', '100079', '1DBBEC', 1),
('Peluche', '100080', '2E82B8', 1),
('Pistola', '100081', '18BD88', 1),
('Pértiga', '100082', '4E9911', 1),
('Caja inyección', '100083', '90367C', 1),
('Antipop', '100084', '4C5208', 1),
('Pie de micro', '100085', '229682', 1),
('Kit batería', '100086', '8005D1', 1),
('Cámara 35 mm', '100087', '14BB8A', 1),
('Cámara digital 1', '100088', '168B53', 1),
('Cámara digital', '100089', '1A4C9E', 1),
('Cámara digital', '100090', '54C2A7', 1),
('Cámara digital', '100091', '1C439D', 1),
('Cámara digital', '100092', '6B798E', 1),
('Trípode', '100093', '178409', 1),
('Zapata', '100094', '43BEC9', 1),
('Batería', '100095', '967AF0', 1),
('Cargador', '100096', '6032C5', 1),
('Compact Flash', '100097', '273BDD', 1),
('Filtro azul', '100098', '677685', 1),
('Carta grises', '100099', '4F55BD', 1),
('Filtro rojo', '100100', 'D04E6', 1),
('Filtro polarizado', '100101', '9574CE', 1),
('Adaptador filtro', '100102', 'D604B', 1),
('Flash Metz', '100103', '58F87C', 1),
('Flash Canon', '100104', '475244', 1),
('Cámara hasselblad', '100105', '1D2027', 1),
('Objetivo 2470 mm', '100106', '79862A', 1),
('Objetivo 70200', '100107', '6BDD43', 1),
('Fotómetro', '100108', '3C0497', 1),
('Gelatinas', '100109', '5A1BBB', 1),
('Reflector', '100110', '444CE6', 1),
('Stiko', '100111', '4665BD', 1),
('CTO', '100112', '42CD77', 1),
('CTB', '100113', '1DBE26', 1),
('WD', '100114', '923770', 1),
('Cinefoil', '100115', '2E3B44', 1),
('Regleta', '100116', '96172F', 1),
('Alargador', '100117', '59172D', 1),
('BNCBNC', '100118', '1B0405', 1),
('CanonCanon', '100119', '7ED92A', 1),
('JackJack', '100120', '2B5FC9', 1),
('RCARCA', '100121', '57FA9A', 1),
('Alimentación', '100122', '61EEC', 1),
('JackMinijack', '100123', '751890', 1),
('RCAJack', '100124', '42E790', 1),
('RCACanon', '100125', '713EC0', 1),
('EuroEuro', '100126', '8F78DE', 1),
('EuroRCA', '100127', '738331', 1),
('USB', '100128', '92A046', 1),
('Firewire', '100129', '31D3F0', 1),
('Paralelo', '100130', '2A384C', 1),
('Adaptador  Portátil', '100131', '5D523C', 1),
('DVD', '100132', '53DE4B', 1),
('Radiocassette', '100133', '40E87D', 1),
('Cañón', '100134', '8E3377', 1),
('Teclado', '100135', '85B0B4', 1),
('Ratón', '100136', '8735FC', 1),
('Polímetro', '100137', '497A39', 1),
('Micro AKG 880', '100138', '13DBE0', 1),
('Micro AKG 3700', '100139', '45FC16', 1),
('Micro AKG 414', '100140', '899DBC', 1),
('Micro AKG 421', '100141', '55124D', 1),
('Micro AKG 1000', '100142', '6AA203', 1),
('Micro AKG 300 B', '100143', '81E3F8', 1),
('Micro AKG 112', '100144', '17F537', 1),
('Micro SHURE SM 57', '100145', '5CD322', 1),
('Micro SHURE SM 58', '100146', '793F30', 1),
('Micro Sennheiser', '100147', '90769', 1),
('Micro Sennheiser', '100148', '83AF8C', 1),
('Micro Sennheiser', '100149', '8DEB4C', 1),
('Micro Sennheiser', '100150', '795514', 1),
('Micro Behringer', '100151', '49E4A3', 1),
('Micro ECM 8000', '100152', '8A2C68', 1),
('Micro AUDIX', '100153', '746699', 1),
('Micro OPUS 69 Audio Technica', '100154', '262D52', 1),
('Micro inalámbrico', '100155', '19F8EA', 1),
('Micro Sennheiser', '100156', '16444C', 1),
('Micro cañón', '100157', '21013A', 1),
('Micro corbata', '100158', '6D92C7', 1),
('Cápsula CK 91', '100159', '7444F7', 1),
('Cápsula CK92', '100160', '3A081D', 1),
('Cápsula CK93', '100161', '63284C', 1),
('Cápsula CK94', '100162', '1245E7', 1),
('MBOX + usb', '100163', '5A27C8', 1),
('Cascos', '100164', '821B8D', 1),
('Zepelin', '100165', 'F5F5A', 1),
('Peluche', '100166', '7E9ED8', 1),
('Pistola', '100167', '256A14', 1),
('Pértiga', '100168', '56E717', 1),
('Caja inyección', '100169', '87FFDF', 1),
('Antipop', '100170', '40FEA8', 1),
('Pie de micro', '100171', '212C1E', 1),
('Kit batería', '100172', '6E3965', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosalmacen`
--

CREATE TABLE `usuariosalmacen` (
  `idUsuario` int(11) NOT NULL,
  `DNI` int(8) NOT NULL,
  `userPass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariosalmacen`
--

INSERT INTO `usuariosalmacen` (`idUsuario`, `DNI`, `userPass`) VALUES
(1, 12345678, '1234'),
(203, 87654321, '1234'),
(202, 87654321, '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuariosalmacen`
--
ALTER TABLE `usuariosalmacen`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuariosalmacen`
--
ALTER TABLE `usuariosalmacen`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

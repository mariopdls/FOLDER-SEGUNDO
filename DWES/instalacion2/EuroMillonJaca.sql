-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 28-11-2024 a las 08:23:46
-- Versión del servidor: 8.1.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `EuroMillonJaca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletos`
--

CREATE TABLE `boletos` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `numeros` varchar(20) NOT NULL,
  `estrellas` varchar(5) NOT NULL,
  `fecha_sorteo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `boletos`
--

INSERT INTO `boletos` (`id`, `username`, `numeros`, `estrellas`, `fecha_sorteo`) VALUES
(1, 'pepe', '5,12,18,33,42', '3,7', '2024-11-19'),
(2, 'pepe', '8,14,22,35,47', '1,10', '2024-11-07'),
(3, 'juan', '8,14,22,35,47', '2,9', '2024-11-07'),
(4, 'juan', '6,15,19,25,40', '4,8', '2024-11-18'),
(5, 'inma', '1,11,17,31,48', '2,6', '2024-11-20'),
(6, 'inma', '3,9,21,36,49', '5,6', '2024-11-19'),
(7, 'inma', '3,9,21,36,49', '5,7', '2024-11-17'),
(8, 'marta', '8,14,22,35,47', '3,10', '2024-11-17'),
(9, 'marta', '1,11,17,31,48', '4,8', '2024-11-15'),
(10, 'marta', '6,15,19,25,40', '2,7', '2024-11-15'),
(11, 'marta', '1,11,17,31,48', '1,10', '2024-11-20'),
(12, 'manuel', '1,11,17,31,44', '5,9', '2024-11-20'),
(13, 'manuel', '3,9,21,36,49', '2,9', '2024-11-10'),
(14, 'manuel', '6,15,19,25,40', '3,7', '2024-11-10'),
(15, 'manuel', '8,14,22,35,47', '2,9', '2024-11-07'),
(16, 'manuel', '5,12,18,33,42', '3,6', '2024-11-09'),
(17, 'marta', '5,12,18,33,42', '3,7', '2024-11-08'),
(18, 'marta', '6,15,19,25,40', '5,10', '2024-11-08'),
(19, 'marta', '8,14,22,35,47', '2,9', '2024-11-07'),
(20, 'inma', '8,14,22,35,47', '4,7', '2024-11-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico`
--

CREATE TABLE `historico` (
  `username` varchar(50) NOT NULL,
  `direccion_ant` varchar(255) NOT NULL,
  `direccion_act` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblaciones`
--

CREATE TABLE `poblaciones` (
  `id` int NOT NULL,
  `poblacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `poblaciones`
--

INSERT INTO `poblaciones` (`id`, `poblacion`) VALUES
(1, 'Villanueva de Córdoba'),
(2, 'Puente Genil'),
(3, 'Coria del Río'),
(4, 'Pozoblanco'),
(5, 'Córdoba'),
(6, 'Mairena del Aljarafe'),
(7, 'Palma del Río'),
(8, 'Dos Hermanas'),
(9, 'Utrera'),
(10, 'Écija'),
(11, 'Carmona'),
(12, 'Sevilla'),
(13, 'Cabra'),
(14, 'La Rinconada'),
(15, 'Baena'),
(16, 'Alcalá de Guadaíra'),
(17, 'Montilla'),
(18, 'Lucena'),
(19, 'Morón de la Frontera'),
(20, 'Priego de Córdoba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id` int NOT NULL,
  `fecha_sorteo` date NOT NULL,
  `numeros` varchar(20) NOT NULL,
  `estrellas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id`, `fecha_sorteo`, `numeros`, `estrellas`) VALUES
(1, '2024-11-06', '5,12,18,33,42', '3,7'),
(2, '2024-11-07', '8,14,22,35,47', '2,9'),
(3, '2024-11-20', '1,11,17,31,48', '1,10'),
(4, '2024-10-30', '6,15,19,25,40', '4,8'),
(5, '2024-10-23', '3,9,21,36,49', '5,6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `idPoblacion` int NOT NULL,
  `role` enum('admin','empleado','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`username`, `password`, `direccion`, `idPoblacion`, `role`) VALUES
('carmen', '$2y$10$N19xcBz9goX.yLk8or4SvOOQNNRSuz1RctBqNNNLGA0kVvPtvlbAu', 'Suite 98', 1, 'empleado'),
('ccharrisson16', '$2y$10$xWVU.5aVA4TqFo.NBI0b1OIxUhPMM6iLJ0YD23yw9VbfR8KXmet26', 'Room 39', 2, 'admin'),
('cdennec', '$2y$10$lSD3M94uS0y2VZve6AZVquwFvRmFn5mgm1y1lkBwANTHri4HlQBci', 'Room 197', 3, 'empleado'),
('dcankett19', '$2y$10$OK4eow3e0LmC17QzDZLmTOMic5XcyLqg3EOqz/xeyvhWtfnFjyemO', '17th Floor', 4, 'user'),
('dcowlasa', '$2y$10$nujTxIuaiixV3eUigRFpd.Spf0HkOHD/0qVMqGb2PkaKTnMhFf08K', '10th Floor', 5, 'empleado'),
('dfacchini1a', '$2y$10$Hj0wMGlJNC6Jw3X.wNe61OQnbLGV8pi4dT/XneCvi6.fC2oxqkkDa', '9th Floor', 6, 'empleado'),
('dgiacoppo11', '$2y$10$A7f7lRxi9B4b41RuCb5CYuBLFujWxaumy5bqxcqI19CwMTQ7Nv5OG', 'Apt 65', 7, 'user'),
('drivaln', '$2y$10$X.iJNSWStljZmqUX/eYinOmeOJB85c1grGMjtA40tezKEBGfPNuea', 'PO Box 6003', 8, 'user'),
('dwhettletonj', '$2y$10$JtZTIHg2E81Yf73dAup8r.vRsbPxE1SN9SVJ6K2we01/DqcyGdfxa', 'Suite 97', 2, 'admin'),
('edangerfield3', '$2y$10$gc5aTgu9.gBPkLShGOL2h.qfLTwRRdEbz0RmLCDfefB2jGH9PKFQq', '4th Floor', 9, 'user'),
('ejirikx', '$2y$10$TgrQabLDznf3Hb92YuKqTOJQ9AVLXdldEX2Y0NxYqwo9YmR8wCZla', 'PO Box 1583', 10, 'admin'),
('gbeaginl', '$2y$10$QYLyXgjdXjCCaZgGwV4ubeg7jI6JsrNnSU4Pzmk2zuUL0u6Fg8P8W', 'Room 916', 11, 'empleado'),
('ggreville0', '$2y$10$AESfQA.wocRMaIgRklbgVOxCLPOvEzMUDWVz3IwP2i6LqwS5NtBKG', 'Room 1594', 12, 'user'),
('hbolters', '$2y$10$FaYa7VHQr/DmiVjXyXHsOOnZ6d3mNHedJG6pwSbtrHs6yelBXi2BW', 'Suite 52', 7, 'user'),
('hcroneen1b', '$2y$10$wM1cyBSNKXLXrPN6G13dQ.RhSZi9XsCWCcZQWYtqwVQ7mTuMu.5RK', 'Suite 56', 13, 'user'),
('hiacovolo1c', '$2y$10$TEO906PPPY3bLRRk4UcwAumVe2aK4K8PuVtIXimlECi3LJbItzM3C', 'Apt 867', 13, 'empleado'),
('htreversv', '$2y$10$.IF.C1aVJzo1PE3/Z5boX.uPceJ6d81WgVvHAwTI6VB4kx4jAcgui', 'Suite 76', 8, 'admin'),
('inma', '$2y$10$QWIf6HJ785GfTk5UzuPDo.aIQUjConbxR9d6ChFgKuDrBoVyX4zam', '61th Floor', 14, 'admin'),
('jargont6', '$2y$10$/fq0mqE027Bm0ICB96Z5ZOoq559UrRQYfkh1mBB23f/RQ0QDBDKTm', 'Apt 399', 15, 'empleado'),
('jjuett5', '$2y$10$1aHn107ygjiXicDqO7GAVeiPRP0W4ZhVoar/CT9ub1ZM2FhxmC.BO', '91th Floor', 1, 'empleado'),
('jredferne12', '$2y$10$Lbgc5pWxQ/MKGQinZnieWO8QhEV6WRAv4sE9tyR/vqK6UXFeqI7Fm', 'PO Box 30700', 16, 'user'),
('jrhodes18', '$2y$10$7i.ud1N9XLaFN1al9hwxqe7hl0IohzlPudxHJDWm5QRWvGIiWACIu', 'Room 643', 1, 'empleado'),
('juan', '$2y$10$OTKSYNuQ2qWu9uLobw2Rvuv/tDxxx/mfrLuglOxys7qnH1Eg4ahMK', 'Suite 82', 5, 'user'),
('juanito', '$2y$10$pjvGqX/JsKWwGVwv3TQ6x.MlFWbCxBhACYh2LDbTxAKdMKVrmar2m', '6th Floor', 17, 'admin'),
('jzollnerr', '$2y$10$g6PkPSA7MhxgYjX34Vz4R.fOSwBr5O2Sa4bpqS.xv9/2AwODQFl2m', '13th Floor', 5, 'empleado'),
('kmaddocke', '$2y$10$vgmJWjUpvCPoWzl6HDGfwuI9G3wrJYkOmvK50NzKmPNUCVq2iACS2', 'PO Box 83747', 18, 'empleado'),
('kschreursh', '$2y$10$9yNgX7eEYXnuLHWDas4sEO7BLCgjIky7/.CpQR4a77lqfe06TnPp.', 'Apt 1779', 5, 'empleado'),
('kwhife2', '$2y$10$MhehNvPVJpC9ryfhuuv/Au/5MKd0RXcOGRnMX18gaPkjeZh21QDpi', 'Suite 57', 5, 'user'),
('laura', '$2y$10$Dpsw.bUpcNDok5uGluLCT.F2kabiPJ5nHWLBt1s415IAQLi1ZoWym', 'Room 1949', 6, 'user'),
('lorena', '$2y$10$BYtCbC3kKcT5DCL9i1OkoOOI3PjjgqRrW17Dv28IzEnJ.ykCjXDe6', 'Apt 340', 19, 'user'),
('lscarratt1', '$2y$10$nuNMxxoEUZCpXHBPjvqQC.qblEX9o9riQ44SiQtZ6dQ82WcyU729C', 'Apt 585', 4, 'empleado'),
('lsemirazg', '$2y$10$UD45TLj2ze2O/Y6YZKx4KeY2O.7c9AH1Cxr1K/dT07664PzEdZw4O', 'Apt 345', 15, 'user'),
('manuel', '$2y$10$TASyYRxPemCsXXNRPsGx5ef5Jua5EGwSP6iPeEEW/r4MxxMaUNc.C', 'Suite 8', 20, 'admin'),
('marta', '$2y$10$AXxKzJeOGgpXYymx6ow1B.qCSf3/aHkh4tOb3m6j.ceMHUKqfK8Xq', 'Suite 38', 7, 'admin'),
('mduckhouse10', '$2y$10$4x.M2pQ33Km/k1YqHm1If.TqIHYvwihzT.YnW9EKMJ2nFEZIWAGqO', 'Apt 1567', 13, 'admin'),
('mkolushevb', '$2y$10$c7VcnwNiCJMhO.ybcLbwN.CIg3s49BNsEKATi/EIBKceCI8v96yci', 'PO Box 86161', 18, 'empleado'),
('mmacgrayk', '$2y$10$QG.1tOyyiQKZVDsvsKyjguTV6dEQHs0oohuo./9mJsI2E.zu4Q192', '11th Floor', 12, 'user'),
('mthome14', '$2y$10$Ld6fq5CtmGNX12vrVCxuNun.Q8zO2Rknt71BfnSMUzM47glpxil2i', 'Room 1511', 13, 'user'),
('myieldingy', '$2y$10$YMA4F.HidrWk2kmWEC3b8O.eyE0/C0KmayWS2XlwIV.UPO76HiElO', '18th Floor', 2, 'admin'),
('pepe', '$2y$10$gIwqhpwApGgDHh6sR5rZweVoB.JGjpfFvxMYYhLItVWnUX/q5VyGW', 'Room 514', 20, 'admin'),
('predhouse1d', '$2y$10$/g8o7NMWvSjWUSyJPVAGSOh27Flaqt1w1wBTxGfueDCFVT5j5xXMu', 'Room 1484', 15, 'admin'),
('rberinger17', '$2y$10$dgyu4M.L7j8Q4WgO3sftFO/kEgcyjFNb8iaDDxBaVd0IwF16gSbBW', 'PO Box 45212', 7, 'admin'),
('rkun4', '$2y$10$jtNaUDHjR2B5SdjZRai5Qu86PsGphPlyPeRpuOkvhSZp.S0tG/W0G', 'PO Box 60154', 12, 'empleado'),
('rodrigo', '$2y$10$mb1V0qvzv7m83OeAvSgQHez1DC54JjG6X1yrXyXFOo2QC7im0PKrK', 'Apt 1603', 6, 'empleado'),
('sbirkbecku', '$2y$10$P555BhxvD8Y3.F0RwAra9OjKXaFIQ2mB2gQpNmS.3QujSqb7pw/aa', 'Apt 75', 8, 'admin'),
('sbristonz', '$2y$10$y8KmsO4OOKDRx7OXoBibaeyu25gFAxD0Zx6sjYaCRfuQafz3e.eDK', 'Room 1128', 20, 'user'),
('squinneym', '$2y$10$6uJdv5aO5yj7FsGSk3tvX.AZvQqHJl0.mDqUOY3B2GkYPvznqtU6i', 'Apt 1007', 8, 'empleado'),
('vboughw', '$2y$10$OWE2QNBtzf0PcQ.3PCzhHe7DNICevZazup4uG/o3oZkn7bq4zFnBq', 'Room 819', 13, 'user'),
('vgraeber15', '$2y$10$6eF2CwqGSCnk0YiNun8p/efWkFIemvaSEtpfdx5Oy1G9Ta2a8dr9e', 'Apt 1932', 9, 'empleado'),
('wnono13', '$2y$10$2AOwgrhroB5DPdR1avxQDe3RCPdxdt555Ba4VFdu7tm53gdzOQMW6', 'Suite 25', 6, 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletos`
--
ALTER TABLE `boletos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `boletos_fk_user` (`username`);

--
-- Indices de la tabla `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`username`,`direccion_ant`,`fecha`,`direccion_act`) USING BTREE;

--
-- Indices de la tabla `poblaciones`
--
ALTER TABLE `poblaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`username`) USING BTREE,
  ADD KEY `fkusuarioPobl` (`idPoblacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletos`
--
ALTER TABLE `boletos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `poblaciones`
--
ALTER TABLE `poblaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boletos`
--
ALTER TABLE `boletos`
  ADD CONSTRAINT `boletos_fk_user` FOREIGN KEY (`username`) REFERENCES `usuarios` (`username`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `fk_historico_usuario` FOREIGN KEY (`username`) REFERENCES `usuarios` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fkusuarioPobl` FOREIGN KEY (`idPoblacion`) REFERENCES `poblaciones` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2023 a las 22:49:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgcdrogueria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoriainterna`
--

CREATE TABLE `auditoriainterna` (
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `Idauditoria` varchar(5) NOT NULL DEFAULT 'AI',
  `hallazgos` text NOT NULL,
  `acciones` text NOT NULL,
  `Idempleados` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `auditoriainterna`
--

INSERT INTO `auditoriainterna` (`fecha`, `Idauditoria`, `hallazgos`, `acciones`, `Idempleados`) VALUES
('2023-09-17', 'AI1', 'Falta organizar', 'Crear un programa de organización semanal', 'E1'),
('2023-09-20', 'AI2', 'Falta organizar', 'Crear un programa de organización semanal', 'E3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `Iddevolucion` int(5) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nomproducto` varchar(50) NOT NULL,
  `motivodevolucion` text NOT NULL,
  `Idempleado` varchar(5) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`Iddevolucion`, `codigo`, `nomproducto`, `motivodevolucion`, `Idempleado`, `fecha`) VALUES
(1, 25, 'advil max', 'vencimiento', 'E3', '2023-11-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacionpaciente`
--

CREATE TABLE `educacionpaciente` (
  `Ideducacionpac` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nomcliente` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nomproducto` varchar(50) NOT NULL,
  `contraindicaciones` text NOT NULL,
  `Idempleados` varchar(5) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `educacionpaciente`
--

INSERT INTO `educacionpaciente` (`Ideducacionpac`, `cedula`, `nomcliente`, `codigo`, `nomproducto`, `contraindicaciones`, `Idempleados`, `fecha`) VALUES
(1, 13955486, 'Gerardo Ardila Castillo', 1, 'acetaminofen', 'Vomito', 'E1', '2023-09-17'),
(2, 1000753001, 'Jose David Cruz Ardila', 4, 'azitromicina', 'fiebre', 'E3', '2023-11-13'),
(12, 2147483647, 'Juliana Diaz', 2, 'amoxicilina', 'fiebre', 'E3', '2023-11-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Idempleados` varchar(5) NOT NULL DEFAULT 'E',
  `nomempleado` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Idempleados`, `nomempleado`, `cedula`) VALUES
('E1', 'Luisa Fernanda Ardila Rivera', 1101758678),
('E2', 'Yisney Pineda Isaza', 1002205880),
('E3', 'Jose Ruben Ramos', 1000375269);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inyectologia`
--

CREATE TABLE `inyectologia` (
  `Idinyectologia` int(11) NOT NULL,
  `cedulacliente` int(11) NOT NULL,
  `nomcliente` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nomproducto` varchar(50) NOT NULL,
  `gluteoaplicacion` varchar(10) NOT NULL,
  `Idempleados` varchar(5) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inyectologia`
--

INSERT INTO `inyectologia` (`Idinyectologia`, `cedulacliente`, `nomcliente`, `codigo`, `nomproducto`, `gluteoaplicacion`, `Idempleados`, `fecha`) VALUES
(1, 28477248, 'Rosalba Castillo', 1, 'acetaminofen', 'derecha', 'E1', '2023-11-15'),
(2, 28477248, 'Rosalba Castillo', 25, 'advil max', 'derecha', 'E2', '2023-11-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `limpieza`
--

CREATE TABLE `limpieza` (
  `Idlimpieza` int(11) NOT NULL,
  `productoaseo` varchar(50) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `infoprocesolimpieza` text NOT NULL,
  `Idempleados` varchar(5) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `limpieza`
--

INSERT INTO `limpieza` (`Idlimpieza`, `productoaseo`, `zona`, `infoprocesolimpieza`, `Idempleados`, `fecha`) VALUES
(1, 'Clorox', 'baño', 'Se desinfecto con clorox', 'E1', '2023-09-17'),
(2, 'Clorox', 'pisos', 'Se limpio el piso', 'E1', '2023-09-17'),
(3, 'Jabon', 'puerta', 'Se lavo la puerta', 'E2', '2023-09-17'),
(17, 'Jabon y agua', 'bano', 'lavado de caneca', 'E2', '2023-11-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `direccion` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `nombre`, `telefono`, `direccion`) VALUES
(9870, 'roman', 3144463444, 'Calle 77D'),
(98765, 'natalia franco diaz', 3144463444, 'Calle 77D # 105B '),
(3456287, 'roman', 3144463444, 'Calle 77D 105B 39'),
(13955486, 'Gerardo Ardila Castillo', 3123098255, 'Cra 30 # 30a 202'),
(23456777, 'roman', 3144463444, 'Calle 77D'),
(28477244, 'sandra sanchez', 3134611947, 'Cra 30 # 50 21'),
(28477248, 'Rosalba Castillo', 3134611947, 'Cra 30 # 50 21'),
(1000375269, 'José Ruben Ramos Rodriguez', 3224642644, 'calle 127F # 93c 41'),
(1000753001, 'Jose David Cruz Ardila', 3224565670, 'cra 101 sur 78j 70'),
(1002205880, 'Yisney Pineda Isaza', 3122301304, 'Diag 64A # 21 - 38'),
(1101234322, 'Mayuliseth Gonsalez', 3224563422, 'calle 11 # 34 - 23 sur'),
(1101758678, 'Luisa Fernanda Ardila Rivera', 3144463444, 'Calle 77d # 105b 39'),
(1234568768, 'martha', 75855886878797, 'calle 120'),
(2147483647, 'Juliana Diaz', 2134566778, 'Calle 77D # 105B - 45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` int(11) NOT NULL,
  `nomproducto` varchar(50) NOT NULL,
  `lote` int(11) NOT NULL,
  `laboratorio` varchar(70) NOT NULL,
  `fechavenc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nomproducto`, `lote`, `laboratorio`, `fechavenc`) VALUES
(1, 'acetaminofén', 10101, 'la sante', '2024-01-20'),
(2, 'amoxicilina', 10102, 'la sante', '2024-01-24'),
(3, 'ampicilina', 10103, 'la sante', '2024-02-16'),
(4, 'azitromicina', 10104, 'la sante', '2024-03-20'),
(5, 'betametasona', 10105, 'la sante', '2024-04-20'),
(6, 'betametasona amp', 10106, 'la sante', '2024-02-11'),
(7, 'betametasona + clotrimazol crema', 10107, 'la sante', '2024-03-19'),
(8, 'carbamazepina', 10108, 'la sante', '2024-03-07'),
(9, 'cefalexina', 10109, 'la sante', '2024-03-04'),
(10, 'captopril', 10110, 'la sante', '2024-03-10'),
(11, 'cetirizina jab', 10111, 'la sante', '2023-09-30'),
(12, 'cetirizina tab', 10112, 'la sante', '2023-09-29'),
(13, 'clotrimazol 5% crema', 10113, 'la sante', '2023-09-30'),
(14, 'clindamicina amp', 10114, 'la sante', '2023-09-30'),
(15, 'clotrimazol loc', 10115, 'la sante', '2023-09-30'),
(16, 'loratadina jab', 10116, 'la sante', '2023-09-17'),
(24, 'loratadina tab', 10117, 'la sante', '2023-10-07'),
(25, 'Advil max', 10118, 'abbout', '2024-02-06'),
(26, 'Aspirina', 10119, 'Mk', '2024-01-30'),
(27, 'Noxirim Jab', 10120, 'genoma', '2024-02-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quejasreclamos`
--

CREATE TABLE `quejasreclamos` (
  `Idqr` int(11) NOT NULL,
  `tiposolicitud` varchar(10) NOT NULL,
  `cedula` int(11) NOT NULL,
  `solicitud` text NOT NULL,
  `respuesta` text NOT NULL,
  `Idempleado` int(11) DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `quejasreclamos`
--

INSERT INTO `quejasreclamos` (`Idqr`, `tiposolicitud`, `cedula`, `solicitud`, `respuesta`, `Idempleado`, `fecha`) VALUES
(1, 'queja', 13955486, 'devolucion medicamento', 'se cambia por un producto del mismo valor', 1101758678, '2023-12-02'),
(2, 'queja', 1000753001, 'cambio producto', 'si', 1101758678, '2023-12-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepciontecnica`
--

CREATE TABLE `recepciontecnica` (
  `Idrecepcion` int(5) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nomproducto` varchar(50) NOT NULL,
  `observaciones` text NOT NULL,
  `Idempleado` varchar(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recepciontecnica`
--

INSERT INTO `recepciontecnica` (`Idrecepcion`, `codigo`, `nomproducto`, `observaciones`, `Idempleado`, `fecha`) VALUES
(1, 1, 'acetaminofen', 'ninguna', 'E2', '2023-11-27'),
(2, 2, 'amoxicilina', 'ninguna', 'E2', '2023-11-27'),
(3, 25, 'advil max', 'caja de 100 cap', 'E3', '2023-11-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residuos`
--

CREATE TABLE `residuos` (
  `Idresiduos` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `tiporesiduo` varchar(50) NOT NULL,
  `cantidad` varchar(5) NOT NULL DEFAULT 'kg',
  `infogeneracionresiduos` text NOT NULL,
  `Idempleados` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `residuos`
--

INSERT INTO `residuos` (`Idresiduos`, `fecha`, `tiporesiduo`, `cantidad`, `infogeneracionresiduos`, `Idempleados`) VALUES
(1, '2023-09-17', 'biosanitario', '2 Kg', 'caneca verde', 'E3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Idrol` int(5) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Auxiliar'),
(3, 'Farmaceuta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `satisfaccioncliente`
--

CREATE TABLE `satisfaccioncliente` (
  `Idsatisfaccion` int(11) NOT NULL,
  `cedulacliente` int(11) NOT NULL,
  `calificacion` varchar(10) NOT NULL,
  `sugerencias` text NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `satisfaccioncliente`
--

INSERT INTO `satisfaccioncliente` (`Idsatisfaccion`, `cedulacliente`, `calificacion`, `sugerencias`, `fecha`) VALUES
(1, 28477248, 'Buena', 'ninguna', '2023-12-02'),
(2, 1101758678, 'Buena', 'ninguna', '2023-12-02'),
(6, 1101758678, 'excelente', 'ninguna', '2023-12-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temperaturahumedad`
--

CREATE TABLE `temperaturahumedad` (
  `Idtemhum` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `jornada` varchar(6) NOT NULL,
  `temperatura` varchar(5) NOT NULL DEFAULT '°C',
  `humedad` varchar(5) NOT NULL DEFAULT '%',
  `Idempleados` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temperaturahumedad`
--

INSERT INTO `temperaturahumedad` (`Idtemhum`, `fecha`, `jornada`, `temperatura`, `humedad`, `Idempleados`) VALUES
(1, '2023-09-17', 'mañana', '18°C', '56%', 'E1'),
(2, '2023-09-17', 'tarde', '17°C', '45%', 'E3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `Idrol` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `usuario`, `clave`, `Idrol`) VALUES
(1, 'luisa', 'ad84e91d76bdf66d371564dd2a8fa296f78ac7bf', 1),
(2, 'yisney', '2c4f49e60bd4795290fe0d9de987db25a6887c36', 1),
(4, 'ruben', '6634546ac4bd597c52be5bccec8eeaa9a266083b', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditoriainterna`
--
ALTER TABLE `auditoriainterna`
  ADD PRIMARY KEY (`Idauditoria`),
  ADD KEY `Idempleados` (`Idempleados`) USING BTREE;

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`Iddevolucion`),
  ADD KEY `fk_empleado` (`Idempleado`),
  ADD KEY `fk_producto` (`codigo`);

--
-- Indices de la tabla `educacionpaciente`
--
ALTER TABLE `educacionpaciente`
  ADD PRIMARY KEY (`Ideducacionpac`),
  ADD KEY `cedulacliente` (`cedula`) USING BTREE,
  ADD KEY `codigo` (`codigo`) USING BTREE,
  ADD KEY `Idempleados` (`Idempleados`) USING BTREE;

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Idempleados`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `inyectologia`
--
ALTER TABLE `inyectologia`
  ADD PRIMARY KEY (`Idinyectologia`),
  ADD KEY `cedulacliente` (`cedulacliente`) USING BTREE,
  ADD KEY `Idempleados` (`Idempleados`) USING BTREE,
  ADD KEY `codigo` (`codigo`) USING BTREE;

--
-- Indices de la tabla `limpieza`
--
ALTER TABLE `limpieza`
  ADD PRIMARY KEY (`Idlimpieza`),
  ADD KEY `Id_empleados:empleados` (`Idempleados`) USING BTREE;

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `quejasreclamos`
--
ALTER TABLE `quejasreclamos`
  ADD PRIMARY KEY (`Idqr`),
  ADD KEY `cedulacliente` (`cedula`) USING BTREE,
  ADD KEY `Idempleado` (`Idempleado`);

--
-- Indices de la tabla `recepciontecnica`
--
ALTER TABLE `recepciontecnica`
  ADD PRIMARY KEY (`Idrecepcion`),
  ADD KEY `fk_empleados` (`Idempleado`),
  ADD KEY `fk_productos` (`codigo`);

--
-- Indices de la tabla `residuos`
--
ALTER TABLE `residuos`
  ADD PRIMARY KEY (`Idresiduos`),
  ADD KEY `Id_empleados:empleados` (`Idempleados`) USING BTREE;

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Idrol`);

--
-- Indices de la tabla `satisfaccioncliente`
--
ALTER TABLE `satisfaccioncliente`
  ADD PRIMARY KEY (`Idsatisfaccion`),
  ADD KEY `cedulacliente` (`cedulacliente`) USING BTREE;

--
-- Indices de la tabla `temperaturahumedad`
--
ALTER TABLE `temperaturahumedad`
  ADD PRIMARY KEY (`Idtemhum`),
  ADD KEY `Idempleados` (`Idempleados`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `rol` (`Idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `Iddevolucion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `educacionpaciente`
--
ALTER TABLE `educacionpaciente`
  MODIFY `Ideducacionpac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `inyectologia`
--
ALTER TABLE `inyectologia`
  MODIFY `Idinyectologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `limpieza`
--
ALTER TABLE `limpieza`
  MODIFY `Idlimpieza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `quejasreclamos`
--
ALTER TABLE `quejasreclamos`
  MODIFY `Idqr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `recepciontecnica`
--
ALTER TABLE `recepciontecnica`
  MODIFY `Idrecepcion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `residuos`
--
ALTER TABLE `residuos`
  MODIFY `Idresiduos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Idrol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `satisfaccioncliente`
--
ALTER TABLE `satisfaccioncliente`
  MODIFY `Idsatisfaccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `temperaturahumedad`
--
ALTER TABLE `temperaturahumedad`
  MODIFY `Idtemhum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditoriainterna`
--
ALTER TABLE `auditoriainterna`
  ADD CONSTRAINT `fk_empleadosai` FOREIGN KEY (`Idempleados`) REFERENCES `empleados` (`Idempleados`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `fk_empleado` FOREIGN KEY (`Idempleado`) REFERENCES `empleados` (`Idempleados`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`codigo`) REFERENCES `producto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `educacionpaciente`
--
ALTER TABLE `educacionpaciente`
  ADD CONSTRAINT `fk_clienteed` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_empleadosed` FOREIGN KEY (`Idempleados`) REFERENCES `empleados` (`Idempleados`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productoed` FOREIGN KEY (`codigo`) REFERENCES `producto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_empleadosID` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inyectologia`
--
ALTER TABLE `inyectologia`
  ADD CONSTRAINT `fk_clienteiny` FOREIGN KEY (`cedulacliente`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_empleadosiny` FOREIGN KEY (`Idempleados`) REFERENCES `empleados` (`Idempleados`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productoiny` FOREIGN KEY (`codigo`) REFERENCES `producto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `limpieza`
--
ALTER TABLE `limpieza`
  ADD CONSTRAINT `fk_empleadosli` FOREIGN KEY (`Idempleados`) REFERENCES `empleados` (`Idempleados`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `quejasreclamos`
--
ALTER TABLE `quejasreclamos`
  ADD CONSTRAINT `fk_clienteqr` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_empleadoqr` FOREIGN KEY (`Idempleado`) REFERENCES `empleados` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recepciontecnica`
--
ALTER TABLE `recepciontecnica`
  ADD CONSTRAINT `fk_empleados` FOREIGN KEY (`Idempleado`) REFERENCES `empleados` (`Idempleados`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productos` FOREIGN KEY (`codigo`) REFERENCES `producto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `residuos`
--
ALTER TABLE `residuos`
  ADD CONSTRAINT `fk_empleadosrs` FOREIGN KEY (`Idempleados`) REFERENCES `empleados` (`Idempleados`);

--
-- Filtros para la tabla `satisfaccioncliente`
--
ALTER TABLE `satisfaccioncliente`
  ADD CONSTRAINT `fk_clientesat` FOREIGN KEY (`cedulacliente`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `temperaturahumedad`
--
ALTER TABLE `temperaturahumedad`
  ADD CONSTRAINT `fk_empleadosth` FOREIGN KEY (`Idempleados`) REFERENCES `empleados` (`Idempleados`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_roles` FOREIGN KEY (`Idrol`) REFERENCES `roles` (`Idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

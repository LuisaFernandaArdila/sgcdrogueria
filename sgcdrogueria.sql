-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2023 a las 05:26:22
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
CREATE DATABASE IF NOT EXISTS `sgcdrogueria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sgcdrogueria`;

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
  `Iddevolución` varchar(5) NOT NULL DEFAULT 'DP',
  `codigo_prod:producto` int(11) NOT NULL,
  `nom_producto` varchar(50) NOT NULL,
  `motivo_devolución` text NOT NULL,
  `Id_empleados:empleados` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`Iddevolución`, `codigo_prod:producto`, `nom_producto`, `motivo_devolución`, `Id_empleados:empleados`, `fecha`) VALUES
('DP2', 9, 'amoxicilina sus', 'mal estado', 1002205880, '2023-09-16');

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
(2, 1000753001, 'Jose David Cruz Ardila', 4, 'azitromicina', 'fiebre', 'E3', '2023-11-13');

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
('E3', 'Jose Ruben Ramos Rodriguez', 1000375269);

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
  `glúteoaplicación` varchar(10) NOT NULL,
  `Idempleados` varchar(5) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inyectologia`
--

INSERT INTO `inyectologia` (`Idinyectologia`, `cedulacliente`, `nomcliente`, `codigo`, `nomproducto`, `glúteoaplicación`, `Idempleados`, `fecha`) VALUES
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
(16, 'Jabon', 'Pisos', 'Se lavo la puerta', 'E1', '2023-11-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `direccion` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `nombre`, `telefono`, `direccion`) VALUES
(12456, 'sandra rodriguez', 75869, 'calle 80'),
(98765, 'natalia franco', 3144463444, 'Calle 77D # 105B '),
(13955486, 'Gerardo Ardila Castillo', 3123098255, 'Cra 30 # 30a 202'),
(28477248, 'Rosalba Castillo', 3134611947, 'Cra 30 # 50 21'),
(1000375269, 'José Ruben Ramos Rodriguez', 3224642644, 'calle 127F # 93c 41'),
(1000753001, 'Jose David Cruz Ardila', 3224565670, 'cra 101 sur 78j 70'),
(1002205880, 'Yisney Pineda Isaza', 3122301304, 'Diag 64A # 21 - 38'),
(1101234322, 'Mayuliseth Gonsalez', 3224563422, 'calle 11 # 34 - 23 sur'),
(1101758678, 'Luisa Fernanda Ardila Rivera', 3144463444, 'Calle 77d # 105b 39'),
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
(27, 'Noxirim Jab', 10120, 'genoma', '2024-02-20'),
(28, 'suero marzana', 98758, 'mk', '2024-03-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quejasreclamos`
--

CREATE TABLE `quejasreclamos` (
  `Idqr` int(11) NOT NULL,
  `solicitud` text NOT NULL,
  `respuesta` text NOT NULL,
  `cedulacliente` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepciontecnica`
--

CREATE TABLE `recepciontecnica` (
  `Idrecepción` varchar(5) NOT NULL DEFAULT 'RT',
  `codigo_prod:producto` int(11) NOT NULL,
  `nom_producto` varchar(50) NOT NULL,
  `observaciones` text NOT NULL,
  `Id_empleados:empleados` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residuos`
--

CREATE TABLE `residuos` (
  `Idresiduos` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `cantidad` varchar(5) NOT NULL DEFAULT 'kg',
  `tiporesiduo` varchar(50) NOT NULL,
  `infogeneraciónresiduos` text NOT NULL,
  `Idempleados` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `residuos`
--

INSERT INTO `residuos` (`Idresiduos`, `fecha`, `cantidad`, `tiporesiduo`, `infogeneraciónresiduos`, `Idempleados`) VALUES
(1, '2023-09-17', '2 Kg', 'biosanitario', 'caneca verde', 'E3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Id_rol` int(5) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `contraseña` int(10) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `funciones` text NOT NULL,
  `empcedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Id_rol`, `usuario`, `contraseña`, `cargo`, `funciones`, `empcedula`) VALUES
(1, 'Luisa', 12345, 'administrador', 'Registrar datos', 1101758678),
(2, 'Yisney', 12345, 'auxiliar', 'Registrar productos', 1002205880);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `satisfaccióncliente`
--

CREATE TABLE `satisfaccióncliente` (
  `Idsatisfaccion` int(11) NOT NULL,
  `calificación` char(5) NOT NULL,
  `sugerencias` text NOT NULL,
  `cedulacliente` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD PRIMARY KEY (`Iddevolución`),
  ADD KEY `Id_empleados:empleados` (`Id_empleados:empleados`) USING BTREE,
  ADD KEY `codigo_prod:producto` (`codigo_prod:producto`) USING BTREE;

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
  ADD KEY `cedulacliente` (`cedulacliente`) USING BTREE;

--
-- Indices de la tabla `recepciontecnica`
--
ALTER TABLE `recepciontecnica`
  ADD PRIMARY KEY (`Idrecepción`),
  ADD KEY `codigo_prod:producto` (`codigo_prod:producto`) USING BTREE,
  ADD KEY `Id_empleados:empleados` (`Id_empleados:empleados`) USING BTREE;

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
  ADD PRIMARY KEY (`Id_rol`),
  ADD UNIQUE KEY `empcedula` (`empcedula`);

--
-- Indices de la tabla `satisfaccióncliente`
--
ALTER TABLE `satisfaccióncliente`
  ADD PRIMARY KEY (`Idsatisfaccion`),
  ADD KEY `cedulacliente` (`cedulacliente`) USING BTREE;

--
-- Indices de la tabla `temperaturahumedad`
--
ALTER TABLE `temperaturahumedad`
  ADD PRIMARY KEY (`Idtemhum`),
  ADD KEY `Idempleados` (`Idempleados`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `educacionpaciente`
--
ALTER TABLE `educacionpaciente`
  MODIFY `Ideducacionpac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `inyectologia`
--
ALTER TABLE `inyectologia`
  MODIFY `Idinyectologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `limpieza`
--
ALTER TABLE `limpieza`
  MODIFY `Idlimpieza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `quejasreclamos`
--
ALTER TABLE `quejasreclamos`
  MODIFY `Idqr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `residuos`
--
ALTER TABLE `residuos`
  MODIFY `Idresiduos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Id_rol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `satisfaccióncliente`
--
ALTER TABLE `satisfaccióncliente`
  MODIFY `Idsatisfaccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temperaturahumedad`
--
ALTER TABLE `temperaturahumedad`
  MODIFY `Idtemhum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT `fk_empleadosdp` FOREIGN KEY (`Id_empleados:empleados`) REFERENCES `empleados` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_clienteqr` FOREIGN KEY (`cedulacliente`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recepciontecnica`
--
ALTER TABLE `recepciontecnica`
  ADD CONSTRAINT `fk_empleadosrt` FOREIGN KEY (`Id_empleados:empleados`) REFERENCES `empleados` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `residuos`
--
ALTER TABLE `residuos`
  ADD CONSTRAINT `fk_empleadosrs` FOREIGN KEY (`Idempleados`) REFERENCES `empleados` (`Idempleados`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_idempleados` FOREIGN KEY (`empcedula`) REFERENCES `empleados` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `satisfaccióncliente`
--
ALTER TABLE `satisfaccióncliente`
  ADD CONSTRAINT `fk_clientesat` FOREIGN KEY (`cedulacliente`) REFERENCES `persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `temperaturahumedad`
--
ALTER TABLE `temperaturahumedad`
  ADD CONSTRAINT `fk_empleadosth` FOREIGN KEY (`Idempleados`) REFERENCES `empleados` (`Idempleados`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

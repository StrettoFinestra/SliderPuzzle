-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2019 a las 22:39:13
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projectsdb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pf_sp_actualizar_usuario` (IN `param_id` SMALLINT(5) UNSIGNED, IN `param_nombre` VARCHAR(40), IN `param_apellido` VARCHAR(40), IN `param_usuario` VARCHAR(20), IN `param_clave` VARCHAR(20))  BEGIN 
    SET @s = CONCAT("UPDATE pf_usuarios SET ", 
                    "NOMBRE = '", param_nombre, "'" , " , " ,
                    "APELLIDO = '", param_apellido, "'" , " , " ,
                    "USUARIO = '", param_usuario, "'" , " , " ,
                    "CLAVE = '", param_clave, "'",           
                    "WHERE ID_USUARIO = '", param_id, "'" , ";");

    PREPARE stmt FROM @s;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pf_sp_consultar_resultados_usuario` (IN `param_id` SMALLINT UNSIGNED)  BEGIN

	SET @s = CONCAT("SELECT usuario, tiempo, cantidad_movimientos as movimientos, dificultad, DATE_FORMAT(fecha, '%H:%i:%s / %d-%m-%Y') as fecha \r\n                    FROM pf_usuarios a, pf_usuarios_resultados b \r\n                    WHERE a.id_usuario = b.id_usuario \r\n                    AND b.id_usuario = '", param_id, "'",
                    "ORDER BY tiempo ASC, \r\n                    cantidad_movimientos ASC, \r\n                    fecha ASC");
    
    PREPARE stmt FROM @s;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt; 
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pf_sp_consultar_top10` ()  BEGIN

	SET @s = CONCAT("SELECT usuario, tiempo, cantidad_movimientos as movimientos, dificultad, DATE_FORMAT(fecha, '%H:%i:%s / %d-%m-%Y') as fecha \r\n                    FROM pf_usuarios a, pf_usuarios_resultados b \r\n                    WHERE a.id_usuario = b.id_usuario \r\n                    ORDER BY tiempo ASC, \r\n                    cantidad_movimientos ASC, \r\n                    fecha ASC LIMIT 0,10");
    
    PREPARE stmt FROM @s;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt; 
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pf_sp_consultar_usuario` (IN `param_campo` VARCHAR(20), IN `param_centinela` INT)  BEGIN

IF param_centinela = 0 THEN
   SET @s = CONCAT("SELECT * FROM pf_usuarios\r\n                    WHERE usuario = '", param_campo, "'");
ELSE
   SET @s = CONCAT("SELECT * FROM pf_usuarios\r\n                    WHERE id_usuario = '", param_campo, "'");
END IF;

     PREPARE stmt FROM @s;
     EXECUTE stmt;
     DEALLOCATE PREPARE stmt;
     
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pf_sp_insertar_usuario` (IN `NOMBRE` VARCHAR(40), IN `APELLIDO` VARCHAR(40), IN `USUARIO` VARCHAR(20), IN `CLAVE` VARCHAR(20))  BEGIN

	SET @s = CONCAT("INSERT INTO `pf_usuarios` (`NOMBRE`, `APELLIDO`, `USUARIO`, `CLAVE`) VALUES ('" , NOMBRE , "', '" , APELLIDO , "', '" , USUARIO , "', '" , CLAVE , "');");
    
PREPARE stmt FROM @s;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pf_sp_insertar_usuarios_resultados` (IN `ID_USUARIO` INT, IN `TIEMPO` VARCHAR(40), IN `CANTIDAD_MOVIMIENTOS` INT, IN `FECHA` TIMESTAMP)  BEGIN

	SET @s = CONCAT("INSERT INTO `pf_usuarios_resultados` (`ID_USUARIO`, `TIEMPO`, `CANTIDAD_MOVIMIENTOS`, `FECHA`) VALUES ('" , ID_USUARIO , "', '" , TIEMPO , "', '" , CANTIDAD_MOVIMIENTOS , "', '" , FECHA , "');");
    
PREPARE stmt FROM @s;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pf_sp_validar_existentes` (IN `param_user` VARCHAR(255))  BEGIN

	SET @s = CONCAT("SELECT count(*) As contador FROM pf_usuarios\r\n                    WHERE usuario = '", param_user,  "'");
                    
     PREPARE stmt FROM @s;
     EXECUTE stmt;
     DEALLOCATE PREPARE stmt;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pf_sp_validar_usuario` (IN `param_user` VARCHAR(255), IN `param_pass` VARCHAR(255))  BEGIN

	SET @s = CONCAT("SELECT count(*) FROM pf_usuarios
                    WHERE usuario = '", param_user, "' AND clave = '", param_pass, "'");
                    
     PREPARE stmt FROM @s;
     EXECUTE stmt;
     DEALLOCATE PREPARE stmt;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pf_usuarios`
--

CREATE TABLE `pf_usuarios` (
  `ID_USUARIO` smallint(5) UNSIGNED NOT NULL,
  `NOMBRE` varchar(40) NOT NULL DEFAULT '',
  `APELLIDO` varchar(40) NOT NULL DEFAULT '',
  `USUARIO` varchar(20) NOT NULL DEFAULT '',
  `CLAVE` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pf_usuarios`
--

INSERT INTO `pf_usuarios` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `USUARIO`, `CLAVE`) VALUES
(1, 'Alexander', 'Almengor', 'user01', 'usJLhLYdM2Byk'),
(9, 'user', '02', 'user02', 'use/dgrrKjt7M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pf_usuarios_resultados`
--

CREATE TABLE `pf_usuarios_resultados` (
  `ID_USUARIO_RESULTADO` int(10) UNSIGNED NOT NULL,
  `ID_USUARIO` smallint(5) UNSIGNED NOT NULL,
  `TIEMPO` varchar(40) NOT NULL DEFAULT '0',
  `CANTIDAD_MOVIMIENTOS` int(11) NOT NULL DEFAULT 0,
  `PORCENTAJE_COMPLETADO` int(11) NOT NULL DEFAULT 100,
  `DIFICULTAD` varchar(20) NOT NULL DEFAULT 'Principiante',
  `FECHA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pf_usuarios_resultados`
--

INSERT INTO `pf_usuarios_resultados` (`ID_USUARIO_RESULTADO`, `ID_USUARIO`, `TIEMPO`, `CANTIDAD_MOVIMIENTOS`, `PORCENTAJE_COMPLETADO`, `DIFICULTAD`, `FECHA`) VALUES
(33, 9, '10:04:04', 45, 100, 'Principiante', '2019-12-11 20:06:56'),
(35, 9, '08:29:03', 26, 100, 'Principiante', '2019-12-12 20:04:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pf_usuarios`
--
ALTER TABLE `pf_usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indices de la tabla `pf_usuarios_resultados`
--
ALTER TABLE `pf_usuarios_resultados`
  ADD PRIMARY KEY (`ID_USUARIO_RESULTADO`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pf_usuarios`
--
ALTER TABLE `pf_usuarios`
  MODIFY `ID_USUARIO` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pf_usuarios_resultados`
--
ALTER TABLE `pf_usuarios_resultados`
  MODIFY `ID_USUARIO_RESULTADO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pf_usuarios_resultados`
--
ALTER TABLE `pf_usuarios_resultados`
  ADD CONSTRAINT `pf_usuarios_resultados_usu_usuresult` FOREIGN KEY (`ID_USUARIO`) REFERENCES `pf_usuarios` (`ID_USUARIO`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

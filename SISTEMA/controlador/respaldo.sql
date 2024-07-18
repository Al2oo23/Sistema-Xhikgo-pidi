CREATE DATABASE IF NOT EXISTS `chicago_fire`;
USE `chicago_fire`;


CREATE TABLE `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `codigo` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `lugar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `municipio` varchar(25) NOT NULL,
  `distancia` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `seccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `institucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `rif` varchar(25) NOT NULL,
  `descripcion` text DEFAULT 'Sin descripción',
  `logo` varchar(255) DEFAULT 'ruta/logo-por-defecto.png',
  `firma` varchar(255) DEFAULT 'ruta/firma-por-defecto.pdf',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `estacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `persona` (
  `cedula` varchar(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` int(4) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `tipo_persona` varchar(20) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `seccion` varchar(3) NOT NULL,
  `estacion` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `persona` (`cedula`, `nombre`, `edad`, `correo`, `telefono`, `direccion`, `sexo`, `tipo_persona`, `cargo`, `seccion`, `estacion`, `estado`) VALUES ('0', 'Cofla', '0', '?', '0', '?', '?', 'Supervisor', '?', '99', '?', 'A');


CREATE TABLE `tipo_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `usuario` (
  `cedula` varchar(15) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `pregunta` varchar(20) NOT NULL,
  `respuesta` varchar(20) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuario` (`cedula`, `nombre`, `clave`, `estado`, `pregunta`, `respuesta`) VALUES ('0', 'Cofla', 'Cofla', 'A', 'que paso', 'nada');


CREATE TABLE `privilegio` (
  `cedula` varchar(10) NOT NULL,
  `municipio` varchar(10) NOT NULL,
  `lugar` varchar(10) NOT NULL,
  `persona` varchar(10) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `cargo` varchar(10) NOT NULL,
  `estacion` varchar(10) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `usuarios` varchar(10) NOT NULL,
  `aseguradora` varchar(10) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `modelo` varchar(10) NOT NULL,
  `vehiculo` varchar(10) NOT NULL,
  `mantenimiento` varchar(10) NOT NULL,
  `recurso` varchar(10) NOT NULL,
  `agregar` varchar(10) NOT NULL,
  `eliminar` varchar(10) NOT NULL,
  `incendio` varchar(10) NOT NULL,
  `transito` varchar(10) NOT NULL,
  `abejas` varchar(10) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `aviso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `aviso` (`id`, `nombre`) VALUES ('1', 'Gritoss');


CREATE TABLE `tipo_incidente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `incidente` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tipo_incidente` (`id`, `incidente`) VALUES ('1', 'Ayudame');


CREATE TABLE `modelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `seguro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `recurso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cantidad` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `vehiculo` (
  `niv` int(100) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `serial_vehiculo` int(20) NOT NULL,
  `cilindrada` varchar(20) NOT NULL,
  `carburante` varchar(20) NOT NULL,
  `seguro` varchar(20) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  PRIMARY KEY (`niv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `mantenimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidad` int(100) NOT NULL,
  `incidente` varchar(20) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidad` int(100) NOT NULL,
  `incidente` varchar(20) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `abejas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(100) NOT NULL,
  `seccion` varchar(20) NOT NULL,
  `estacion` varchar(20) NOT NULL,
  `aviso` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `salida` varchar(20) NOT NULL,
  `llegada` varchar(20) NOT NULL,
  `regreso` varchar(20) NOT NULL,
  `panal` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `lugar` varchar(20) NOT NULL,
  `inmueble` varchar(20) NOT NULL,
  `jefe` varchar(20) NOT NULL,
  `recurso` varchar(20) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `efectivo` varchar(20) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `ci_pnb` varchar(20) DEFAULT NULL,
  `ci_gnb` varchar(20) DEFAULT NULL,
  `ci_intt` varchar(20) DEFAULT NULL,
  `ci_invity` varchar(20) DEFAULT NULL,
  `ci_pc` varchar(20) DEFAULT NULL,
  `ci_otro` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `transito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(100) NOT NULL,
  `seccion` int(7) NOT NULL,
  `estacion` varchar(20) NOT NULL,
  `emergencia` varchar(40) NOT NULL,
  `inspeccion` varchar(4) NOT NULL,
  `incidente` varchar(20) NOT NULL,
  `taviso` varchar(20) NOT NULL,
  `solicitante` varchar(11) NOT NULL,
  `recibidor` varchar(11) NOT NULL,
  `aviso` varchar(20) NOT NULL,
  `salida` varchar(20) NOT NULL,
  `llegada` varchar(20) NOT NULL,
  `regreso` varchar(20) NOT NULL,
  `vehiculo` varchar(20) NOT NULL,
  `lesionados` int(3) NOT NULL,
  `occisos` int(3) NOT NULL,
  `observaciones` varchar(20) NOT NULL,
  `incendio` varchar(3) NOT NULL,
  `recurso` varchar(20) NOT NULL,
  `cantidad` varchar(3) NOT NULL,
  `jefe` varchar(20) NOT NULL,
  `efectivo` varchar(20) NOT NULL,
  `unidad` int(3) NOT NULL,
  `pnb` int(11) NOT NULL,
  `gnb` int(11) NOT NULL,
  `intt` int(11) NOT NULL,
  `invity` int(11) NOT NULL,
  `pc` int(11) NOT NULL,
  `otros` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `incendio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(100) NOT NULL,
  `seccion` varchar(100) NOT NULL,
  `estacion` varchar(100) NOT NULL,
  `tipo_aviso` varchar(100) NOT NULL,
  `solicitante` varchar(100) NOT NULL,
  `receptor` varchar(100) NOT NULL,
  `aprobador` varchar(100) NOT NULL,
  `hora_aviso` varchar(100) NOT NULL,
  `hora_salida` varchar(100) NOT NULL,
  `hora_llegada` varchar(100) NOT NULL,
  `hora_regreso` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `paredes` varchar(100) NOT NULL,
  `techo` varchar(100) NOT NULL,
  `piso` varchar(100) NOT NULL,
  `ventanas` varchar(100) NOT NULL,
  `puertas` varchar(100) NOT NULL,
  `otros_materiales` varchar(100) NOT NULL,
  `propietario` varchar(100) NOT NULL,
  `valor_inmueble` varchar(100) NOT NULL,
  `num_residenciados` varchar(100) NOT NULL,
  `ninos` varchar(100) NOT NULL,
  `adolescentes` varchar(100) NOT NULL,
  `adultos` varchar(100) NOT NULL,
  `info_adicional` varchar(100) NOT NULL,
  `asegurado` varchar(100) NOT NULL,
  `aseguradora` varchar(100) NOT NULL,
  `num_poliza` varchar(100) NOT NULL,
  `valor_asegurado` varchar(100) NOT NULL,
  `valor_perdido` varchar(100) NOT NULL,
  `valor_salvado` varchar(100) NOT NULL,
  `fuente_ignicion` varchar(100) NOT NULL,
  `causa_incendio` varchar(100) NOT NULL,
  `lugar_inicio` varchar(100) NOT NULL,
  `lugar_fin` varchar(100) NOT NULL,
  `reignicion` varchar(100) NOT NULL,
  `tipo_combustible` varchar(100) NOT NULL,
  `declaracion` varchar(100) NOT NULL,
  `lesionados` varchar(100) NOT NULL,
  `num_lesionados` varchar(100) NOT NULL,
  `datos_lesionados` varchar(100) NOT NULL,
  `recurso_utilizado` varchar(100) NOT NULL,
  `cantidad_recurso_usado` varchar(100) NOT NULL,
  `unidad` varchar(100) NOT NULL,
  `jefe_comision` varchar(100) NOT NULL,
  `efectivo` varchar(100) NOT NULL,
  `ci_pnb` varchar(100) DEFAULT NULL,
  `ci_gnb` varchar(100) DEFAULT NULL,
  `ci_intt` varchar(100) DEFAULT NULL,
  `ci_invity` varchar(100) DEFAULT NULL,
  `ci_pc` varchar(100) DEFAULT NULL,
  `ci_otro` varchar(100) DEFAULT NULL,
  `observaciones` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


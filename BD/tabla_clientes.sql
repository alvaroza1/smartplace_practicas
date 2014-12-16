CREATE TABLE `clientes` (
  `id` varchar(45) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `rfc` varchar(20) DEFAULT NULL,
  `regimen` varchar(100) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) NOT NULL,
  `contacto` varchar(45) NOT NULL,
  `base_datos` varchar(45) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `eliminado` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `clientes` (`id`, `nombre`, `razon_social`, `rfc`, `regimen`, `correo`, `telefono`, `celular`, `contacto`, `base_datos`, `fecha_inicio`, `fecha_fin`, `eliminado`)
VALUES
  ('1', 'Alvaro', 'asdasdasd', 'stz0206', 'adasd', 'asdasd', 'asdasd', 'asdasda', 'asdasd', 'adasd', '2014-01-01', '2016-02-28', 0),
  ('2', 'Chava', 'asdas', 'asdas', 'asdasd', 'asdas', 'asdas', 'asdad', 'asdasd', 'asdasda', '2014-01-01', '2016-07-02', 0);

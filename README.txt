modificdo nombre tabla categoria --> categorias
bd.php modificada linea 64 categoria -> CodCat
correo.php modificada ruta autoload.php 
instalado phpmailer
bd.php linea 104 corregido nombre columnas CodPed y CodProd
modificado carrtio.php guarda cambiada por array();
-----
Añadid columna Rol tipo INT(1) a la tabla restaurantes:
	0 -> Restaurante
	1 -> Gestor de pedidos
	2 -> Administrador
	
Añadidos datos de prueba:
INSERT INTO `restaurantes`(`Correo`, `Clave`, `Pais`, `CP`, `Ciudad`, `Direccion`, `Rol`) VALUES ('pedidos@empresa.com','1234','España','28014','Madrid','Calle Ruiz de Alarcon, 23','1')
INSERT INTO `restaurantes`(`Correo`, `Clave`, `Pais`, `CP`, `Ciudad`, `Direccion`, `Rol`) VALUES ('admin@empresa.com','1234','España','28014','Madrid','Calle Ruiz de Alarcon, 23','2');
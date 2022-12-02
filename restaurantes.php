<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();

	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Tabla de restaurantes</title>		
	</head>
	<body>
		<?php 
		require 'cabecera.php';
		$pedidos = cargar_restaurantes();		
		if($pedidos === FALSE){
			echo "<p class='error'>Error al conectar con la base datos</p>";
			exit;
		}
		echo "<h1>". "Restaurantes". "</h1>";	
		echo "<table>"; //abrir la tabla
		echo "<tr><th>Correo</th><th>Clave</th><th>Pais</th><th>CP</th><th>Ciudad</th><th>Direccion</th><th>Rol</th><th>Modificar</th></tr>";
		foreach($pedidos as $pedido){
			$CodRes = $pedido['CodRes'];
			$Correo = $pedido['Correo'];
			$Clave = $pedido['Clave'];
			$Pais = $pedido['Pais'];		
			$CP = $pedido['CP'];
			$Ciudad = $pedido['Ciudad'];
			$Direccion = $pedido['Direccion'];
			$Rol = $pedido['Rol'];			
			echo "<tr><form action = 'modificar.php' method = 'POST'>
			<td><input type='text' name=Correo value=$Correo></td><td><input type='text' name=Clave value=$Clave></td><td><input type='text' name=Pais value=$Pais></td><td><input type='text' name=CP value=$CP></td><td><input type='text' name=Ciudad value=$Ciudad></td><td><input type='text' name=Direccion value=$Direccion></td><td><input type='text' name=Rol value=$Rol></td>
			<td>
			<input type = 'submit' value='Modifica'><input name = 'cod' type='hidden' value = '$CodRes'>
			</td></form></tr>";
		}
		echo "</table>"	;	
		echo "<h5> Nuevo usuario</h5>";
		echo "<table><tr><form action = 'crear.php' method = 'POST'>
			<td><input type='text' name=Correo ></td><td><input type='text' name=Clave ></td><td><input type='text' name=Pais ></td><td><input type='text' name=CP ></td><td><input type='text' name=Ciudad ></td><td><input type='text' name=Direccion ></td><td><input type='text' name=Rol ></td>
			<td>
			<input type = 'submit' value='Crea'>
			</td></form></tr></table>";
		
		?>				
	</body>
</html>
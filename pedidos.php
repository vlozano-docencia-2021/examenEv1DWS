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
		<title>Tabla de pedidos</title>		
	</head>
	<body>
		<?php 
		require 'cabecera.php';
		$pedidos = cargar_restaurantes();		
		if($pedidos === FALSE){
			echo "<p class='error'>Error al conectar con la base datos</p>";
			exit;
		}
		echo "<h1>". "Pedidos". "</h1>";	
		echo "<table>"; //abrir la tabla
		echo "<tr><th>CodPed</th><th>Fecha</th><th>Enviado</th><th>Restaurante</th><th>Cambiar Estado</th></tr>";
		foreach($pedidos as $pedido){
			$CodPed = $pedido['CodPed'];
			$Fecha = $pedido['Fecha'];
			$Enviado = $pedido['Enviado'];
			$Restaurante = $pedido['Restaurante'];								
			echo "<tr><td>$CodPed</td><td>$Fecha</td><td>$Enviado</td><td>$Restaurante</td>
			<td><form action = 'cambiar_estado.php' method = 'POST'>
			<input type = 'submit' value='Cambiar estado'><input name = 'cod' type='hidden' value = '$CodPed'>
			</form></td></tr>";
		}
		echo "</table>"	;	
		?>				
	</body>
</html>
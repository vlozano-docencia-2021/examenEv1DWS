<header>
 Usuario: <?php echo $_SESSION['usuario']['correo']?>
 <?php 
	$rol = $_SESSION["usuario"]["Rol"];
	if($rol==0){
?>
 <a href="categorias.php">Home</a>
 <a href="carrito.php">Ver carrito</a> 
<?php
	}
	if($rol==1){
?>
 <a href="pedidos.php">Ver Pedidos</a>
<?php
	}
	if($rol==2){
?>
 <a href="restaurantes.php">Ver Restaurantes</a>
<?php
	}
?>
 
 
 <a href="logout.php">Cerrar sesión</a>
</header>
<hr>
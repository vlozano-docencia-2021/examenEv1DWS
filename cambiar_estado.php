<?php

require_once 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();

$cod = $_POST['cod'];
$res = cambiar_estado($cod);

header("Location: pedidos.php");

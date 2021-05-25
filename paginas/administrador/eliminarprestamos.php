<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: ../login.html");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Menu Administrador</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../css/temas.css">
		<link rel="stylesheet" href="../../css/bootstrap.css">
		<link rel="stylesheet" href="../../css/w3.css">
		<link rel="stylesheet" href="../../css/estilo.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
    <body>

		<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
			<a href="../../menu.php" class="w3-bar-item w3-button">Menu</a>
			<a href="../prestamos.php" class="w3-bar-item w3-button">Prestamos</a>
			<a href="../historial/historial.php" class="w3-bar-item w3-button">Historial</a>
			<a href="../mostrar-datos.php" class="w3-bar-item w3-button">Inventario</a>
			<a href="../logout.php" class="w3-bar-item w3-button">Cerrar Sesion</a>
			<a href="menu-administrador.php" class="w3-bar-item w3-button">Menu Administrador</a> 
			<button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
		</nav>
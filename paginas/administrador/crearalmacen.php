<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.html");
}
?>
<html>
	<head>
		<title>Crear Almacen</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../css/temas.css">
		<link rel="stylesheet" href="../../css/bootstrap.css">
		<link rel="stylesheet" href="../../css/w3.css">
		<link rel="stylesheet" href="../../css/estilo.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body class="cabecera">
	
		<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none; color:black;" id="mySidebar">
			<a href="../../menu.php" class="w3-bar-item w3-button">Menu</a>
			<a href="../prestamos.php" class="w3-bar-item w3-button">Prestamos</a>
			<a href="../historial/historial.php" class="w3-bar-item w3-button">Historial</a>
			<a href="../mostrar-datos.php" class="w3-bar-item w3-button">Inventario</a>
			<a href="../logout.php" class="w3-bar-item w3-button">Cerrar Sesion</a>
			<a href="menu-administrador.php" class="w3-bar-item w3-button">Menu Administrador</a> 
			<button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
		</nav>
		
		<header class="cabecera" id="myHeader">
			<i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
		</header>
		
		<div class="w3-row-padding  w3-margin-top W3-center w3-auto W3-theme-white w3-display-middle  w3-card-4">
			<div class="w3-center">
				<div class=" w3-container contenedor1 " style="min-height:460px">
					<h1 class="w3-xxxlarge w3-animate-left">Crear nuevo almacen</h1><br>
					<img class="w3-margin-bottom w3-card w3-circle" src="../../img/logo.png" alt="logo" width="200" height="200"/><br>
					<!--
					<a href="./anadir-usuarios.php">Crear Usuarios
					<a href="./anadir-almacenes.php">Crear Almacenes <br>
					<a href="./eliminar-usuario.php">Eliminar Usuarios
					<a href="./eliminar-almacen.php">Eliminar Almacenes </a>
					-->
					

					<form class="w3-animate-right w3-large "  action="anadir-almacen.php" method="POST">
						<label for="articulo">Nombre almacen:</label><br>
						<input type="text" id="almacen" class="fadeIn second " name="almacen" placeholder="Nombre almacen"><br><br>
						
						<input type="submit" class="fadeIn fourth w3-card-4 " value="Enviar Aviso" name="enviar" style="background-color:#b0db6b">
					</form>
					
				</div>
			</div>
		</div>
		
		<?php

			if(isset($_POST['enviar'])){ 

			$almacen= $_POST["almacen"] ;

			$enlace = mysqli_connect("localhost", "root", "", "almacenes");
			if (!$enlace) {
				ie("No pudo conectarse: " . mysql_connect_error());
			}

			$insert = "INSERT INTO almacenes.almacen (`lugar`) VALUES ('$almacen');";

			if (mysqli_query($enlace, $insert)) {
				echo "<script type='text/javascript'>alert('Almacen creado correctamente');</script>";
			} else {
				echo "<script type='text/javascript'>alert('Error al crear el almacen');</script>";
			};

			mysqli_close($enlace);

			};
		?>
		
		<script>
			function w3_open() {
				var x = document.getElementById("mySidebar");
				x.style.width = "700px";
				x.style.fontSize = "40px";
				x.style.paddingTop = "10%";
				x.style.display = "block";
			}
			function w3_close() {
				document.getElementById("mySidebar").style.display = "none";
			}


			function openCity(evt, cityName) {
				var i;
				var x = document.getElementsByClassName("city");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				var activebtn = document.getElementsByClassName("testbtn");
				for (i = 0; i < x.length; i++) {
					activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
				}
				document.getElementById(cityName).style.display = "block";
				evt.currentTarget.className += " w3-dark-grey";
			}

			var mybtn = document.getElementsByClassName("testbtn")[0];
			mybtn.click();

			function myAccFunc(id) {
				var x = document.getElementById(id);
				if (x.className.indexOf("w3-show") == -1) {
					x.className += " w3-show";
				} else { 
					x.className = x.className.replace(" w3-show", "");
				}
			}

			var slideIndex = 1;

			function plusDivs(n) {
				slideIndex = slideIndex + n;
				showDivs(slideIndex);
			}

			function showDivs(n) {
				var x = document.getElementsByClassName("mySlides");
				if (n > x.length) {slideIndex = 1}    
				if (n < 1) {slideIndex = x.length} ;
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";  
				}
				x[slideIndex-1].style.display = "block";  
			}

			showDivs(1);

			function move() {
				var elem = document.getElementById("myBar");   
				var width = 5;
				var id = setInterval(frame, 10);
				function frame() {
					if (width == 100) {
						clearInterval(id);
					} else {
						width++; 
						elem.style.width = width + '%'; 
						elem.innerHTML = width * 1  + '%';
					}
				}
			}
		</script>
		
	</body>
</html>

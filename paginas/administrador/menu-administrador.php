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
	  
		<header class="cabecera" id="myHeader">
			<i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
			<div class="w3-center">
				<img src="../../img/logo.png" alt="" width="100" height="100"/>
				<h1 class="w3-xxxlarge w3-animate-bottom"><b>MENU</b></h1>
				<h1 class="w3-xxxlarge w3-animate-bottom"><b>ADMINISTRADOR</b></h1>
				<div class="w3-padding-16"/>
				<a href="paginas/menu-usuario.php"><h1 class="w3-display-topright w3-xlarge w3-card"> Usuario: <?php echo $_SESSION['nombre']; ?></h1></a>
			</div>
		</header>
		
	  
		</header>	  
		<div class="w3-row-padding w3-center w3-margin-top">

			<a href="crearalmacen.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Añadir Almacenes</b></h3>
						<br>
						<i class="fa fa-indent w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
			
			<a href="crearusuario.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Añadir Usuarios</b></h3>
						<br>
						<i class="fa fa-plus-square w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
			
			<a href="../prestamos.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Añadir préstamos</b></h3>
						<br>
						<i class="fa fa-check-square-o w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
			
			<a href="eliminaralmacen.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Eliminar Almacenes</b></h3>
						<br>
						<i class="fa fa-dedent w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
			
			<a href="eliminarusuario.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Eliminar Usuarios</b></h3>
						<br>
						<i class="fa fa-minus-square w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
			
			<a href="eliminarprestamos.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Eliminar préstamos</b></h3>
						<br>
						<i class="fa fa-minus-square-o w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
			
			<a href="editaralmacenes.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Editar Almacenes</b></h3>
						<br>
						<i class="fa fa-cut w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
			
			<a href="editarusuarios.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Editar Usuarios</b></h3>
						<br>
						<i class="fa fa-gear w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
			
			<a href="editarprestamos.php">
				<div class="w3-third">
					<div class="w3-card w3-container" style="min-height:18vh">
						<h3><b>Editar préstamos</b></h3>
						<br>
						<i class="fa fa-clipboard w3-margin-bottom w3-text-theme" style="font-size:12vh"></i>
					</div>
				</div>
			</a>
		
		</div>
  

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
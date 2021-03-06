<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.html");
}
$user=$_SESSION["login"];
?>
<html>
	<head>
		<title>Menu Usuario</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/temas.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/w3.css">
		<link rel="stylesheet" href="../css/estilo.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	<body>
   	<h1 class="w3-display-topright w3-xlarge w3-text-white"> Usuario: <?php echo $_SESSION['nombre']; ?></h1>

		<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
			<a href="../menu.php" class="w3-bar-item w3-button">Menu</a>
			<a href="login.html" class="w3-bar-item w3-button">Login</a>
			<a href="prestamos.php" class="w3-bar-item w3-button">Prestamos</a>
			<a href="historial/historial.php" class="w3-bar-item w3-button">Historial</a>
			<a href="mostrar-datos.php" class="w3-bar-item w3-button">Inventario</a> 
			<a href="logout.php" class="w3-bar-item w3-button">Cerrar Sesion</a>
			<a href="administrador/menu-administrador.php" class="w3-bar-item w3-button">Menu Administrador</a>
			<button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
		</nav>
		<header class="cabecera" id="myHeader">
			<i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
			<div class="w3-center">
				<img src="../img/logo.png" alt="" width="100" height="100"/>
				<h1 class="w3-xxxlarge w3-animate-bottom"><b>Cuenta de</b></h1>
				<h1 class="w3-xxxlarge w3-animate-bottom"><b>Usuario</b></h1>
				<div class="w3-padding-16"/>
			</div>
		</header>
		
		<a>
			<div class="w3-half">
				<div class="w3-card w3-container w3-center" style="min-height:460px">
					<h1><b class="w3-center">Datos de Usuario</b></h1>
					<p class="fa fa-user w3-center" style="font-size:100px"></p>
					<br>
					<b>
					
							<p>Nombre: <?php echo $_SESSION['nombre']; ?></h1></p>
							<p>Apellidos: <?php echo $_SESSION['apellidos']; ?></h1></p>
							<p>Telefono: <?php echo $_SESSION['telefono']; ?></h1></p>
							<p>Tipo: <?php echo $_SESSION['permisos']; ?></h1><p>
						</p>
					</b>
					
					
				</div>
			</div>
		</a>
		
		<a>
			<div class="w3-half">
				<div class="w3-card w3-container" style="min-height:460px">
				<?php

					if (!$conect = mysqli_connect("localhost", "root", "", "almacenes")) {
						
						die("No se pudo crear la conexi&oacute al SGBD");
					}
					
					$consulta = "SELECT reserva.idReserva, reserva.idUsuario,articulo.nombre, almacen.lugar, reserva.cantidad, reserva.fecha_recogida, reserva.fecha_devolucion FROM almacenes.almacen JOIN almacenes.articulo JOIN almacenes.reserva WHERE  reserva.idArticulo = articulo.idArticulo and almacen.idAlmacen = articulo.idAlmacen and reserva.idUsuario = '$user' order by nombre";
					$resultado = mysqli_query($conect, $consulta);
					
					if (!$resultado) {
						
						echo "<p>Error en la consulta.</p>";
						
					} else {
						
						echo "<h1>Listado del historial del Usuario:</h1>\n
						<table border=\"1\">
							<thead>
								<tr>
									<th width=\"50\">id</th>
									<th width=\"50\">Usuario</th>
									<th width=\"50\">Nombre</th>
									<th width=\"50\">Almacen</th>
									<th width=\"100\">Cantidad</th>
									<th width=\"100\">Fecha Recogida</th>
									<th width=\"100\">Fecha Devolucion</th>
									
								</tr>
							</thead>";
							
						while ($valor = mysqli_fetch_array($resultado)) {
							
							echo "	<tr>\n
									<td>$valor[idReserva]</td>
									<td>$valor[idUsuario]</td>
									<td>$valor[nombre]</td>
									<td>$valor[lugar]</td>
									<td>$valor[cantidad]</td>
									<td>$valor[fecha_recogida]</td>
									<td>$valor[fecha_devolucion]</td>									
							</tr>\n";
						}
						
						echo "</table>\n";
						
					}
					
					mysqli_free_result($resultado);
					
					
					?>
			</div>
		</a>
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
			function alerta()
				{
				var mensaje;
				var opcion = confirm("Clicka en Aceptar o Cancelar");
				if (opcion == true) {
					mensaje = "Has clickado OK";
				} else {
					mensaje = "Has clickado Cancelar";
				}
				document.getElementById("ejemplo").innerHTML = mensaje;
			}
			
		</script>
   </body>
</html>
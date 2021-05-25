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
			<a href="../menu-usuario.php"><h1 class="w3-display-topright w3-xlarge w3-card"> Usuario: <?php echo $_SESSION['nombre']; ?></h1></a>
			<div class="w3-center">
				<img src="../../img/logo.png" alt="" width="100" height="100"/>
				<h1 class="w3-xxxlarge w3-animate-bottom"><b>Eliminar Almacen</b></h1>
				<div class="w3-padding-16"/>
			</div>
		</header>
		
		<a>
			<div class="w3-half">
				<div class="w3-card w3-container" style="min-height:460px">
					<h3><b>Eliminar Almacen</b></h3>
					<br>
					<b>
						<p>
						Rellena esto con el id del almacen ha eliminar.
						</p>
					</b>
					
					<form class="w3-animate-right w3-large "  action="eliminaralmacen.php" method="POST">
					
						<label for="id_articulo">Indica el id del almacen</label><br>
						<input type="text" id="idalmacen" class="fadeIn second " name="idalmacen" placeholder="Id del almacen"><br><br>
						
						<input type="submit" class="fadeIn fourth w3-card-4 " value="Enviar" name="enviar" style="background-color:#b0db6b" onclick="alerta"><br><br>
					</form>
					
				</div>
			</div>
		</a>
		
		<?php

			if(isset($_POST['enviar'])){ 

			$idalmacen= $_POST["idalmacen"] ;

			$enlace = mysqli_connect("localhost", "root", "", "almacenes");
			if (!$enlace) {
				ie("No pudo conectarse: " . mysql_connect_error());
			}

			$delete = "DELETE FROM almacenes.almacen WHERE `idAlmacen` = '$idalmacen';";

			if (mysqli_query($enlace, $delete)) {
				echo "<script type='text/javascript'>alert('Almacen eliminado correctamente');</script>";
			} else {
				echo "<script type='text/javascript'>alert('Error al eliminar el almacen');</script>";
			};

			mysqli_close($enlace);

			};
		?>
		
		<a>
			<div class="w3-half">
				<div class="w3-card w3-container" style="min-height:460px">
					<h3><b>Tabla Almacenes</b></h3>
					<br>
					<b>
					
					<tr class="w3-bar">
					
					<form class="w3-animate-right w3-large "  action="eliminaralmacen.php" method="POST">
					</tr>
					</form>
						<p>
						
						<?php
						
						if (!$conect = mysqli_connect("localhost", "root", "", "almacenes")) {
						
						die("No se pudo crear la conexi&oacute al SGBD");
						}
						
						$consulta = "SELECT * FROM almacenes.almacen;";
						$resultado = mysqli_query($conect, $consulta);
						
						if (!$resultado) {
							
							echo "<p>Error en la consulta.</p>";
							
						} else {
							
							echo "<p>Listado completo de almacenes:</p>
							
							<table border='1'>
								<thead>
									<tr>
											<th width='30'>Id Almacen</th>
											<th width='120'>Almacen</th>
											
									</tr>
								</thead>";
								
							while ($valor = mysqli_fetch_array($resultado)) {
								
								echo "
									<tr>
										<td>$valor[idAlmacen]</td>
										<td>$valor[lugar]</td>
										
									</tr>";
							}
							
							echo "</table>\n";
							
						}
						
						mysqli_free_result($resultado);
						
						
						
						?>
						
						</p>
					</b>
				</div>
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
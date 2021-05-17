<html>
    <title>ALMACENES ALBERICIA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/temas.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" href="../css/estilo.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<body>
   
		<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
			<a href="../menu.html" class="w3-bar-item w3-button">Menu</a>
			<a href="login.html" class="w3-bar-item w3-button">Login</a>
			<a href="prestamos.html" class="w3-bar-item w3-button">Prestamos</a>
			<a href="historial.php" class="w3-bar-item w3-button">Historial</a>
			<a href="mostrar-datos.php" class="w3-bar-item w3-button">Inventario</a> 
			<button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
		</nav>
	  
		<header class="cabecera" id="myHeader">
			<i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
			<div class="w3-center">
				<img src="../img/logo.png" alt="" width="100" height="100"/>
				<h1 class="w3-xxxlarge w3-animate-bottom"><b>Avisar por un</b></h1>
				<h1 class="w3-xxxlarge w3-animate-bottom"><b>Prestamo</b></h1>
				<div class="w3-padding-16"/>
			</div>
		</header>
		
		<a>
			<div class="w3-half">
				<div class="w3-card w3-container" style="min-height:460px">
					<h3><b>Formulario</b></h3>
					<br>
					<b>
						<p>
						Rellena esto con los datos de tu toma de objetos
						</p>
					</b>
					
					<form class="w3-animate-right w3-large "  action="comprobacion.php" method="POST">
					
						<label for="id_articulo">Indica el id del objeto que vas a tomar</label><br>
						<input type="text" id="id_articulo" class="fadeIn second " name="id_articulo" placeholder="id del articulo"><br><br>
						
						<label for="cantidad_articulo">Indica la cantidad que vas a tomar</label><br>
						<input type="text" id="cantidad_articulo" class="fadeIn second " name="cantidad_articulo" placeholder="cantidad de articulos"><br><br>
						
						<label for="detalles">Introduce detalles de importancia</label><br>						
						<textarea rows="4" cols="20" name="detalles" id="detalles"></textarea><br><br>
						
						<label for="fecha_toma">Fecha de toma</label><br>
						<input type="datetime-local" id="telefono" class="fadeIn second " name="telefono"><br><br>
						
						<label for="fecha_vuelta">Fecha de vuelta</label><br>
						<input type="datetime-local" id="direccion1" class="fadeIn second " name="direccion1"><br><br>

						<input type="submit" class="fadeIn fourth w3-card-4 " value="Enviar Aviso" style="background-color:#b0db6b"><br><br>
					</form>
					
				</div>
			</div>
		</a>
		
		<a>
			<div class="w3-half">
				<div class="w3-card w3-container" style="min-height:460px">
					<h3><b>Objetos Disponibles</b></h3>
					<br>
					<b>
						<p>
						
						<?php
						
						if (!$conect = mysqli_connect("localhost", "root", "", "almacenes")) {
						
						die("No se pudo crear la conexi&oacute al SGBD");
						}
						
						$consulta = "SELECT
										articulo.idArticulo,
										articulo.nombre,
										articulo.cantidad,
										articulo.detalles
									FROM
										almacenes.almacen
									JOIN
										almacenes.articulo
									WHERE
										articulo.idAlmacen = 1
									GROUP BY idArticulo";
						$resultado = mysqli_query($conect, $consulta);
						
						if (!$resultado) {
							
							echo "<p>Error en la consulta.</p>";
							
						} else {
							
							echo "<p>Listado completo de articulos:</p>
							
							<table border='1'>
								<thead>
									<tr>
											<th width='30'>id Articulo</th>
											<th width='120'>nombre</th>
											<th width='30'>cantidad</th>
											<th width='120'>detalles</th>
									</tr>
								</thead>";
								
							while ($valor = mysqli_fetch_array($resultado)) {
								
								echo "
									<tr>
										<td>$valor[idArticulo]</td>
										<td>$valor[nombre]</td>
										<td>$valor[cantidad]</td>
										<td>$valor[detalles]</td>
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
				x.style.width = "400px";
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
<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.html");
}
?>
<html>

	<title>Inventario del almacen</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/temas.css">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<body class="cabecera">
	<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none; color:black" id="mySidebar">
			<a href="../menu.php" class="w3-bar-item w3-button">Menu</a>
			<a href="prestamos.php" class="w3-bar-item w3-button">Prestamos</a>
			<a href="historial/historial.php" class="w3-bar-item w3-button">Historial</a>
			<a href="mostrar-datos.php" class="w3-bar-item w3-button">Inventario</a>
			<a href="administrador/menu-administrador.php" class="w3-bar-item w3-button">Menu Administrador</a>
			<a href="logout.php" class="w3-bar-item w3-button">Cerrar Sesion</a>
			<button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
		</nav>
		<header class="cabecera" id="myHeader">
			<i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
			<a href="menu-usuario.php"><h1 class="w3-display-topright w3-xlarge w3-card"> Usuario: <?php echo $_SESSION['nombre']; ?></h1></a>
		</header>
		<div class="w3-row-padding  w3-margin-top W3-center w3-auto ">
			<div class="w3-center">
				<div class=" w3-container  " style="min-width:100%">
					<h1 class="w3-xxxlarge w3-animate-left">Inventario</h1>
					<img class="w3-margin-bottom w3-card w3-circle" src="../img/logo.png" alt="logo" width="200" height="200"/><br>
					
	<form method="POST" action="mostrar-datos.php" onSubmit="return validarForm(this)">
 
		<input type="text" placeholder="Buscar" id="palabra" name="palabra">
		
		<input type="submit" value="Buscar" name="buscar" class="fadeIn fourth w3-card-4" style="background-color:#b0db6b" onclick="w3_open()">
	</form> 	
<div class="portatablas ">

	
 
		 <table border='1' class="w3-card w3-center">
								<tr>	<th width='30'>Id</th>
										<th width='120'>Almacen</th>
										<th width='120'>nombre</th>
										<th width='30'>cantidad</th>
										<th width='120'>detalles</th>
								</tr>
 <?php
		if(isset($_POST['palabra'])) {
					   $buscar = $_POST["palabra"];
						$conect2 = mysqli_connect("localhost", "root", "", "almacenes");
 $consulta2= mysqli_query ($conect2,"SELECT articulo.*, almacen.lugar FROM articulo LEFT JOIN almacen ON articulo.idAlmacen = almacen.Idalmacen WHERE articulo.nombre like '%$buscar%' or articulo.detalles like '%$buscar%' or almacen.lugar like '%$buscar%' or articulo.idArticulo = '$buscar'");					
			while($registro = mysqli_fetch_array($consulta2)) 
		{
           ?> 
		  
							
								<tr>	<th width='30'></th>
										<th width='120'></th>
										<th width='30'></th>
										<th width='120'></th>
								</tr>
							
				<td class="estilo-tabla" align="center" width='30'><?=$registro['idArticulo']?></td>
               <td class="estilo-tabla" align="center" width='150'><?=$registro['lugar']?></td>
			    <td class="estilo-tabla" align="center" width='30'><?=$registro['nombre']?></td>
               <td class=”estilo-tabla” align="center" width=' fit-content'><?=$registro['cantidad']?></td>
			   <td class=”estilo-tabla” align="center" width=' fit-content'><?=$registro['detalles']?></td>
           
           <?php 
       }
		}
    ?>
    </table>

	
	
					
					

					<?php

					if (!$conect = mysqli_connect("localhost", "root", "", "almacenes")) {
						
						die("No se pudo crear la conexi&oacute al SGBD");
					}
					
					$consulta = "SELECT articulo.*, almacen.lugar FROM articulo LEFT JOIN almacen ON articulo.idAlmacen = almacen.Idalmacen";
					$resultado = mysqli_query($conect, $consulta);
					
					if (!$resultado) {
						
						echo "<p>Error en la consulta.</p>";
						
					} else {
						
						echo "<h1>Listado completo de articulos:</h1>
						
						<table border='1'>
							<thead>
								<tr>	<th width='30'>idArticulo</th>
										<th width='120'>Almacen</th>
										<th width='120'>nombre</th>
										<th width='30'>cantidad</th>
										<th width='120'>detalles</th>
								</tr>
							</thead>";
							
						while ($valor = mysqli_fetch_array($resultado)) {
							
							echo "
								<tr>
									<td>$valor[idArticulo]</td>
									<td>$valor[lugar]</td>
									<td>$valor[nombre]</td>
									<td>$valor[cantidad]</td>
									<td>$valor[detalles]</td> 
								</tr>";
						}
						
						echo "</table>\n";
						
					}
					
					mysqli_free_result($resultado);
					
					?>
					
 

					
					</div>
				</div>
			</div>
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
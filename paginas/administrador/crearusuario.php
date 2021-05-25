<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: ../login.html");
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Crear Usuario</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../css/temas.css">
		<link rel="stylesheet" href="../../css/bootstrap.css">
		<link rel="stylesheet" href="../../css/w3.css">
		<link rel="stylesheet" href="../../css/estilo.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<a href="../menu-usuario.php"><h1 class="w3-display-topright w3-xlarge w3-card"> Usuario: <?php echo $_SESSION['nombre']; ?></h1></a>
		</header>
		<div class="w3-row-padding  w3-margin-top W3-center w3-auto W3-theme-white w3-display-middle  w3-card-4">
            <div class="w3-center">
                <div class=" w3-container contenedor1 " style="min-height:460px">
                    <h1 class="w3-xxxlarge w3-animate-left">Crear nuevo usuario</h1><br>
                    <img class="w3-margin-bottom w3-card w3-circle" src="../../img/logo.png" alt="logo" width="200" height="200"/><br>
                    
                    <!--
                    <a href="./anadir-usuarios.php">Crear Usuarios
                    <a href="./anadir-almacenes.php">Crear Almacenes <br>
                    <a href="./eliminar-usuario.php">Eliminar Usuarios
                    <a href="./eliminar-almacen.php">Eliminar Almacenes </a>
                    -->

 

                    <form class="w3-animate-right w3-large "  action="crearusuario.php" method="POST">
                        <label for="articulo">Nombre usuario:</label><br>
                        <input type="text" id="articulo" class="fadeIn second " name="nombre" placeholder="Nombre"><br><br>
                        
                        <label for="apellido1">Apellidos:</label><br>
                        <input type="text" id="apellidos" class="fadeIn third " name="apellidos" placeholder="Apellidos"><br><br>
                        
                        <label for="apellido1">Contraseña:</label><br>
                        <input type="password" id="contra1" class="fadeIn third " name="contra1" placeholder="Contraseña"><br><br>
                        
                        <label for="apellido1">Repetir contraseña:</label><br>
                        <input type="password" id="contra2" class="fadeIn third " name="contra2" placeholder="Repetir contraseña"><br><br>
                        
                        <label for="telefono">Telefono de contacto:</label><br>
                        <input type="tel" id="telefono" class="fadeIn second " name="telefono" placeholder="987123456" pattern="[0-9]{9}"><br><br>
                        
                        <label for="perfil">Perfil del usuario:</label><br>
                        <input type="radio" name="perfil" value='1'>Administrador<br>
                        <input type="radio" name="perfil" value='2'>Profesor<br><br>
                        
                        <input type="submit" class="fadeIn fourth w3-card-4 " value="Enviar Aviso" name="enviar" style="background-color:#b0db6b">
                    </form>
                    
                </div>
            </div>
        </div>
		
		<?php

			if(isset($_POST['enviar'])){ 

			$nombre= $_POST["nombre"] ;
			$contra1= $_POST["contra1"] ;
			$contra2= $_POST["contra2"] ;
			$apellidos= $_POST["apellidos"] ;
			$telefono= $_POST["telefono"] ;
			$perfil= $_POST["perfil"] ;

			if ($contra1 == $contra2) {
				
				$enlace = mysqli_connect("localhost", "root", "", "almacenes");
				if (!$enlace) {
					die("No pudo conectarse: " . mysql_connect_error());
				}

				$insert = "INSERT INTO almacenes.usuarios (`idUsuario`, `idPerfil`, `nombre`, `apellidos`, `telefono`, `contrasena`) VALUES (concat('$nombre', '$perfil'), '$perfil', '$nombre', '$apellidos', '$telefono', '$contra1');";

				if (mysqli_query($enlace, $insert)) {
					echo "<script type='text/javascript'>alert('Usuario creado correctamente');</script>";
				} else {
					echo "<script type='text/javascript'>alert('Error al crear el usuario');</script>";
				};

				mysqli_close($enlace);

			} else {
				echo "<script type='text/javascript'>alert('Las contraseñas no son iguales');</script>";
			};	

			};
		?>
		
	</body>
</html>

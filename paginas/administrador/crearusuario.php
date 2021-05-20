<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.html");
}
?>
<html>
	<title>Crear nuevo usuario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/temas.css">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<body class="cabecera">
		<div class="w3-row-padding  w3-margin-top W3-center w3-auto W3-theme-white w3-display-middle  w3-card-4">
			<div class="w3-center">
				<div class=" w3-container contenedor1 " style="min-height:460px">
					<h1 class="w3-xxxlarge w3-animate-left">Crear nuevo usuario</h1><br>
					<img class="w3-margin-bottom w3-card w3-circle" src="../img/logo.png" alt="logo" width="200" height="200"/><br>
					<a href="./crearusuario.php">Crear Usuarios
					<a href="./crearalmacen.php">Crear Almacenes <br>
					<a href="./eliminarusuario.php">Eliminar Usuarios
					<a href="./eliminaralmacen.php">Eliminar Almacenes </a>


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

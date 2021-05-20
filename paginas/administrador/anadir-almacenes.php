<html>
	<title>Crear nuevo almacen</title>
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
					<h1 class="w3-xxxlarge w3-animate-left">Crear nuevo almacen</h1><br>
					<img class="w3-margin-bottom w3-card w3-circle" src="../img/logo.png" alt="logo" width="200" height="200"/><br>
					<a href="./crearusuario.php">Crear Usuarios
					<a href="./crearalmacen.php">Crear Almacenes <br>
					<a href="./eliminarusuario.php">Eliminar Usuarios
					<a href="./eliminaralmacen.php">Eliminar Almacenes </a>
					

					<form class="w3-animate-right w3-large "  action="crearalmacen.php" method="POST">
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
		
	</body>
</html>

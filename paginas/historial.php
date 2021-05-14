<html>
	<title>Historial de préstamos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/temas.css">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<body class="cabecera">
		<div class="w3-row-padding  w3-margin-top W3-center w3-auto W3-theme-white w3-card-4">
			<div class="w3-center">
				<div class=" w3-container contenedor1 " style="min-width:100%">
					<h1 class="w3-xxxlarge w3-animate-left">Historial de Préstamos</h1>
					<img class="w3-margin-bottom w3-card w3-circle" src="../img/logo.png" alt="logo" width="200" height="200"/><br>
					
					<?php

					if (!$conect = mysqli_connect("localhost", "Andres01", "Andre01", "almacenes")) {
						
						die("No se pudo crear la conexi&oacute al SGBD");
					}
					
					$consulta = "SELECT nombre, cantidad, detalles FROM articulo";
					$resultado = mysqli_query($conect, $consulta);
					
					
					
					?>

				</div>
			</div>
		</div>
	</body>
</html>

<html>
	<title>Inventario del almacen</title>
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
					<h1 class="w3-xxxlarge w3-animate-left">Inventario</h1>
					<img class="w3-margin-bottom w3-card w3-circle" src="../img/logo.png" alt="logo" width="200" height="200"/><br>
					
					<?php

					if (!$conect = mysqli_connect("localhost", "Andres01", "Andre01", "almacenes")) {
						
						die("No se pudo crear la conexi&oacute al SGBD");
					}
					
					$consulta = "SELECT nombre, cantidad, detalles FROM articulo";
					$resultado = mysqli_query($conect, $consulta);
					
					if (!$resultado) {
						
						echo "<p>Error en la consulta.</p>";
						
					} else {
						
						echo "<p>Listado completo de registros:</p>\n
						<table border=\"1\">
							<thead>
								<tr>
								
									<th width=\"50\">nombre</th>
									<th width=\"100\">cantidad</th>
									<th width=\"100\">detalles</th>
									
								</tr>
							</thead>";
							
						while ($valor = mysqli_fetch_array($resultado)) {
							
							echo "	<tr>\n
									<td>$valor[nombre]</td>
									<td>$valor[cantidad]</td>
									<td>$valor[detalles]</td> 
							</tr>\n";
						}
						
						echo "</table>\n";
						
					}
					
					mysqli_free_result($resultado);
					
					?>

				</div>
			</div>
		</div>
	</body>
</html>

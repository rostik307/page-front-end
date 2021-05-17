<html>
	<title>Historial de préstamos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/temas.css">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<body class="cabecera">
		<div class="w3-row-padding  w3-margin-top W3-center w3-auto W3-theme-white">
			<div class="w3-center">
				<div class=" w3-container contenedor2 " style="min-width:100%">
					<h1 class="w3-xxxlarge w3-animate-left">Historial de Préstamos</h1>
					<img class="w3-margin-bottom w3-card w3-circle" src="../img/logo.png" alt="logo" width="200" height="200"/><br>
					<a href="./historial.php">Articulos
					<a href="./historial_almacen.php">Almacen
					<a href="./historial_cantidad.php">Cantidad
					<a href="./historial_fecreco_antigua.php">Fecha Recogida(antigua)
					<a href="./historial_fecreco_nueva.php">Fecha Recogida(nueva)
					<a href="./historial_fecdevo_antigua.php">Fecha Devolucion(antigua)
					<a href="./historial_fecdevo_nueva.php">Fecha Devolucion(nueva)</a>
					<?php

					if (!$conect = mysqli_connect("localhost", "root", "", "almacenes")) {
						
						die("No se pudo crear la conexi&oacute al SGBD");
					}
					
					$consulta = "SELECT articulo.nombre, almacen.lugar, reserva.cantidad, reserva.fecha_recogida, reserva.fecha_devolucion FROM almacenes.almacen JOIN almacenes.articulo JOIN almacenes.reserva WHERE reserva.idArticulo = articulo.idArticulo and almacen.idAlmacen = articulo.idAlmacen order by fecha_devolucion desc";
					$resultado = mysqli_query($conect, $consulta);
					
					if (!$resultado) {
						
						echo "<p>Error en la consulta.</p>";
						
					} else {
						
						echo "<p>Listado completo del historial:</p>\n
						<table border=\"1\">
							<thead>
								<tr>
								
									<th width=\"50\">Nombre</th>
									<th width=\"50\">Almacen</th>
									<th width=\"100\">Cantidad</th>
									<th width=\"100\">Fecha Recogida</th>
									<th width=\"100\">Fecha Devolucion</th>
									
								</tr>
							</thead>";
							
						while ($valor = mysqli_fetch_array($resultado)) {
							
							echo "	<tr>\n
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
			</div>
		</div>
	</body>
</html>

<html>
	<title>Inventario del almacen</title>
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
					<h1 class="w3-xxxlarge w3-animate-left">Inventario</h1>
					<img class="w3-margin-bottom w3-card w3-circle" src="../img/logo.png" alt="logo" width="200" height="200"/><br>
	<form method="POST" action="mostrar-datos.php" onSubmit="return validarForm(this)">
 
    <input type="text" placeholder="Buscar" id="palabra" name="palabra">
 
    <input type="submit" value="Buscar" name="buscar">
 
</form> 			<div class="portatablas">
					

		 <table border='1' class="w3-card">
		 <tr>	<th width='30'>Id</th>
										<th width='120'>nombre</th>
										<th width='30'>cantidad</th>
										<th width='120'>detalles</th>
								</tr>
 <?php
		if(isset($_POST['palabra'])) {
					   $buscar = $_POST["palabra"];
						$conect2 = mysqli_connect("localhost", "root", "", "almacenes");
					   $consulta2= mysqli_query ($conect2,"SELECT * FROM articulo WHERE nombre like '%$buscar%' or detalles like '%$buscar%'");
					   while($registro = mysqli_fetch_array($consulta2)) 
		{
           ?> 
		  
							
								<tr>	<th width='30'></th>
										<th width='120'></th>
										<th width='30'></th>
										<th width='120'></th>
								</tr>
							
				<td class="estilo-tabla" align="center" width='30'><?=$registro['idArticulo']?></td>
               <td class="estilo-tabla" align="center" width='150'><?=$registro['nombre']?></td>
			    <td class="estilo-tabla" align="center" width='30'><?=$registro['cantidad']?></td>
               <td class=”estilo-tabla” align="center" width=' fit-content'><?=$registro['detalles']?></td>
			   
           
           <?php 
       }
		}
    ?>
    </table>
    <?php

?>
					
					

					<?php

					if (!$conect = mysqli_connect("localhost", "root", "", "almacenes")) {
						
						die("No se pudo crear la conexi&oacute al SGBD");
					}
					
					$consulta = "SELECT * FROM articulo";
					$resultado = mysqli_query($conect, $consulta);
					
					if (!$resultado) {
						
						echo "<p>Error en la consulta.</p>";
						
					} else {
						
						echo "<p>Listado completo de articulos:</p>
						
						<table border='1'>
							<thead>
								<tr>	<th width='30'>idArticulo</th>
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
					
 

					
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
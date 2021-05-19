<html>
	<head>
		<title>ALMACENES ALBERICIA</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/temas.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/w3.css">
		<link rel="stylesheet" href="../css/estilo.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
<div class="portatablas ">

	
 
		 <table border='1' class="w3-card w3-center">
								<tr>	<th width='30'>Id</th>
										<th width='120'>Almacen</th>
										<th width='120'>nombre</th>
										<th width='30'>cantidad</th>
										<th width='120'>detalles</th>
								</tr>
 <?php
				$conect2 = mysqli_connect("localhost", "root", "", "almacenes");
			   $consulta2= mysqli_query ($conect2,"SELECT articulo.*, almacen.lugar FROM articulo LEFT JOIN almacen ON articulo.idAlmacen = almacen.Idalmacen WHERE almacen.lugar = 'AlmacenAF'");
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
    ?>
	</body>
	</html>
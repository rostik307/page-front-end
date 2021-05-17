<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
session_start();
$login=$_SESSION["login"];
$conn= mysqli_connect("localhost","root","", "almacenes");
if(!$conn){
	echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}else{
	echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
	echo "$login";
}
// validamos que lleguen las variables

if(isset($_POST['articulo'],$_POST['articulo'],$_POST['hprestamos'],$_POST['hdevoluciones']
		)and $_POST['articulo']!="" and $_POST['articulo']!="" and $_POST['hprestamos']!="" 
		and $_POST['hdevoluciones']!=""){
	$articulo=$_POST['articulo'];
	$detalles=$_POST['detalles'];
	$hprestamos=$_POST['hprestamos'];
	$hdevoluciones=$_POST['hdevoluciones'];

	$consalmacen="SELECT `almacen`.`idAlmacen` FROM `almacen` LEFT JOIN `articulo` 
					ON `articulo`.`idAlmacen` = `almacen`.`idAlmacen` 
					WHERE `articulo`.`idArticulo` = '$articulo'";
	$result=mysqli_query($conn,$consalmacen);
	if(mysqli_num_rows( $result ) > 0){
		$sql= "INSERT INTO `reserva`(`idReserva`, `idArticulo`, `idUsuario`, `cantidad`, `fecha_recogida`, `fecha_devolucion`) 
				VALUES ('','$articulo','$login','20','$hprestamos','$hdevoluciones'])";
		}else{
			echo" no hay datos en la consulta";
		}
		print mysqli_query($result);
		}else{
	echo"No hay datos en las variables";
}
?>
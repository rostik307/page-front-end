<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
session_start();
$_SESSION["almacen"] = $_POST['almacen']; 
$almacen=$_POST["almacen"];

$conn= mysqli_connect("localhost","root","", "almacenes");
if(!$conn){
	echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}else{
	echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}
if(!isset($_POST['almacen'])){
	header("Location: prestamos.php")
}else{
	$consulta = "SELECT `articulo`.`idArticulo`,articulo.nombre,articulo.cantidad,articulo.detalles, 
						`almacen`.`lugar` FROM `articulo` LEFT JOIN `almacen` ON `articulo`.`idAlmacen` = `almacen`.`idAlmacen` WHERE almacen.nombre = $almacen";
						$resultado = mysqli_query($conect, $consulta);
}
?>
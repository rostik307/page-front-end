<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
session_start();
$id_articulo = $_POST['id_articulo']; 
$cantidad= $_POST['cantidad_articulo'];
$detalles = $_POST['detalles'];
$ftoma = $_POST['ftoma'];
$fvuelta = $_POST['fvuelta'];
$login = $_SESSION['login'];

$conn= mysqli_connect("localhost","root","", "almacenes");
if(!$conn){
	// echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}else{
	// echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}

$consulta="INSERT INTO `reserva`(`idReserva`, `idArticulo`, `idUsuario`, `detalles`, `cantidad`, `fecha_recogida`, `fecha_devolucion`) 
			VALUES ('','$id_articulo','$login','$detalles','$cantidad','$ftoma','$fvuelta')" ;
			
if($conn->query($consulta) === TRUE){
	echo "Reserva realizada correctamente ";
	header("refresh:5;prestamos.php");

}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
$_SESSION["login"] = $_POST['login']; 
$_SESSION["password"] = $_POST['password']; 

$user=$_POST["login"];
$password=$_POST["password"];
$conn= mysqli_connect("localhost","administrador","administrador", "almacenes");
if(!$conn){
	echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}else{
	echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}

 $consulta="SELECT * FROM usuarios WHERE idUsuario='$user' AND contrasena='$password'";
 $comprobacion = mysqli_query($conn,$consulta);

if( $comprobacion ){

  //Ahora valida que la consuta haya traido registros
  if( mysqli_num_rows( $comprobacion ) > 0){

    //Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
    while($fila = mysqli_fetch_array( $comprobacion ) ){

      //Ahora $fila tiene la primera fila de la consulta, pongamos que tienes
      //un campo en tu DB llamado NOMBRE, así accederías
      // echo "Usuario: " .$fila['idUsuario']."<br>";
	// echo "Contraseña: " .$fila['contrasena']."<br>";
	header("Location: ../menu.html");
	}	
  }else{
	 	header("Location: login.html");
  }

  //Recuerda liberar la memoria del resultado, 
  mysqli_free_result( $comprobacion );

  //Si ya no ocupas la conexión, cierrala
  mysqli_close( $conn );
 // if(!mysqli_query($conn,$consulta)){
	// echo " no funciona";
 // }else { 
	// echo " si funciona";
 // } 
 }
?>

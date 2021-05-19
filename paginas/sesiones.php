<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
session_start();
$user=$_SEASSON["login"];
$password=$_SEASSON["password"];
$conn= mysqli_connect("localhost","root","", "almacenes");
if(!$conn){
	echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}else{
	echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}

 			$consulta="SELECT `perfil`.`permisos`, usuarios.*
						FROM `perfil` 
						LEFT JOIN `usuarios` ON `usuarios`.`idPerfil` = `perfil`.`idPerfil`
						WHERE usuarios.idUsuario = $login ";
 $comprobacion = mysqli_query($conn,$consulta);

if( $comprobacion ){

  // Ahora valida que la consuta haya traido registros
  if( mysqli_num_rows( $comprobacion ) > 0){

    // Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
    while($fila = mysqli_fetch_array( $comprobacion ) ){

      // Ahora $fila tiene la primera fila de la consulta, pongamos que tienes
      // un campo en tu DB llamado NOMBRE, así accederías
		$_SESSION["nombre"] = $fila['nombre']."<br>";
		// $_SESSION["apellidos"] = $fila['apellidos']."<br>";
		// $_SESSION["telefono"] = $fila['telefono']."<br>";
		// $_SESSION["permisos"] = $fila['permisos']."<br>";			
		}

	}	
  }
  
?>
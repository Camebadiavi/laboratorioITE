<?php
$usua=$_REQUEST['usuario'];
$contrasena=$_REQUEST['password'];


include 'conexion.php';
$query="INSERT INTO usuarios(clave_usuario,password) VALUES('$usua','$contrasena')";

$resultado = $mysqli->query($query);
if($resultado){
	 header("Location: index.html"); 
}
else{
	echo "lo sentimos vuelve a intentar";
	}



?>
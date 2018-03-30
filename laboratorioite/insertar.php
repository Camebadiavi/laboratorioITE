<?php
include("conexion1.php");

$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];




$query="INSERT INTO ejemplo(nombre, paterno, materno) VALUES('$nombre','$paterno','$materno')";

$resultado = $mysqli->query($query);
if($resultado){
	echo"insercion exitosa";
}
else{echo "lo sentimos vuelve a intentar";}
?>
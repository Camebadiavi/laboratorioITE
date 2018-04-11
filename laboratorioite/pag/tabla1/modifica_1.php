<?php
include("conexion.php");
$id_modificar=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];




$query="UPDATE ejemplo SET nombre='$nombre', paterno='$paterno', materno='$materno' WHERE id='$id_modificar'";

$resultado = $mysqli->query($query);
if($resultado){
	echo"insercion exitosa";
}
else{echo "lo sentimos vuelve a intentar";}
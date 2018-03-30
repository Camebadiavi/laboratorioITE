<?php

$nombre=$_REQUEST['id'];
$nombre=$_REQUEST['nombre'];
$paterno=$_REQUEST['paterno'];
$materno=$_REQUEST['materno'];
include("conexion1.php");



$query="UPDATE ejemplo SET nombre='$nombre', paterno='$paterno', materno='$materno' WHERE id='$id'";

$resultado = $mysqli->query($query);
if($resultado){
	echo '<script type="text/javascript"> window.location="principal.php"</script>';
}
else{echo "lo sentimos vuelve a intentar";}
?>
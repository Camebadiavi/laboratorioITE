<?php

$id_eliminar=$_REQUEST['No'];


echo "$id_eliminar";
include 'conexion2.php';
$query="DELETE FROM materiales where id=$id_eliminar";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principalInv.php"</script>';
?>
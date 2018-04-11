<?php

$id_eliminar=$_REQUEST['No'];


echo "$id_eliminar";
include 'conexion.php';
$query="DELETE FROM materiales where id=$id_eliminar";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principal.php"</script>';
?>
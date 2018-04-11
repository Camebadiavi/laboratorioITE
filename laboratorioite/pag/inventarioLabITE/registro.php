<?php

$_Municipio=$_REQUEST['Municipio'];
$_Num_de_Activo=$_REQUEST['Num_de_Activo'];
$_Subnumero=$_REQUEST['Subnumero'];
$_Descrip=$_REQUEST['Descrip'];
$_Material=$_REQUEST['Material'];
$_Color=$_REQUEST['Color'];
$_Marca=$_REQUEST['Marca'];
$_Modelo=$_REQUEST['Modelo'];
$_Serie=$_REQUEST['Serie'];
$_Es_Bien=$_REQUEST['Es_Bien'];

//echo "$id_eliminar";
include 'conexion.php';
$query="INSERT INTO materiales (Municipio, Num_de_Activo, Subnumero, Descrip, Material, Color, Marca, Modelo, Serie, Es_Bien)
 values ('$_Municipio', '$_Num_de_Activo', '$_Subnumero', '$_Descrip','$_Material','$_Color','$_Marca', '$_Modelo', '$_Serie', '$_Es_Bien')";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principal.php"</script>';
?>
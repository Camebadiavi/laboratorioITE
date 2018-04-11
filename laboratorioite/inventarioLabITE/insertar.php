<?php
include("conexion.php");

$Municipio=$_POST['municipo'];
$Num_de_Activo=$_POST['Num_de_Activo'];
$Subnumero=$_POST['Subnumero'];
$Descrip=$_POST['Descrip'];
$Material=$_POST['Material'];
$Color=$_POST['Color'];
$Marca=$_POST['Marca'];
$Modelo=$_POST['Modelo'];
$Serie=$_POST['Serie'];
$Es_Bien=$_POST['Es_Bien'];




$query="INSERT INTO inv(Municipio, Num_de_Activo, Subnumero, Descrip, Material, Color, Marca, Modelo, Serie, Es_Bien) 
				 VALUES('$Municipio','$Num_de_Activo','$Subnumero','$Descrip','$Material','$Color','$Marca','$Modelo','$Serie','$Es_Bien')";

$resultado = $mysqli->query($query);
if($resultado){
	echo"insercion exitosa";
}
else{echo "lo sentimos vuelve a intentar";}
?>
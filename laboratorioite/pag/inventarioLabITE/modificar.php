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
$_No=$_REQUEST['No'];
include 'conexion.php';
$query="UPDATE materiales set Municipio = '$_Municipio', Num_de_Activo = '$_Num_de_Activo', Subnumero = '$_Subnumero' , Descrip = '$_Descrip' , Material = '$_Material' 
, Color = '$_Color' , Marca = '$_Marca' , Modelo = '$_Modelo' , Serie = '$_Serie' , Es_Bien = '$_Es_Bien' where No=$_No";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principal.php"</script>';
?>

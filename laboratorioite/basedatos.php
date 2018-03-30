<?php
$usua=$_REQUEST['usuario'];
$contrasena=$_REQUEST['password'];


include 'conexion.php';

$query="SELECT * FROM usuarios where clave_usuario='$usua' and password = '$contrasena' ";
$resultado = $mysqli->query($query);
if ($resultado->num_rows > 0) {
echo "usuario registrad";
}


?>
<?php
session_start();
//Validar que exista la variable de sesión del usuario
session_destroy();

if(!isset($_SESSION['u_usuario']))
{
	echo "Sesion exitosa\n Bienvenido";
	
echo "Has iniciado sesion: ".$_SESSION['u_usuario'];
}
else
{
	header('Location:error.php');

}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Inicial</title>
 </head>
<body>
	<!--<a href="cerrarsesion.php"><h1><span>Cerrar Sesi&oacute;n</a>-->			
</body>
</html>



<!DOCTYPE html>
<html>
	<head>
		<title>Guardar</title>
		</head>
		<body>
		<center>

		<form action="modifica_1.php" method="POST"><BR></BR>
		
		
		<input type="text" REQUIRED name="nombre" placeholder="Nombre..." values ="echo $rom['nombre'];"/><BR></BR>
		<input type="text" REQUIRED name="paterno" placeholder="Apellido paterno..." values="echo $rom['paterno'];"/><BR></BR>
		<input type="text" REQUIRED name="materno" placeholder="Apellido materno..." values="echo $rom['materno'];?>"/><BR></BR>
		<input type="submit" values="Aceptar"/>
		
	
		</form>
		</center>
		</body>
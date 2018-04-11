<!DOCTYPE html>
<html>
	<head>
		<title>Reporte Bootstrap</title>		
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body align="center">
	<div>&nbsp;</div>
	<div class="container">

	    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	    <thead>
		
		</tr>
		<tr class="h3">
		     <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Usuario" id="usuario">
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Password" id="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block "id="boton">registrar</button>
       
		    
		 
		   <!-- <th class="text-center"><a href="formulario.php"><button type="button" class="btn btn-default glyphicon glyphicon-plus btn-success "></button></a></th>-->
		</tr>
	    </thead>
		
	 
	    <tbody>
		    <?php
		    //include 'conexion.php';
		   // $query="SELECT * FROM login";
		   // $resultado = $mysqli->query($query);
			
		    //if ($resultado->num_rows > 0) {
		    //while($row = $resultado->fetch_assoc()) {
				//$usua=$_Row['usuario'];
               // $contrasena=$_Row['password'];
				
				//echo "<tr><td class='text-center'>$usua</td>";
				//echo "<td>$contrasena</td>";
				
				
				//echo "<td class='text-center'><a href='modifica_1.php'><button type='button' class='btn btn-default glyphicon glyphicon-pencil btn-warning' id='m$id'></button></a>";
					
				//echo "<input value='$id' type='hidden' id='te$id'>";		
				//echo "<button type='button' class='btn btn-default glyphicon glyphicon-minus btn-danger' id='e$id'></button></td></tr>";
		    
		   // } 
			//else {}
		    ?>
	    </tbody>
	</table>
	</div> 
	</body>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
	<script  type="text/javascript" src="js/boton.js"></script>	
</html>

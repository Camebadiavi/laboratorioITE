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
		<tr><a href="formulario.php">Nuevos</a>
		</tr>
		<tr class="h3">
		    <th class="text-center">Id</th>
		    <th>Nombre</th>
		    <th>Apellido Paterno</th>
		    <th>Apellido Materno</th>
		    <th class="text-center"><a href="formulario.php"><button type="button" class="btn btn-default glyphicon glyphicon-plus btn-success "></button></a></th>
		</tr>
	    </thead>
	 
	    <tbody>
		    <?php
		    include 'coneta1.php';
		    $query="SELECT * FROM vales";
		    $resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
		    while($row = $resultado->fetch_assoc()) {
				`carrera`, `grupo`, `asig`, `laboratorio`, ``, ``, `tutor`, `resibido`, `entrega
				$folio=$row["folio"];
				$solicitante=$row["solicitancantidadte"];
				$fecha=$row["fecha"];				
				$carrera=$row["carrera"];				
				$grupo=$row["grupo"];								
				$asig=$row["asig"];
				$laboratorio=$row["laboratorio"];				
				$cantidad=$row["cantidad"];				
				$material=$row["material"];				
				$tutor=$row["tutor"];
				$resibido=$row["resibido"];
				$entrega=$row["entrega"];
				
				
				
				echo "<tr><td class='text-center' contenteditable='false'>$folio</td>";
				echo "<td contenteditable='true'>$solicitante</td>";
				echo "<td contenteditable='true'>$fecha</td>";
				echo "<td contenteditable='true'>$Subnumero</td>";
				echo "<td contenteditable='true'>$grupo</td>";
				echo "<td contenteditable='true'>$asig</td>";
				echo "<td contenteditable='true'>$laboratorio</td>";
				echo "<td contenteditable='true'>$cantidad</td>";
				echo "<td contenteditable='true'>$material</td>";
				echo "<td contenteditable='true'>$tutor</td>";
				echo "<td contenteditable='true'>$resibido</td>";
				echo "<td contenteditable='true'>$entrega</td>";
				
				echo "<td class='text-center'><button type='button' class='btn btn-default glyphicon glyphicon-pencil btn-warning' id='m$id'></button>";
				echo "<input value='$id' type='hidden' id='tm$id'>";	
				echo "<input value='$id' type='hidden' id='te$id'>";		
				echo "<button type='button' class='btn btn-default glyphicon glyphicon-minus btn-danger' id='e$id'></button></td></tr>";
		    }
		    } else {}
		    ?>
	    </tbody>
	</table>
	</div> 
	</body>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
	<script  type="text/javascript" src="js/conecta.js"></script>	
</html>

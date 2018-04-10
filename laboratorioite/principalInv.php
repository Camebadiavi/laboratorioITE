<!DOCTYPE html>
<html>
	<head>
		<title>Reporte Bootstrap</title>		
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
	</head>
	<body align="center">
	<div>&nbsp;</div>
	<div class="container">

	<div>
		<div class="form-group col-sm-3">
			<label for="No" class="h4">No. </label>
		    <input type="text" class="form-control" id="No" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Municipio" class="h4"> Municipio</label>
		    <input type="text" class="form-control" id="Municipio" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Num_de_Activo" class="h4"> Número de Activo</label>
		    <input type="text" class="form-control" id="Num_de_Activo" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Subnumero" class="h4"> Subnumero</label>
		    <input type="text" class="form-control" id="Subnumero" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Descrip" class="h4">Descripción del Bien </label>
		    <input type="text" class="form-control" id="Descrip" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Material" class="h4">Material </label>
		    <input type="text" class="form-control" id="Material" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Color" class="h4"> Color</label>
		    <input type="text" class="form-control" id="Color" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Marca" class="h4"> Marca</label>
		    <input type="text" class="form-control" id="Marca" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Modelo" class="h4">Modelo </label>
		    <input type="text" class="form-control" id="Modelo" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Serie" class="h4"> Serie</label>
		    <input type="text" class="form-control" id="Serie" placeholder="" required>
    	</div>
	   <div class="form-group col-sm-3">
			<label for="Es_Bien" class="h4">Estado del Bien </label>
		    <input type="text" class="form-control" id="Es_Bien" placeholder="" required>
    	</div>
	    	<button type="button" class="btn btn-default glyphicon glyphicon-plus btn-success" id="btnAdd"> Agregar</button>
	    	<button type="button" class="btn btn-default glyphicon glyphicon-pencil btn-warning" id="btnM"> Modificar</button>

    </div>
<br>
	    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	    <thead>
		<tr class="h5">
		    <th class="text-center">No.</th>
	   <th class="text-center">Municipio</th>
	   <th class="text-center">Número de Activo</th>
	   <th class="text-center">Subnumero</th>
	   <th class="text-center">Descripción del Bien</th>
	   <th class="text-center">Material</th>
	   <th class="text-center">Color</th>
	   <th class="text-center">Marca</th>
	   <th class="text-center">Modelo</th>
       <th class="text-center">Serie</th>
	   <th class="text-center">Estado del Bien</th>
		    

		</tr>
	    </thead>
	 
	    <tbody>
		    <?php
		    include 'conexion2.php';
		    $query="SELECT * FROM materiales";
		    $resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 1) {
		    while($row = $resultado->fetch_assoc()) {
				$No=$row["No"];
				$Municipio=$row["Municipio"];
				$Num_de_Activo=$row["Num_de_Activo"];				
				$Subnumero=$row["Subnumero"];				
				$Descrip=$row["Descrip"];								
				$Material=$row["Material"];
				$Color=$row["Color"];				
				$Marca=$row["Marca"];				
				$Modelo=$row["Modelo"];				
				$Serie=$row["Serie"];
				$Es_Bien=$row["Es_Bien"];
				
				
				
				echo "<tr><td class='text-center' contenteditable='false'>$No</td>";
				echo "<td contenteditable='true'>$Municipio</td>";
				echo "<td contenteditable='true'>$Num_de_Activo</td>";
				echo "<td contenteditable='true'>$Subnumero</td>";
				echo "<td contenteditable='true'>$Descrip</td>";
				echo "<td contenteditable='true'>$Material</td>";
				echo "<td contenteditable='true'>$Color</td>";
				echo "<td contenteditable='true'>$Marca</td>";
				echo "<td contenteditable='true'>$Modelo</td>";
				echo "<td contenteditable='true'>$Serie</td>";
				echo "<td contenteditable='true'>$Es_Bien</td>";
				//echo "<td class='text-center'><button type='button' class='btn btn-default glyphicon glyphicon-pencil btn-warning' id='m$id'></button>";
				//echo "<input value='$id' type='hidden' id='tm$id'>";
				echo "<td class='text-center'>";
				echo "<input value='$No' type='hidden' No='te$No'>";		
			//echo "<button type='button' class='btn btn-default glyphicon glyphicon-minus btn-danger' No='e$No'></button></td></tr>";
		    }
		    } else {}
		    ?>
	    </tbody>
	</table>
	</div> 
	</body>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
	<script  type="text/javascript" src="js/conecta2.js"></script>	
</html>

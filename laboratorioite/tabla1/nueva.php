<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Reporte</title>		
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	</head>
	<body align="center">
	<div>&nbsp;</div>
	<div class="container">

	   
		<tr class="h3">



<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script  type="text/javascript" src="js/conectator.js"></script>

<!------ Include the above in your HEAD tag ---------->

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<div class="container">
    <div class="row clearfix">
    	<div class="col-md-12 table-responsive">
			<table id="material1" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	    
				
				

		</tr>
				<div>
					<tr >
					<th class="text-center">
					       Folio
						</th>
						<th class="text-center">
							Solicitante(*Ver nota al principio de la hoja)
						</th>
						<th class="text-center">
							Fecha
						</th>
						<th class="text-center">
							Carrera
						</th>
						<th class="text-center">
							Grupo
						</th>
    					<th class="text-center">
							Asignatura
						</th>
						<th class="text-center">
							Laboratotio
						</th>
						<th class="text-center">
							Cantidad
						</th>
						<th class="text-center">
							Material/Equipo
							(Descipcion)
						</th>
						<th class="text-center">
						    Tutor o Profesor responsable
						</th>
						<th class="text-center">
						    Firma de recibido
						</th>
						<th class="text-center">
						  Fecha de entrega
						</th>
        				<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
						</th>
					</tr>
					</div>
				
				
			<div>
			
			<thead>
    				<th class='text-center'></th>
					<td>
						    <input type="text" name='name0'  placeholder='Nombre(s) y Apellidos' class='form-control'/>
						</td>
						<td data-name='mail'>
						    <input type="text" name='mail0' placeholder='Año,Mes,Dia' class="form-control"/>
						</td>
						
    				<td data-name="sel">
						    <select name="sel0">
        				        <option value"0">Select Option </option>
    					        <option value"1">Ing .en Telemática</option>
        				        <option value"2">Ing .en Redes y telecomuicacines</option>
        				        <option value"3">Ing .en Sistema Automotriz</option>
								<option value"4">Ing .en Plásticos</option>
						    </select>
						</td>
						<td data-name="desc">
						    <textarea name="desc0" placeholder="" class="form-control"></textarea>
						</td>
						<td data-name="desc">
						    <textarea name="lab" placeholder="Laboratotio" class="form-control"></textarea>
						</td>
                       <td data-name="sel">
						    <select name="sel0">
        				        <option value"0">Select Option </option>
    					        <option value"1">Lab. Electrónica</option>
        				        <option value"2">Lab. Redes</option>
        				        <option value"3">Centro de cómputo</option>
							
						    </select>
						</td>
						<td>
						    <input type="text" name='name0'  placeholder='Nombre(s) y Apellidos' class='form-control'/>
						</td>
						<td>
						    <input type="text" name='name0'  placeholder='Nombre(s) y Apellidos' class='form-control'/>
						</td>
						<td>
						    <input type="text" name='name0'  placeholder='Nombre(s) y Apellidos' class='form-control'/>
						</td>
						<td>
						    <input type="text" name='name0'  placeholder='Nombre(s) y Apellidos' class='form-control'/>
						</td>
						<td>
						    <input type="text" name='name0'  placeholder='Nombre(s) y Apellidos' class='form-control'/>
						</td>
				<th class="text-center"><a href="formulario.php"><button type="button" class="btn btn-default glyphicon glyphicon-plus btn-success "></button></a></th>
			</thead>
			
			
			<tbody>
		    <?php
		    include 'coneta1.php';
		    $query="SELECT * FROM material1";
		    $resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
		    while($row = $resultado->fetch_assoc()) {
				
				$folio=$row["folio"];
				$solicitante=$row["solicitante"];
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
				
				echo "<td contenteditable='true'>$carrera</td>";
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
	</div>
	</body>
	<script  type="text/javascript" src="coneta1.js"></script
</div>

$(document).ready( function () {
	//$("button").on('click', function(event) {
		//var id="t"+this.id;		
	//	if (id.indexOf("m") !=-1) {
//			var id_modificar = document.getElementById(id).value;

			//$.ajax({
	       // type: "POST",
	     //   url: "modificar.php",
	     //   success : function(){
	     //           window.location.href = "modificar.php?id="+id_modificar;
	      //  	}
	    	//});
		//}
		if (id.indexOf("e") !=-1) {
			var id_eliminar = document.getElementById(id).value;
			if(confirm("Eliminar el registro"))
			{	
			$.ajax({
	        type: "POST",
	        url: "eliminar2.php",
	        success : function(){
	                window.location.href = "eliminar2.php?id="+id_eliminar;
	        	}
	    	});
		}
		}		
	});	


	$("#btnAdd").on('click', function(event) 
	{
		event.preventDefault();
		//alert("Trabajando...");	
		var Municipio = document.getElementById("Municipio").value;
		var Num_de_Activo = document.getElementById("Num_de_Activo").value;
		var Subnumero = document.getElementById("Subnumero").value;
		var Descrip = document.getElementById("Descrip").value;
		var Material = document.getElementById("Material").value;
		var Color = document.getElementById("Color").value;
		var Marca = document.getElementById("Marca").value;
		var Modelo = document.getElementById(" Modelo").value;
		var Serie = document.getElementById("Serie").value;
		var Es_Bien = document.getElementById("Es_Bien").value;
		

			$.ajax({
	        type: "POST",
	        url: "registro.php",
	        success : function(){
	                window.location.href = "registro.php?Municipio="+Municipio+"&Num_de_Activo="+Num_de_Activo+"&Subnumero="+Subnumero+"&Descrip="+Descrip+"&Material="+Material+"&Color="+Color+
					"&Marca="+Marca+"&Modelo="+Modelo+"&Serie="+Serie+"&Es_Bien="+Es_Bien;
	        	}
	    	});
	});	

	$("#btnM").on('click', function(event) 
	{
		event.preventDefault();
		//alert("Trabajando...");	
	    var Municipio = document.getElementById("Municipio").value;
		var Num_de_Activo = document.getElementById("Num_de_Activo").value;
		var Subnumero = document.getElementById("Subnumero").value;
		var Descrip = document.getElementById("Descrip").value;
		var Material = document.getElementById("Material").value;
		var Color = document.getElementById("Color").value;
		var Marca = document.getElementById("Marca").value;
		var Modelo = document.getElementById(" Modelo").value;
		var Serie = document.getElementById("Serie").value;
		var Es_Bien = document.getElementById("Es_Bien").value;
		var No= document.getElementById("No").value;

			$.ajax({
	        type: "POST",
	        url: "modificar2.php",
	        success : function(){
	                window.location.href = "modificar2.php?Municipio="+Municipio+"&Num_de_Activo="+Num_de_Activo+"&Subnumero="+Subnumero+"&Descrip="+Descrip+"&Material="+Material+"&Color="+Color+
					"&Marca="+Marca+"&Modelo="+Modelo+"&Serie="+Serie+"&Es_Bien="+Es_Bien+"&No="+No;
	        	}
	    	});
	});	

});	

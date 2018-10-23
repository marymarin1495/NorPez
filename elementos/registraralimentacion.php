<?php include_once '../elementos/isSession.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NorPez</title>
	<link rel="stylesheet" type="text/css" href="../css/estilosregistros.css">
	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Satisfy" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Satisfy" rel="stylesheet">
</head>

<body>
<?php include_once "../elementos/menu.php"; ?>
<center><img src="../imagenes/fondopru.png" class="imsg"  ></center>
<br>
<div class="loginbox">
	
		<br>
		<h1>Registrar Alimentacion </h1>
		<br>
		<form action="javascript:registraralimentacion()">
			<div id="espacio_respuesta_regisalimentacion"></div>
					<p>Fecha inicial</p>
					<input type="date" name="fechainicial" id="fechainicial" required style='width:250px; height:25px'>
					<br>
					<br>
					<p>Fecha fin</p>
					<input type="date" name="fechafin" id="fechafin" required style='width:250px; height:25px'>
					<br>
					<br>
					<p>Nombre Producto</p>
					<input type="text" name="nombreproducto" id="nombreproducto" required>
					<br>
					<br>
					<p>Cantidad Alimento (Kg)</p>
					<input type="text" name="cantidadalimento" id="cantidadalimento" required>
					<br>
					<br>
					
					<input type="submit" class="btn btn-primary" value="Registrar" style='width:250px; height:30px'>
					<br>
					<br>
				
			</form>
		</div>
	
	<script src="../js/jquery-3.2.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script type="text/javascript">
		function registraralimentacion(){
			var fechainicial = $('#fechainicial').val();
			var fechafin= $('#fechafin').val();
			var nombreproducto = $('#nombreproducto').val();
			var cantidadalimento = $('#cantidadalimento').val();
			alert("Registro Exitoso");
			$.post("../core/regisalimento.php", {fechainicial: fechainicial, fechafin: fechafin, nombreproducto: nombreproducto, cantidadalimento: cantidadalimento }, function (data) {
		        $('#espacio_respuesta_regisalimentacion').html(data);
	    	});

		}
	</script>

</body>
</html>
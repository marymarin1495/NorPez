<?php include_once '../elementos/isSession.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NorPez</title>
	<link rel="stylesheet" href="../css/estilosregistros.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Satisfy" rel="stylesheet">
</head>
<body>
<?php include_once "../elementos/menu.php"; ?>
<center><img src="../imagenes/fondopru.png" class="imsg"  ></center>
<br>
<div class="loginbox">
		<h1>Registrar Granja</h1>
		<form action="javascript:registrarGranja()">
			<div id="espacio_respuesta_regisgranja"></div>
			<p>nombre</p>
			<input type="text" name="nombre" id="nombre" required>
			<br>
			<br>
			<p>Dirección</p>
			<input type="text" name="direccion" id="direccion" required>
			<br>
			<br>
			<p>Tipo Pez</p><br>
			<input type="checkbox" id="tilapia"> <label>Tilapia</label><br>
			<input type="checkbox" id="bocachico"> <label>Bocachico</label><br>
			<input type="checkbox" id="cachama"> <label>Cachama</label><br>
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
		function registrarGranja(){
			var nombre = $('#nombre').val();
			var direccion = $('#direccion').val();
			var tilapia = $('#tilapia').is(':checked');
			var bocachico = $('#bocachico').is(':checked');
			var cachama= $('#cachama').is(':checked');
			alert(tilapia + " - " + bocachico +  " - " + cachama);
			$.post("../core/regisgranja.php", {nombre: nombre, direccion: direccion, tilapia: tilapia, bocachico: bocachico, cachama: cachama }, function (data) {
		            $('#espacio_respuesta_regisgranja').html(data);
	    	});

		}
</script>

</body>
</html>
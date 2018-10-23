<?php include_once '../elementos/isSession.php';
require_once "../core/funciones.php";
$granjas = lista_granjas();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NorPez</title>
	<link rel="stylesheet" type="text/css" href="../css/estilosregistros.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Satisfy" rel="stylesheet">
</head>
<body>
<?php include_once "../elementos/menu.php"; ?>
<center><img src="../imagenes/fondopru.png" class="imsg"  ></center>
<br>
<br>
<br><br>

<div class="loginbox">
		<br>
		<h1>Registrar Estanque </h1>
		<br>
		<form action="javascript:registrarEstanque()">
			<div id="espacio_respuesta_regisestanque"></div>
			
					<div id="espacio_respuesta_regisestanque"></div>
					<p>nombre</p>
					<input type="text" name="nombre" id="nombre" required>
					<br>
					<br>
					<p>Densidad</p>
					<input type="text" name="densidad" id="densidad" required>
					<br>
					<br>
					<p>Longitud</p>
					<input type="text" name="longitud" id="longitud" required>
					<br>
					<br>
					<p>Profunidad</p>
					<input type="text" name="profundidad" id="profundidad" required>
					<br>
					<br>
					<p>Capacidad de Carga</p>
					<input type="text" name="capacidadcarga" id="capacidadcarga" required>
					<br>
					<br>
					<p>Ancho</p>
					<input type="text" name="ancho" id="ancho" required>
					<br>
					<br>
					<p>Largo</p>
					<input type="text" name="largo" id="largo" required>
					<br>
					<br>
					<p>Granja</p><br>
					<select name="granja" id="granja" required>
						<?php foreach ($granjas as $g) { ?>
							<option value="<?php echo $g['id'] ?>"><?php echo $g['nombre'] ?></option>
					<?php } ?>
					</select>
				
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
		function registrarEstanque(){
			var nombre = $('#nombre').val();
			var densidad = $('#densidad').val();
			var longitud = $('#longitud').val();
			var profundidad = $('#profundidad').val();
			var capacidadcarga = $('#capacidadcarga').val();
			var ancho = $('#ancho').val();
			var largo = $('#largo').val();
			var granja = $('#granja').val();

			alert("Registro exitoso");
			$.post("../core/regisestanque.php", {nombre: nombre, densidad: densidad, longitud: longitud, profundidad: profundidad, capacidadcarga: capacidadcarga, ancho: ancho, largo: largo, granja:granja }, function (data) {
		        $('#espacio_respuesta_regisestanque').html(data);
	    	});

		}
	</script>

</body>
</html>
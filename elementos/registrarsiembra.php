<?php 
require_once "../core/funciones.php";
$granjas = lista_granjas();
$alimentacion = lista_alimentacion();
$especie = lista_especie();
$estanque = lista_estanque();
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
<div class="loginbox">
		<br>
		<h1>Registrar Siembra </h1>
		<br>
		<form action="javascript:registrarsiembra()">
			<div id="espacio_respuesta_regissiembra"></div>
					<p>Fecha inicial</p>
					<input type="date" name="fechainicial" id="fechainicial" required style='width:250px; height:25px'>
					<br>
					<br>
					<p>Especie</p>
					<select name="especie" id="especie" required>
					<?php foreach ($especie as $e) { ?>
							<option value="<?php echo $e['id'] ?>"><?php echo $e['nombre'] ?></option>
					<?php } ?>
					</select>
					<br>
					<br>
					<p>Linea Alimentación</p>
					<select name="alimentacion" id="alimentacion" required>
						<?php foreach ($alimentacion as $a) { ?>
							<option value="<?php echo $a['id'] ?>"><?php echo $a['nombreproducto'] ?></option>
					<?php } ?>
					</select>
					<br>
					<br>
					<p>Granja</p>
					<select name="granja" id="granja" required>
						<?php foreach ($granjas as $g) { ?>
							<option value="<?php echo $g['id'] ?>"><?php echo $g['nombre'] ?></option>
					<?php } ?>
					</select>
					<br>
					<br>
					<p>Estanque</p>
					<select name="estanque" id="estanque" required>
						<?php foreach ($estanque as $s) { ?>
							<option value="<?php echo $s['id'] ?>"><?php echo $s['nombre'] ?></option>
					<?php } ?>
					</select>
					<br>
					<br>
					<input type="submit" class="btn btn-primary" value="Registrar" style='width:250px; height:30px'>
					
				</form>
			</div>
	
	<script src="../js/jquery-3.2.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script type="text/javascript">
		function registrarsiembra(){
			var fechainicial = $('#fechainicial').val();
			var especie = $('#especie').val();
			var alimentacion = $('#alimentacion').val();
			var granja = $('#granja').val();
			var estanque = $('#estanque').val();
			alert("Registro Exitoso");
			$.post("../core/regissiembra.php", {fechainicial: fechainicial, especie: especie, alimentacion:alimentacion, granja: granja, estanque:estanque }, function (data) {
		        $('#espacio_respuesta_regissiembra').html(data);
	    	});

		}
	</script>

</body>
</html>
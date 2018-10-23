<?php include_once '../elementos/isSession.php'; 
require_once "../core/funciones.php";
$estanque = lista_estanque();
?>
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
		<h1>Registrar Mortalidad</h1>
		<form action="javascript:registrarmortalidad()">
			<div id="espacio_respuesta_regismortalidad"></div>
			<p>Fecha</p>
			<input type="date" name="fecha" id="fecha" style='width:250px; height:25px' required>
			<br>
			<br>
			<br>
			<p>Cantidad Mortalidad</p>
			<input type="text" name="cantmortalidad" id="cantmortalidad" required>
			<br>
			<br>
			<p>Estanque</p>
			<select name="id_estanque" id="id_estanque" required>
				<?php foreach ($estanque as $s) { ?>
					<option value="<?php echo $s['id'] ?>"><?php echo $s['nombre'] ?></option>
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
		function registrarmortalidad(){
			var fecha = $('#fecha').val();
			var cantmortalidad = $('#cantmortalidad').val();
			var id_estanque = $('#id_estanque').val();
			$.post("../core/regismortalidad.php", {fecha: fecha, cantmortalidad: cantmortalidad, id_estanque: id_estanque}, function (data) {
		            $('#espacio_respuesta_regismortalidad').html(data);
	    	});

		}
</script>

</body>
</html>
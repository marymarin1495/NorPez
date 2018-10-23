<?php include_once '../elementos/isSession.php';

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
		<h1>Registrar Cliente</h1>
		<br>
		<form action="javascript:registrarCliente()">
			
					<div id="espacio_respuesta_regiscliente"></div>
					<p>Tipo Documento</p>
					<input type="text" name="tipodocumento" id="tipodocumento" required>
					<br>
					<br>
					<p>Numero Documento</p>
					<input type="text" name="numdocumento" id="numdocumento" required>
					<br>
					<br>
					<p>Nombre</p>
					<input type="text" name="nombre" id="nombre" required>
					<br>
					<br>
					<p>Apellido</p>
					<input type="text" name="apellido" id="apellido" required>
					<br>
					<br>
					<p>Dirección</p>
					<input type="text" name="direccion" id="direccion" required>
					<br>
					<br>
					<p>Numero Telefono</p>
					<input type="text" name="numtelefono" id="numtelefono" required>
					<br>
					<br>
					<p>Correo</p>
					<input type="text" name="correo" id="correo" required>
					<br>
					<br>
					<p>Contraseña</p>
					<input type="text" name="clave" id="clave" required>
					<br>
					<br>
				
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
		function registrarCliente(){
			var tipodocumento = $('#tipodocumento').val();
			var numdocumento = $('#numdocumento').val();
			var nombre = $('#nombre').val();
			var apellido = $('#apellido').val();
			var direccion = $('#direccion').val();
			var numtelefono = $('#numtelefono').val();
			var correo = $('#correo').val();
			var clave = $('#clave').val();

			$.post("../core/regiscliente.php", {tipodocumento: tipodocumento, numdocumento: numdocumento, nombre: nombre, apellido: apellido, direccion: direccion, numtelefono: numtelefono, correo: correo, clave: clave }, function (data) {
		        $('#espacio_respuesta_regiscliente').html(data);
	    	});

		}
	</script>

</body>
</html>
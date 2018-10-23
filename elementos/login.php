<?php
if (!isset($_SESSION)) {
        session_start();
}
if (isset($_SESSION['user'])){
	?>
	<html>
	    <body>
	        <script language="javascript">
	            window.location.href = "../elementos/principal.php";
	        </script>
	    </body>
	</html>
	<?php
}

#falta otro pedazo
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NorPez</title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Satisfy" rel="stylesheet">

</head>
<body>
	<img src="../imagenes/fondo.jpg" class="ims" >
	<div class="loginbox">
		<img src="../imagenes/avatar.png" class="avatar" >
		<h1>Iniciar Sesión</h1>
		<form action="javascript:validaSesion()">
			<div id="espacio_respuesta"></div>
			<p>Usuario</p>
			<input type="text" name="usuario" id="usuario">
			<br>
			<br>
			<p>Contraseña</p>
			<input type="password" name="clave" id="clave" >
			<br>
			<br>
			<input type="submit" value="Entrar" style='width:250px; height:25px'>
			<br>
			<br>
			<a href="#"><center>¿Olvidaste tu contraseña?</center></a>
		</form>
	</div>
<script src="../js/jquery-3.2.0.min.js"></script>
<script type="text/javascript">
	function validaSesion(){
		var usuario = $('#usuario').val();
		var clave = $('#clave').val();

		
		$.post("../core/validar_sesion.php", {usuario: usuario, pass: clave}, function (data) {
			//alert(data);
        if (data === "exito") {
            window.location.href = "../elementos/principal.php";
        } else {
            $('#espacio_respuesta').html("Datos de Ingreso Incorrectos");
        }
    });

	}
</script>


	
</body>
</html>
<?php include_once '../elementos/isSession.php'; 
include_once '../core/funciones.php';
$granja = mostrarGranja();
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


<br>
<br>
<br>
<br>

<div class="col-lg-12">
	<div class="row">
	<div class="col-lg-4">
		<select class="form-control" name="granja" id="granja" onchange="javascript:cargue_estanques();">
			<option value="0">Seleccione una Granja</option>
			<?php foreach ($granja as $g) {?>
					<option value="<?php echo $g['id'] ?>"><?php echo $g['nombre'] ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="col-lg-4">	
		<select class="form-control" name="estanque" id="estanque">
			
		</select>
	</div>
	<br>
	<br>
	</div>
		
	<a class="btn btn-primary" href="javascript:buscarSiembra()" style="background-color:rgb(0, 155, 205)">Buscar</a>

	<br>
	<br>
		<div id="contenido_siembra">
			
		</div>
</div>
		<br>

		
		<script src="../js/jquery-3.2.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>		
				<script type="text/javascript">
			function cargue_estanques(){
				var granja = $('#granja').val();
				if(granja == "0"){
					$('#estanque').html();
				}else{
					$.post("../core/estanques.php", {granja: granja}, function (data) {	
			            $('#estanque').html(data);
			       	});
				}
			}

			function buscarSiembra(){
				var estanque = $('#estanque').val();
				if(estanque == "0"){
					$('#contenido_estanque').html();
					alert("Debe seleccionar un estanque Valido");
				}else{
					$.post("../core/siembra.php", {estanque: estanque}, function (data) {	
			            $('#contenido_siembra').html(data);
			       	});
				}
			}
		</script>		
			
</body>
</html>
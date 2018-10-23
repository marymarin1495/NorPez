<?php include_once '../elementos/isSession.php'; 
include_once '../core/funciones.php';
$alimentacion = mostrarAlimentacion();
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
		<script src="../js/jquery-3.2.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>	

<?php include_once "../elementos/menu.php"; ?>
	
	
<br>
<br>
<br>

<br>
	<div class="table-responsive">
		<table class="table" border="3">
			<thead >
				<tr>
					<th>id</th>
					<th>Fecha inicial</th>
					<th>Fecha fin</th>
					<th>Nombre</th>
					<th>Cantidad Alimento</th>
					
				</tr>
			</thead>

			<tbody>
				
					<?php foreach ($alimentacion as $a) {?>
					<tr>
						<td><?php echo $a['id'] ?></td>
						<td><?php echo $a['fechainicial'] ?></td>
						<td><?php echo $a['fechafinal'] ?></td>
						<td><?php echo $a['nombreproducto'] ?></td>
						<td><?php echo $a['cantidadalimento'] ?></td>
						
					</tr>
				    <?php } ?>
			</tbody>
		</table>

		<center><a href="../elementos/principal.php" class="btn btn-primary" style="background-color:rgb(0, 155, 205)"> Volver</a></center>
	</div>
</div>
</div>
</div>
</body>
</html>
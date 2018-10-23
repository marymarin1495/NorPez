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
		<script src="../js/jquery-3.2.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
<br>
<br>
<br>
<br>
	<div class="col-lg-12">
	<div class="row">

	<div class="table-responsive">
		<table class="table" border="3">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Direccion</th>
					<th>id</th>
					<th>cachama</th>
					<th>bocachico</th>
					<th>tilapia</th>
				</tr>
			</thead>

			<tbody>
				
					<?php foreach ($granja as $g) {?>
					<tr>
						<td><?php echo $g['nombre'] ?></td>
						<td><?php echo $g['direccion'] ?></td>
						<td><?php echo $g['id'] ?></td>
						<td><?php echo $g['cachama'] ?></td>
						<td><?php echo $g['bocachico'] ?></td>
						<td><?php echo $g['tilapia'] ?></td>
					</tr>
				    <?php } ?>
			</tbody>
		</table>

		<center><a href="../elementos/principal.php" class="btn btn-primary" style="background-color:rgb(0, 155, 205)"> Volver</a></center>
	</div>
</div>
</div>
</body>
</html>
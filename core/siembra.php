<?php

if (!isset($_SESSION)) {
        session_start();
}


require('../lib/Db.php');
$bd = Db::getInstance();

$id_e = $_POST['estanque'];

$sql = "SELECT s.*, e.nombre, a.nombreproducto, (SELECT COUNT(cantidad) FROM mortalidad WHERE id_estanque = {$id_e})as 'mortalidad' FROM siembra s JOIN especie e on s.id_especie = e.id JOIN alimentacion a on a.id = s.alimentacion WHERE s.estanque = {$id_e}";#armar la consulta
$smtp = $bd->ejecutar($sql); #ejecutar la consulta

$datos =  array();
while ($x = $bd->obtener_fila($smtp)) {
	array_push($datos, $x);
}

?>
<div class="table-responsive">
	<table class="table" border="1">
	<thead>
		<tr>
			<th>Fecha Siembra</th>
			<th>Nombre Pez</th>
			<th>Alimento Suministrado</th>
			<th>Cantidad Inicial Peces</th>
			<th>Mortalidad</th>
			<th>Total Peces Siembra</th>
		</tr>	
	</thead>
	<tbody>
		<?php foreach ($datos as $p) {
			$total = ((int) $p['cantidad_peces']) - ((int) $p['mortalidad']);
		 ?>
			<tr>
				<td><?= $p['fechainicial'] ?></td>
				<td><?= $p['nombre'] ?></td>
				<td><?= $p['nombreproducto'] ?></td>
				<td><?= $p['cantidad_peces'] ?></td>
				<td><?= $p['mortalidad'] ?></td>
				<td><?= $total ?></td>

			</tr>	
		<?php } ?>
	</tbody>
</table>	
</div>

<hr>
<div class="text-center col-lg-12">
	<a href="../elementos/registrarmortalidad.php" class="btn btn-primary"> Registrar Mortalidad</a>	
</div>

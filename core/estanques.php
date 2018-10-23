<?php

if (!isset($_SESSION)) {
        session_start();
}


require('../lib/Db.php');
$bd = Db::getInstance();

$id_g = $_POST['granja'];

$sql = "SELECT * from estanque where id_granja = '{$id_g}'";#armar la consulta
$smtp = $bd->ejecutar($sql); #ejecutar la consulta
$respuesta = '<option value="0">Seleccione un Estanque</option>';
while ($x = $bd->obtener_fila($smtp)) {
	$respuesta .= '<option value="' . $x['id'] . '">' . $x['nombre'] . '</option>';
}

echo $respuesta;

?>
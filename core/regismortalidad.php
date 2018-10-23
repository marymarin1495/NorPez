<?php

if (!isset($_SESSION)) {
        session_start();
}


$fecha = $_POST['fecha'];
$cantmortalidad = $_POST['cantmortalidad'];
$id_estanque = $_POST['id_estanque'];

require('../lib/Db.php');
$bd = Db::getInstance();

$sql = "INSERT INTO mortalidad (id, fecha, cantidad, id_estanque) VALUES (null, '{$fecha}', '{$cantmortalidad}', '{$id_estanque}')";#armar la consulta

$smtp = $bd->ejecutar($sql); #ejecutar la consulta

if ($smtp) {
    echo "Registro Exitoso";
} else {
    echo "Fallo el Registro";
}


?>
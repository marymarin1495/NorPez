<?php

if (!isset($_SESSION)) {
        session_start();
}


$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$tilapia = $_POST['tilapia'];
$bocachico = $_POST['bocachico'];
$cachama = $_POST['cachama'];


require('../lib/Db.php');
$bd = Db::getInstance();

$sql = "INSERT INTO granja (nombre, direccion, id, cachama, bocachico, tilapia) VALUES ('{$nombre}', '{$direccion}', null, '{$cachama}', '{$bocachico}', '{$tilapia}')";#armar la consulta

$smtp = $bd->ejecutar($sql); #ejecutar la consulta

if ($smtp) {
    echo "Registro Exitoso";
} else {
    echo "Fallo el Registro";
}


?>
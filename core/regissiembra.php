<?php

if (!isset($_SESSION)) {
        session_start();
}


$fechainicial = $_POST['fechainicial'];
$especie = $_POST['especie'];
$alimentacion = $_POST['alimentacion'];
$granja = $_POST['granja'];
$estanque = $_POST['estanque'];


require('../lib/Db.php');
$bd = Db::getInstance();

$sql = "INSERT INTO siembra (id, fechainicial, id_especie, alimentacion, granja, estanque) VALUES (null, '{$fechainicial}', '{$especie}', '{$alimentacion}', '{$granja}', '{$estanque}')";#armar la consulta

error_log($sql);
$smtp = $bd->ejecutar($sql); #ejecutar la consulta

if ($smtp) {
    echo "Registro Exitoso";
} else {
    echo "Fallo el Registro";
}


?>
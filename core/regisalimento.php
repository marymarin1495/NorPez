<?php

if (!isset($_SESSION)) {
        session_start();
}


$fechainicial = $_POST['fechainicial'];
$fechafin = $_POST['fechafin'];
$nombreproducto = $_POST['nombreproducto'];
$cantidadalimento = $_POST['cantidadalimento'];


require('../lib/Db.php');
$bd = Db::getInstance();

$sql = "INSERT INTO alimentacion (id, fechainicial, fechafinal, nombreproducto, cantidadalimento) VALUES (NULL,  '{$fechainicial}', '{$fechafin}', '{$nombreproducto}', '{$cantidadalimento}')";#armar la consulta
$smtp = $bd->ejecutar($sql); #ejecutar la consulta

if ($smtp) {
    echo "Registro Exitoso";
} else {
    echo "Fallo el Registro";
}


?>
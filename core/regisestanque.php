<?php

if (!isset($_SESSION)) {
        session_start();
}


$nombre = $_POST['nombre'];
$densidad = $_POST['densidad'];
$longitud = $_POST['longitud'];
$profundidad = $_POST['profundidad'];
$capacidadcarga = $_POST['capacidadcarga'];
$ancho = $_POST['ancho'];
$largo = $_POST['largo'];
$granja = $_POST['granja'];

require('../lib/Db.php');
$bd = Db::getInstance();

$sql = "INSERT INTO estanque (id, nombre, densidad, longitud, profundidad, capacidadcarga, ancho, largo, id_granja) VALUES (null, '{$nombre}', '{$densidad}', '{$longitud}', '{$profundidad}', '{$capacidadcarga}', '{$ancho}', '{$largo}', '{$granja}')";#armar la consulta

error_log($sql);
$smtp = $bd->ejecutar($sql); #ejecutar la consulta

if ($smtp) {
    echo "Registro Exitoso";
} else {
    echo "Fallo el Registro";
}


?>
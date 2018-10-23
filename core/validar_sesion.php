<?php

if (!isset($_SESSION)) {
        session_start();
}


$usuario = $_POST['usuario'];
$clave = md5($_POST['pass']);

require('../lib/Db.php');
$bd = Db::getInstance();

$sql = "SELECT * from usuario where cedula = '{$usuario}' and clave = '" . $clave . "'; ";#armar la consulta
$smtp = $bd->ejecutar($sql); #ejecutar la consulta

while ($x = $bd->obtener_fila($smtp)) {
    $_SESSION['user'] = $x;
}

if (isset($_SESSION['user'])) {
    echo "exito";
} else {
    echo "popo";
}


?>
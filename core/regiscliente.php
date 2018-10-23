<?php

if (!isset($_SESSION)) {
        session_start();
}


$tipodocumento = $_POST['tipodocumento'];
$numdocumento = $_POST['numdocumento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$numtelefono = $_POST['numtelefono'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

require('../lib/Db.php');
$bd = Db::getInstance();

$sql = "INSERT INTO cliente (tipodocumento, numdocumento, nombre, apellido, direccion, numtelefono, correo, clave) VALUES ('{$tipodocumento}', '{$numdocumento}', '{$nombre}', '{$apellido}', '{$direccion}', '{$numtelefono}', '{$correo}', '{$clave}')";#armar la consulta

error_log($sql);
$smtp = $bd->ejecutar($sql); #ejecutar la consulta

if ($smtp) {
    echo "Registro Exitoso";
} else {
    echo "Fallo el Registro";
}


?>
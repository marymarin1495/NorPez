<?php 

function lista_granjas(){
	require('../lib/Db.php');
	$bd = Db::getInstance();

	$sql = "SELECT * from granja ";#armar la consulta
	$smtp = $bd->ejecutar($sql); #ejecutar la consulta
	$granjas = array();
	while ($x = $bd->obtener_fila($smtp)) {
	    array_push($granjas, $x);
	}
	return $granjas;
}

function lista_alimentacion(){
	require_once('../lib/Db.php');
	$bd = Db::getInstance();

	$sql = "SELECT * from alimentacion ";#armar la consulta
	$smtp = $bd->ejecutar($sql); #ejecutar la consulta
	$alimentacion = array();
	while ($s = $bd->obtener_fila($smtp)) {
	    array_push($alimentacion, $s);
	}
	return $alimentacion;

}

function lista_especie(){
	require_once('../lib/Db.php');
	$bd = Db::getInstance();

	$sql = "SELECT * from especie ";#armar la consulta
	$smtp = $bd->ejecutar($sql); #ejecutar la consulta
	$especie = array();
	while ($e = $bd->obtener_fila($smtp)) {
	    array_push($especie, $e);
	}
	return $especie;
}

function lista_estanque(){
	require_once('../lib/Db.php');
	$bd = Db::getInstance();

	$sql = "SELECT * from estanque ";#armar la consulta
	$smtp = $bd->ejecutar($sql); #ejecutar la consulta
	$estanque = array();
	while ($s = $bd->obtener_fila($smtp)) {
	    array_push($estanque, $s);
	}
	return $estanque;
}


function mostrarGranja(){
	require_once('../lib/Db.php');
	$bd = Db::getInstance();
	$sql = "SELECT * from granja";
	$smtp = $bd->ejecutar($sql); #ejecutar la consulta
	$granja = array();
	while ($x = $bd->obtener_fila($smtp)) {
	    array_push($granja, $x);
	}
	return $granja;

}

function mostrarEstanque(){
	require_once('../lib/Db.php');
	$bd = Db::getInstance();
	$sql = "SELECT * from estanque";
	$smtp = $bd->ejecutar($sql); #ejecutar la consulta
	$estanque = array();
	while ($x = $bd->obtener_fila($smtp)) {
	    array_push($estanque, $x);
	}
	return $estanque;

}

function mostrarAlimentacion(){
	require_once('../lib/Db.php');
	$bd = Db::getInstance();
	$sql = "SELECT * from alimentacion";
	$smtp = $bd->ejecutar($sql); #ejecutar la consulta
	$alimentacion = array();
	while ($x = $bd->obtener_fila($smtp)) {
	    array_push($alimentacion, $x);
	}
	return $alimentacion;

}


function mostrarPerfil(){
	require_once('../lib/Db.php');
	$bd = Db::getInstance();
	$sql = "SELECT * from usuario";
	$smtp = $bd->ejecutar($sql); #ejecutar la consulta
	$usuario = array();
	while ($x = $bd->obtener_fila($smtp)) {
	    array_push($usuario, $x);
	}
	return $usuario;

}
?>
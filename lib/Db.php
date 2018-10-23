<?php

class Db {

    private $servidor;
    private $usuario;
    private $pass;
    private $base;
    private $link;
    private $stmt;
    private $array;
    static $_instance;

    function __construct() {
        $this->setConexion();
        $this->conectar();
    }

    /* Evitamos el clonaje del objeto. Patrón Singleton */

    private function __clone() {
        
    }

    /* Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos */

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /* Método para establecer los parámetros de la conexión */

    private function setConexion() {
        $this->servidor = "localhost";
        $this->base = "norpez";
        $this->usuario = "root";
        $this->pass = "";
    }

    /* Realiza la conexión a la base de datos. */

    private function conectar() {
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->base);
        mysqli_set_charset($this->link, "utf8");
    }

    /* Método para ejecutar una sentencia sql */

    public function ejecutar($sql) {
        $this->stmt = mysqli_query($this->link, $sql);
        return $this->stmt;
    }

    /* Método para ejecutar una sentencia multiple sql */

    public function ejecutar_multiple($sql) {
        
        $this->stmt = mysqli_multi_query($this->link, $sql);
        return $this->stmt;
    }

    /* Método para obtener una fila de resultados de la sentencia sql */

    public function obtener_fila($stmt) {
        $this->array = mysqli_fetch_array($stmt);
        return $this->array;
    }

    //Devuelve el último id del insert introducido
    public function lastID() {
        return mysqli_insert_id($this->link);
    }

    //metodo para comprobar la conexion a la base de datos
    public function isConexion() {
        return mysqli_connect_errno();
    }

    //Metodo que retorna un entero con la cantidad de filas 
    //que hay en el resulset
    public function CantidadFilas($stmt) {
        return mysqli_num_rows($stmt);
    }

}

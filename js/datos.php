<?php
class datos{
	private $ip = "sql203.0hi.me";
    private $bd = "bd_escuela";
    private $usuario = "0hi_33093568";
    private $contrasena = "2637643";



    function conecta(){
        //tira de coneccion a la base de datos
        //varia segun el gestor en este caso es mysql
        $pdo = new PDO("mysql:host=".$this->ip.";dbname=".$this->bd."",$this->usuario,$this->contrasena);

        $pdo->exec("set names utf8");
        return $pdo;
    }
}
?>

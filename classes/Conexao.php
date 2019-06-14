<?php 

class Conexao{
    private $con;

    function __construct()
    {
        define("HOST",'localhost');
		define("USUARIO",'root');
		define("BANCO",'appao');
        define("SENHA",'');
        if(!isset($this->con)):
            try {
                $conn = new \PDO('mysql:host='.HOST.';dbname='.BANCO.'', USUARIO, SENHA);
                $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->con = $conn;
            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        endif;
    }

    function conectar(){
        return $this->con;
    }
}
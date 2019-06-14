<?php 
require_once('Conexao.php');
class Padaria{
    private $login;
    private $senha;

	

    function logar(){
        
        $conexao = new Conexao();
        $smtp = $conexao->conectar();
        $query = "SELECT login, senha FROM padaria WHERE login = :login AND senha = :senha";
        $prepara = $smtp->prepare($query);
        $prepara->bindParam(":login",$this->login,PDO::PARAM_STR);
        $prepara->bindParam(":senha",$this->senha,PDO::PARAM_STR);
        
        $prepara->execute();

        if($prepara->rowCount() > 0)
            return true;
        else
            return false;
    }


    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
}
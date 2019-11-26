<?php
include __DIR__.'/Conexao.php';
class login{
	private $login;
	private $senha;

	function getLogin() {
        return $this->login;
    }
    function setLogin($log){
    	$this->login = $log;
    }

	function getSenha() {
        return $this->senha;
    }
    function setSenha($pass){
    	$this->senha = $pass;
    }

  
}
?>
<?php
include __DIR__.'/../model/login.php';
include __DIR__.'/Conexao.php';

class Usuario extends login
{
	private $nome;
	private $cpf;
	private $idade;
	private $sexo;
	private $localizacao;

	public function getNome(){
		return this->nome;
	}

	public function setNome($name) {
    $this->nome= $name;
  	}

	public function getCpf(){
		return this->cpf;
	}
	public function setCpf($CPF) {
    $this->cpf = $CPF;
  	}

	public function getIdade(){
		return this->idade;
	}
	public function setIdade($age) {
    $this->idade = $age;
  	}

	public function getSexo(){
		return this->Sexo;
	}
	public function setSexo($sex) {
    $this->sexo = $sex;
  	}

	public function getLocalizacao(){
		return this->localizacao;
	}
	public function setLocalizacao($local) {
    $this->localizacao = $local;
  	}


    public function AdcionarUsuario($obj){    
    	$sql = "INSERT INTO usuario(NOME, CPF, DATANASC, SEXO, LOCALIZACAO,LOGIN,SENHA) VALUES (:nome,:cpf,:idade,:sexo,:localizacao,:login,:senha)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('NOME',  $obj->nome);
        $consulta->bindValue('CPF' , $obj->sexo);
        $consulta->bindValue('DATANASC' , $obj->idade);
        $consulta->bindValue('SEXO' , $obj->sexo);
		$consulta->bindValue('LOCALIZACAO', $obj->localizacao);
		$consulta->bindValue('LOGIN', $obj->login);
		$consulta->binValue('SENHA', $obj->senha);
    	return $consulta->execute();

	}

	public function AlterarUsuario($obj,$id = null){
		$sql = "UPDATE usuario SET LOGIN =:login WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('LOGIN', $obj->login);
		$consulta->bindValue('ID', $id);
		return $consulta->execute();
	}

	public function AlterarSenha($obj){
		$sql = "UPDATE usuario SET SENHA = :senha WHERE ID=:id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('SENHA',$obj->senha);

	public function DeletarUsuario($obj,$id = null){
		$sql =  "DELETE FROM usuario WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('ID',$id);
		$consulta->execute();
	}


	public function findAll(){
		$sql = "SELECT * FROM usuario";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>
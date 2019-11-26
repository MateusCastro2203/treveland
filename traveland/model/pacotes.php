<?php
include __DIR__.'/Conexao.php';
class pacotes {
    private $local;
    private $preco;
    private $duracao;
    
    public function getLocal() {
        return $this->local;
    }
    public function setLocal($local) {
        $this->local = $local;
        return $this;
    }
    public function getPreco() {
        return $this->preco;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
        return $this;
    }
    public function getDuracao() {
        return $this->duracao;
    }
    public function setDuracao($duracao) {
        $this->duracao = $duracao;
        return $this;
    }
    public function NovoPacote($obj){
    	$sql = "INSERT INTO pacotes(LOCAL,PRECO,DURACAO) VALUES (:local,:preco,:duracao)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('local',  $obj->local);
        $consulta->bindValue('preco', $obj->preco);
        $consulta->bindValue('duracao' , $obj->duracao);
    	return $consulta->execute();

	}


	public function ApagarPacote($obj,$id = null){
		$sql =  "DELETE FROM pacotes WHERE ID = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('ID',$id);
		$consulta->execute();
	}

	public function EncontrarPacote($id = null){
        $sql =  "SELECT * FROM pacotes WHERE ID = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('ID',$id);
        $consulta->execute();
	}

	public function TodosPacotes(){
		$sql = "SELECT * FROM pacotes";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
    
}
}
?>
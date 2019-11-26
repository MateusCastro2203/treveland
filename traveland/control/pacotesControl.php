<?php
include __DIR__.'/../model/pacotes.php';

class pacotesControl{
	function NovoPack($obj){
		$pacotes = new pacotes();
		return $pacotes->NovoPacote($obj);
		header('Location:listar.php');
	}

	function ApagarPack($obj,$id){
		$pacotes = new pacotes();
		return $pacotes->ApagarPacote($obj,$id);
	}



	function EncotrarPack($id = null){
		$pacotes = new pacotes();
		return $pacotes->EncontrarPacote($id);
	}

	function TodosPack(){
		$pacotes = new pacotes();
		return $pacotes->TodosPacotes();
	}
}

?>
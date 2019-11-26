<?php
include __DIR__.'/../model/usuario.php';

class usuariosControl{
	function AdcionarUser($obj){
		$usuario = new usuairio();
		return $ususario->AdcionarUsuario($obj);
		header('Location:listar.php');
	}

	function AlterarUser($obj,$id){
		$usuario = new usuairio();
		return $usuario->AlterarUsuario($obj,$id);
    }
    function Alterarpass($obj){
		$usuario = new usuairio();
		return $usuario->AlterarSenha($obj);
	}

	function DeletarUser($obj,$id){
		$usuario = new usuairio();
		return $usuario->DeletarUsuario($obj,$id);
	}

	function findAll(){
		$usuario = new usuairio();
		return $usuario->findAll();
	}
}

?>
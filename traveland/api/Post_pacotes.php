<?php
include __DIR__.'/../control/pacotesControl.php';
 
$values = file_get_contents('php://input');
$obj =  json_decode($values);

$id = $obj->id;
if(!empty($values)){	
	try {
 		$pacotes = new $pacotes();
 		$pacotes-> NovoPack($obj,$id);
 		http_response_code(200);
 		echo json_encode($obj);
 	}
 	catch (PDOException $e) {
 		http_response_code(400);
		echo json_encode(array("mensagem" => "Parâmetros Inválidos"));
	}
}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não foram enviados parâmetros"));
}


?>
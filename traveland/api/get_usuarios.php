<?php
include __DIR__.'/../Control/usuariosControl.php';
$usuariosControl = new usuariosControl();

header('Content-type: application/json');

if ($usuariosControl->findAll()) {
	http_response_code(200);
	echo json_encode($usuariosControl->findAll());


}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Usuário não encontrado"));
}
?>
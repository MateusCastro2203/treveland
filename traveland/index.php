<?php
define('PASTAPROJETO', 'TRAVELAND');

function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'PUT':
	  	$answer = "update";
	    break;
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  case 'DELETE':
	  	$answer = "delete";
	    break;	
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
}

$answer = checkRequest();

$request = $_SERVER['REQUEST_URI']; 

switch ($request) {
    case '/'.PASTAPROJETO.'/' :
        require __DIR__ . '/View/index.html';
        break;
    case '' :
        require __DIR__ . '/api/api.php';
        break;
    case '/'.PASTAPROJETO.'/usuarios' :
        require __DIR__ . '/api/'.$answer.'_usuarios.php';
        break;
    case '/'.PASTAPROJETO.'/pacotes' :
        require __DIR__ . '/api/'.$answer.'_pacotes.php';
        break;
    
    default:
        require __DIR__ . '/api/NotFind.php';
        break;
}
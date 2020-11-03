<?php

header('Content-Type: application/json');

require_once('../controllers/SessionController.php');

$sessionlog = new SessionController();

//$email = 'email';
//$useremail = $_POST[$email];


$datos = array(1 => "hola", 2 => "date");

$datjson = json_encode($datos);


$dateuser = json_decode(file_get_contents('php://input'),true);


$statelogin = $sessionlog->login($dateuser['useremail'],$dateuser['pass']);


if(empty($dateuser))
{
   echo 'mensaje vacio request session : '.$dateuser;
}
else
{
     echo 'datos recividos al servidor, email del user : '.$useremail. '<br>';
     echo ' arreglo transformado en json '.$datjson. '<br>';
     var_dump($dateuser);
     //echo ' <br>'.$dateuser.' tamaño del arreglo : '.count($dateuser);
     echo ' estado del usuario :'.$statelogin.'<br>';
     var_dump($sessionlog->getDatesUser());
}



?>
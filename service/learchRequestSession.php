<?php

header('Content-Type: application/x-www-form-urlencoded');

require_once('../controllers/SessionController.php');

$sessionlog = new SessionController();


$email = 'email';
$useremail = $_POST[$email];


$datos = array(1 => "hola", 2 => "date");

$datjson = json_encode($datos);


if(empty($useremail))
{
   echo 'mensaje vacio';
}
else
{
     echo 'datos recividos al servidor, email del user : '.$useremail. '<br>';
     echo ' arreglo transformado en json '.$datjson. '\n';
}



?>
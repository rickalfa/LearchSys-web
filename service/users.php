<?php

header('Content-Type: application/json');

require_once('../controllers/SessionController.php');

$sessionlog = new SessionController();

// con esta funcion obtenemos el JSON enviado con POST
$dateuser = json_decode(file_get_contents('php://input'),true);

// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];

$statelogin = $sessionlog->login($dateuser['useremail'],$dateuser['pass']);


if(empty($dateuser))
{
   echo 'mensaje vacio request session : '.$dateuser;
}
else
{
     echo 'datos recividos al servidor, email del user : '.$dateuser['useremail']. '<br>';
     var_dump($dateuser);
<<<<<<< HEAD:service/learchRequestSession.php
     echo ' <br>'.$dateuser['useremail'].' tamaño del arreglo : '.count($dateuser);
     echo ' estado del login '.$statelogin.'<br> TIPO DE METODO REQUEST : '.$method_request.'<br>';
     var_dump($statelogin);
     echo '<br> datos de session : <br> ';
     var_dump($_SESSION);

=======
     //echo ' <br>'.$dateuser.' tamaño del arreglo : '.count($dateuser);
     echo ' estado del usuario :'.$statelogin.'<br>';
     var_dump($sessionlog->getDatesUser());
>>>>>>> 712598478302c9cec7befbb8d035015ac2e660b3:service/users.php
}



?>
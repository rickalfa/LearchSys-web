<?php

require_once('../controllers/SessionController.php');
//require_once('../controllers/CookieController.php');

//require_once('../controllers/MailerController.php');


$sessionlog = new SessionController();

// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];

switch($method_request){
   case 'POST':

      /// con esta funcion obtenemos el JSON enviado con POST
      $dateuser = json_decode(file_get_contents('php://input'),true);

      if(empty($dateuser)){
                
        echo 'fallo  en datos de login';

        }else{

             ///Create Session from Login Method
          $statelogin = $sessionlog->login($dateuser['useremail'],$dateuser['pass']);

            if($statelogin){

                 // Creacion del Json de la respuesta
                 $Jsonr = array('login'=>"done",
                 'user'=>"active",
                 'status'=>"create-session");

               $responselogin = json_encode($Jsonr);               
               echo $responselogin;

            }else{

               // Creacion del Json de la respuesta
                $Jsonr = array('login'=>"fail",
                                  'user'=>"unknow",
                                'status'=>"no-create");

                $responselogin = json_encode($Jsonr);               
                echo $responselogin;

            } 
        }
    
   break;

   default:
      
   break;

}

?>
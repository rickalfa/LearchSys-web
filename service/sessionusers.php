<?php

header('Content-Type: application/json');

require_once('../controllers/SessionController.php');

$sessionlog = new SessionController();


// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];



switch ($method_request) {
   case 'POST':

      /// con esta funcion obtenemos el JSON enviado con POST
      $dateuser = json_decode(file_get_contents('php://input'),true);

     
      if (empty($dateuser)) {
                    

        echo 'fallo  en datos de login';

        }else {

             ///Create Session from Login Method
            $statelogin = $sessionlog->login($dateuser['useremail'],$dateuser['pass']);

            if ($statelogin) {

                echo 'exito en crear session';
            
            }else{

                echo 'Fallo en crear session';

            }
        }
    


   break;




}

?>
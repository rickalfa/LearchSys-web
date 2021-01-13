<?php

header('Content-Type: application/json');

require_once('../controllers/SessionController.php');
//require_once('../controllers/CookieController.php');

$sessionlog = new SessionController();


// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];




switch ($method_request){
   case 'POST':

      /// con esta funcion obtenemos el JSON enviado con POST
      $dateuser = json_decode(file_get_contents('php://input'),true);

      if (empty($dateuser)){
                    

        echo 'fallo  en datos de login';

        }else{

             ///Create Session from Login Method
            $statelogin = $sessionlog->login($dateuser['useremail'],$dateuser['pass']);
 
            var_dump($statelogin);

            $star = true;
            
            if($star) {


                //$cokielearch = new CookieController();
                
                echo 'exito en crear session';
            
            }else{


                $datesres = '{"foo-bar": 12345}';

                 $dateJson = json_decode($datesres);
                                     
                echo $dateJson;

            }
        }
    
   break;
    }

?>
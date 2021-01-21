<?php

require_once('../controllers/SessionController.php');
//require_once('../controllers/CookieController.php');

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
 
            //var_dump($statelogin);

         
            
            if($statelogin){

                //$cokielearch = new CookieController();
                
                $jsondata = array();

                $jsondata["success"] = false;
                $jsondata["data"] = array(
                            'message' => $database->error
                        );

                header('Content-type: application/json; charset=utf-8');
                $jsonres = json_encode($jsondata, JSON_FORCE_OBJECT);
                                     
                 //echo json_encode($jsondata, JSON_FORCE_OBJECT);
            
                 echo '["apple","orange","banana","strawberry"]';

            }else{


                echo "fallo";

            }
        }
    
   break;

   default:
   break;
    }

?>
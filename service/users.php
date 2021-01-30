<?php
header('Content-Type: application/json');

require_once('../controllers/UsersController.php');

//require_once('../controllers/MailerController.php');

$userlearch = new UsersController();

//$Emailchek = new MailerController();


// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];

switch($method_request){

 /// Add User
   case 'POST': 
      /// con esta funcion obtenemos el JSON enviado con POST
      $dateuser = json_decode(file_get_contents('php://input'),true);

      if(empty($dateuser))
     {
      echo 'mensaje vacio request session : '.$dateuser;
     }
    else
     {

      $existemail = array();
      
      //Comprovamos si el email del usario a registrarce existe en la BD
      $existemail = $userlearch->searchemail($dateuser['email']);

      if($existemail[0] == NULL){

         echo ' el email'.$dateuser['email'].' es valido no esta en los registros <br>';
      
         $new_user = array(
 
            'user_id' => 0,
            'name' => $dateuser['name'],
            'secondname' => '#',
            'pass' => $dateuser['pass'],
            'statu' => 3,
            'country' => '#',
            'addres' => '#',
            'email' => $dateuser['email'],
            'phone' => '#',
            'role' => 'user' 
            
        );
   
          echo 'datos recividos al servidor, email del user : '.$dateuser['email']. '<br>';
          // var_dump($dateuser);
          echo ' <br>'.$dateuser['email'].' tamaño del arreglo : '.count($dateuser);
          echo '<br> TIPO DE METODO REQUEST : '.$method_request.'<br>';
          echo '<br> datos de session : <br> ';
          echo ' estado del usuario :'.$statelogin.'<br>';
   
         // metodo para enviar email para comprovar el correo del usuario
         //$Emailchek->send_email($new_user['email']);
         /// enviamos los Datos al servidor para crear el nuevo usuario
          $userlearch->create($new_user);  
      }else{

         var_dump($existemail);
         
         echo '<br> el email : '.$existemail[0]['email'].' ya esta registrado <br>';

      }
         
   }

      break;
   
   default:
      
      break;
}


?>
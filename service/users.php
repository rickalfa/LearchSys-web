<?php
header('Content-Type: application/json');

require_once('../controllers/UsersController.php');

require_once('../controllers/MailerController.php');

$userlearch = new UsersController();

$Emailchek = new MailerController();


// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];

switch ($method_request) {

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

      if ($existemail[0] == NULL) {

      // EMAIL valido no existe en los registros
      //se registra el usuario con los datos entregados

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
   
         // metodo para enviar email para comprovar el correo del usuario
         //$Emailchek->send_email($new_user['email']);

         /// enviamos los Datos al servidor para crear el nuevo usuario
          $userlearch->create($new_user);  

          $Jsonr = array('login'=>"done",
          'user'=>$dateuser['name'],
          'status'=>"register",
           'msj'=>" welcome, register succes  Check you email");

           $responselogin = json_encode($Jsonr);   

            /// RETURN
            echo $responselogin;



      }else{

         // Fail resgister 
         // exist Email 
         $Jsonr = array('login'=>"fail",
                       'user'=>"no-resgister",
                       'status'=>"email-exist",
                        'msj'=>" email : ".$existemail[0]['email']." is use for another user");

       $responselogin = json_encode($Jsonr);   
       
       /// RETURN
       echo $responselogin;
         
       
      }
         
   }

      break;
   
   default:
      
      break;
}


?>
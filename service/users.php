<?php
header('Content-Type: application/json');

require_once('../controllers/UsersController.php');

$userlearch = new UsersController();


// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];

switch ($method_request) {

   case 'POST':  /// Add User
      /// con esta funcion obtenemos el JSON enviado con POST
      $dateuser = json_decode(file_get_contents('php://input'),true);

      if(empty($dateuser))
     {
      echo 'mensaje vacio request session : '.$dateuser;
     }
    else
     {

       //$userlearch->create();

       echo 'datos recividos al servidor, email del user : '.$dateuser['email']. '<br>';
       var_dump($dateuser);
       echo ' <br>'.$dateuser['email'].' tamaño del arreglo : '.count($dateuser);
       echo '<br> TIPO DE METODO REQUEST : '.$method_request.'<br>';
       echo '<br> datos de session : <br> ';
      
       //echo ' <br>'.$dateuser.' tamaño del arreglo : '.count($dateuser);
       echo ' estado del usuario :'.$statelogin.'<br>';

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

      /// enviamos los Datos al servidor para crear el nuevo usuario
       $userlearch->create($new_user);

      }

      break;
   
   default:
      
      break;
}


?>
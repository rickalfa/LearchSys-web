<?php


header('Content-Type: application/json');


require_once('../controllers/FlowClientController.php');

$FlowPayment = new FlowClientController();

// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];

switch($method_request){
   case 'POST':


    break;

   case 'GET':
  
      /// Preparacion de datos para la creacion de la ORDEN de Cobro
       //Para datos opcionales campo "optional" prepara un arreglo JSON
       $optional = array(
       	"rut" => "9999999-9",
       	"otroDato" => "otroDato"
       );
       $optional = json_encode($optional);
       
       //Prepara el arreglo de datos
       $params = array(
       	"commerceOrder" => rand(1100,2000),
       	"subject" => "Pago de servicio Web POR QEU SOMOS LOS MAS PULENTOS",
       	"currency" => "CLP",
       	"amount" => 100000000,
       	"email" => "cliente@gmail.com",
       	"paymentMethod" => 9,
       	"urlConfirmation" => Config::get("BASEURL") . "/examples/payments/confirm.php",
       	"urlReturn" => Config::get("BASEURL") ."/examples/payments/result.php",
       	"optional" => $optional
       );
       //Define el metodo a usar
       $nameserv = "payment/create"; 

       // creamos el proceso de creacion de ORDEN de COBRO 
      $response = $FlowPayment->createpayorder($nameserv, $params);

      echo 'Respuesta Get <br> . respuesta de la orden de pago URL  : '.$response;

      echo ' url de confirmacion : '.$params['urlConfirmation'];

    break;

    default:

    break;

   }

?>
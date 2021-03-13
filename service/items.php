<?php

header('Content-Type: application/json');

requiere_once('../controllers/ItemController');


// adquerimos el tipo de methodo con la que se esta haciendo la request
$method_request = $_SERVER['REQUEST_METHOD'];

switch($method_request){
   case 'POST':

    break;

    default:

    
    break;
    
   }


?>
<?php

/**
 * api flow Client  conect whit Learchsys
 * 
 * 
*/

require_once('flowapiclient/lib/FlowApi.class.php');


class FlowClientController {

    /**
     * propiedades privadas
     */
    
     private $dates_client;
    
     /// clase flow api para los pagos
     private $Flowapi;


    /**
     * CONTRUCTOR de la clase
     */
    public function __construct(){

        $this->Flowapi = new FlowApi();

    }

    /**
     * DESTRUCTOR de la clase 
     */

     public function __destruct(){

     }


     public function createpayorder($serviceName, $params)
     {

        try {

             /// realizamos la peticion con la api FLOW 
          $response = $this->Flowapi->send($serviceName, $params, "POST");
          
         $url = $response['url']."?token=".$response['token'];

           echo $url." respuesta de la peticion send : ".$response;

        } catch (Exception $th) {
           
            /// mensaje de error de la peticon 
            echo $th->getCode()." - ".$th->getMessage();

        }

       

     }

}

 ?>
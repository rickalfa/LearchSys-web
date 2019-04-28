<?php

/*
*clase control de vistas y plantillas de visualizacion

 */

class Controler {


var $view;
var $control;

var $db_name;
var $db_nameuser;
var $db_pass;
var $db_server;


  function __construct()
  { 

    $this->db_name = "Db_datos";
    $this->control = 123;
    $this->db_pass = "clave";
    
    

  } 

  /**
 * Destructor de la clase
 * 
*/

function __destruct(){

}

  public function show()
  {

    echo "nombre base de datos : ".$this->db_name." <br> ";

    echo "name control  : ".$this->control. "<br> ";

  }



}




?>
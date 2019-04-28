<?php

 require_once('Model.php');
 
 
class StatusModel extends Model {

    public $status_id;
    public $status;

    /**
     * Constructor de la clase
     */

    function __construct(){

      
    }

     /**
     * Destructor de la clase
     */

    function __destruct(){

    }

    /**
     * METODOS abstractos de la clase padre CRUD 
     */

    public function create($status_data = array() ){

        foreach($status_data as $key => $value){
          /////  $$key  variables de variables
          ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
          $$key = $value;
             
        }

        $this->query = "INSERT INTO user_status (status) VALUES ( '$status' )";

        $this->setQuery();

    }

    public function read( $status_id = '' ){

        $this->query = ($status_id != '')
         ? "SELECT * FROM user_status WHERE status_id = $status_id "
         : "SELECT * FROM user_status" ;

         $this->getQuery();


         //var_dump($this->rows); ////  transformar a cadena de texto contenido de un objeto

        $count_rows = count($this->rows);

        ////http://php.net/manual/es/control-structures.foreach.php
        $data = array();
        foreach($this->rows as $key => $value){

            array_push($data, $value);
             //$data[$key] = $value;
        }

        return $data;

    }

    public function update($status_data = array()){

        foreach($status_data as $key => $value){

            /////  $$key  variables de variables
            ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
            $$key = $value;
               
          }
  
          $this->query = "UPDATE user_status  SET status = '$status' WHERE status_id = $status_id";
  
          $this->setQuery();
  

    }

    public function delete($status_id = ''){

        $this->query = "DELETE FROM user_status WHERE status_id = $status_id";
  
        $this->setQuery();

    }

    /**
     * METODOS QUE UTILIZAN EL COMANDO MYSQL REPLACE
     */
    public function set($status_data = array()){
        foreach($status_data as $key => $value){
            /////  $$key  variables de variables
            ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
            $$key = $value;
               
          }
  
          $this->query = "REPLACE INTO user_status (status) VALUES ( '$status' )";
  
          $this->setQuery();

    }

    public function get($status_id = '' ){

        $this->query = ($status_id != '')
         ? "SELECT * FROM user_status WHERE status_id = $status_id "
         : "SELECT * FROM user_status" ;

         $this->getQuery();


         //var_dump($this->rows); ////  transformar a cadena de texto contenido de un objeto

        $count_rows = count($this->rows);

        ////http://php.net/manual/es/control-structures.foreach.php
        $data = array();
        foreach($this->rows as $key => $value){

            array_push($data, $value);
             //$data[$key] = $value;
        }

        return $data;

    }

}
 


?>
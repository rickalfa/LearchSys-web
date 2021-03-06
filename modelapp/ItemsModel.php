<?php

 require_once('Model.php');
 
 
class ItemsModel extends Model {

    public $items_id;
    public $items;

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

    public function create($items_data = array() ){

        foreach($items_data as $key => $value){
          /////  $$key  variables de variables
          ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
          $$key = $value;
             
        }

        $this->query = "INSERT INTO item (name, description, price, category, quantity, date_create)
         VALUES ('$name', '$description', '$price', '$category', '$quantity', '$date_create' )";

        $this->setQuery();

    }

    public function read( $item_id = '' ){

        $this->query = ($item_id != '')
         ? "SELECT * FROM item WHERE item_id = $item_id "
         : "SELECT * FROM item" ;

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

    public function update($item_data = array()){

        foreach($item_data as $key => $value){

            /////  $$key  variables de variables
            ///http://php.net/manual/es/language.variables.variable.php
            //http://php.net/manual/es/language.variables.variable.php
            $$key = $value;
               
          }
  
          $this->query = "UPDATE item  SET name = '$name',
          description = $description,
          price = $category,
          category = $category,
          quantity = $quantity,
          date_create = $date_create
           WHERE item_id = $item_id";
  
          $this->setQuery();
  

    }

    public function delete($item_id = ''){

        $this->query = "DELETE FROM item WHERE item_id = $item_id";
  
        $this->setQuery();

    }

    /**
     * METODOS QUE UTILIZAN EL COMANDO MYSQL REPLACE
     */
    public function set($item_data = array()){
        foreach($status_data as $key => $value){
            /////  $$key  variables de variables
            ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
            $$key = $value;
               
          }
  
          $this->query = "REPLACE INTO item (name, description, price, category, quantity, date_create)
          VALUES ('$name', '$description', '$price', '$category', '$quantity', '$date_create' )";
 
  
          $this->setQuery();

    }

    public function get($item_id = '' ){

        $this->query = ($item_id != '')
         ? "SELECT * FROM item WHERE item_id = $status_id "
         : "SELECT * FROM item" ;

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
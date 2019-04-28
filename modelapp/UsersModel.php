<?php

 require_once('Model.php');
 
 
class UsersModel extends Model {

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

    ///Validacion del usuario
    public function validateUser($email, $pass){
        
        echo "<p>Validar Usuario</p>";

        $this->query = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass' ";

        $this->getQuery();

        $data = array();

        foreach( $this->rows as $key => $value){

            array_push($data, $value);
            
        }

        return $data;
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

    public function update($users_data = array()){

        foreach($users_data as $key => $value){

            /////  $$key  variables de variables
            ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
            $$key = $value;
               
          }
  
          $this->query = "UPDATE users  SET name = '$name' WHERE user_id = $user_id";
  
          $this->setQuery();
  

    }

    public function delete($users = ''){

        $this->query = "DELETE FROM users WHERE user_id = '$users'";
  
        $this->setQuery();

    }

    /**
     * METODOS QUE UTILIZAN EL COMANDO MYSQL REPLACE
     */
    public function set($user_data = array()){
        foreach($user_data as $key => $value){
            /////  $$key  variables de variables
            ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
            $$key = $value;
               
          }
  
          $this->query = "REPLACE INTO users (name, secondname, pass, statu, country, addres, email, phone, codpostal )
                                      VALUES ( '$name', '$secondname', MD5('$pass'), '$statu', '$country', '$addres',
                                      '$email', '$phone', '$codpostal' )";
  
          $this->setQuery();

    }

    public function get($user = '' ){

        $this->query = ($user != '')
         ? "SELECT * FROM users WHERE name = '$user' "
         : "SELECT * FROM users" ;

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
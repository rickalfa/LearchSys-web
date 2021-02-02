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
    /// Searxh From Field Email user
    public function searchEmailUser($email)
    {

        $this->query = "SELECT * FROM users WHERE email = '$email'";

        $this->getQuery();

        $data = array();

        foreach( $this->rows as $key => $value){

            array_push($data, $value);
            
        }

        return $data;
    }

    ///Validacion del usuario
    public function validateUser($email, $pass){
        
        

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

     ///CREATE User Method in DB
    public function create($user_data = array() ){

        foreach($user_data as $key => $value){
          /////  $$key  variables de variables
          ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
          $$key = $value;
             
        }

        $this->query = "INSERT INTO users (name, secondname, pass, statu, addres, country, email, role, phone)
         VALUES ('$name', '$secondname','$pass', '$statu', '$addres', '$country', '$email', '$role', '$phone')";

        $this->setQuery();

    }
    /// SELECT Date from DB with USER_ID
    public function read( $user_id = '' ){

        $this->query = ($user_id != '')
         ? "SELECT * FROM users WHERE user_id = $user_id "
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
    /// UPDATE Method From DB
    public function update($users_data = array()){

        foreach($users_data as $key => $value){

            /////  $$key  variables de variables
            ///http://php.net/manual/es/language.variables.variable.phphttp://php.net/manual/es/language.variables.variable.php
            $$key = $value;
               
          }
  
          $this->query = "UPDATE users SET name = '$name',
           secondname = '$secondname',
           country = '$country',
           addres = '$addres',
           codpostal = '$codpostal',
           email ='$email',
           phone = '$phone',
           role = '$role' WHERE user_id = $user_id";
  
          $this->setQuery();
  

    }
    /// DELTE Method from DB
    public function delete($users = ''){

        $this->query = "DELETE FROM users WHERE user_id = '$users'";
  
        $this->setQuery();

    }
    /**
     *    END METHODS CRUD
     * ********************************************************************************
     * 
     */

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

    public function get($user_id = '' ){

        $this->query = ($user_id != '')
         ? "SELECT * FROM users WHERE user_id = $user_id "
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
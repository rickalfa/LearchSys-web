<?php

/**
 * CLASE ABSTRACTA contedoras de varaibles estaticas y valroes de la BD 
 */


abstract class Model {
 //Atributos
 private static $db_host = 'localhost';
 private static $db_user = 'root';
 private static $db_pass = '';
 private static $db_charset = 'utf8';
 private static $db_name = 'u967648059_test';

 private $conn;
 
 protected $dbname;
 protected $query;
 protected $rows = array();

//// METHODS abstractos  para CRUD

abstract protected function create();
abstract protected function read();
abstract protected function update();
abstract protected function delete();
abstract protected function set();
abstract protected function get();


/////PRIVATE METHODS  para CONECTARSE a la base de datos

  private function db_open(){
     $this->conn = new mysqli(
                        self::$db_host,
                        self::$db_user,
                        self::$db_pass,
                        self::$db_name);

      //// Establece el conjunto de caracteres predeterminado del cliente
     $this->conn->set_charset(self::$db_charset);

   }

  /////PRIVATE METHODS  para DESCONECTARSE a la base de datos

  private function db_close(){
   
    $this->conn->close();

  }

  ///Ejecutar consulta simple del tipo INSERT, DELETE o UPDATE
  protected function setQuery(){

    $this->db_open();  //// se estqablece CONEXION con la base de datos

    $this->conn->query($this->query); ///// EJECUCION de la QUERY

    $this->db_close();


  }
  ///Traer Resultados de una sonculta de tipo SELECT en un ARRAY
  protected function getQuery(){

    $this->db_open(); 

      $resultado = $this->conn->query($this->query); ///// EJECUCION de la QUERY

           ////FETCH_ASSOC() devuelve los datos en forma de los nombres de los campos
        while( $this->rows[] = $resultado->fetch_assoc() ); 
    
        
     $this->db_close();
     $resultado->close(); ///Liberamos la memoria del resultado  

    return $this->rows;

  }

} 


?>
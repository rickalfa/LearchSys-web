<?php


class Autoload{

 
    /**
     * Constructor de la clase Autoload
     */
    public function __construct(){

        /// Funcion spl_autoload_register Documentacion
        ///http://php.net/manual/es/function.spl-autoload-register.php
        spl_autoload_register(function ($class_name){

            $models_path = './modelapp/'.$class_name.'.php';
            $controllers_path = './controllers/'.$class_name.'.php';


        

            if(file_exists($models_path)){
               require_once($models_path);

               echo "<p>'desde AUTOLOAD '.$models_path</p>";
            }

            if(file_exists($controllers_path)){
               require_once($controllers_path);
    
               echo "<p>'desde AUTOLOAD '.$controllers_path</p>";
            }

        });

       
    }


     /**
     * Destructor de la clase Autoload
     */
    public function __destruct(){


    }

}
















?>
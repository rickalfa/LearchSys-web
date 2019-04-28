<?php

class ViewController{

    private static $view_path = './views/';


    /**
     * Constructor de la clase router
     */
    public function __construct(){

    }

    /// metodo para llamar al archivo que se vizualisara (Views)
    public function load_view($view){
       
        ///Solicitamos que carge el Archivo Header para las VIEWS
        require_once( self::$view_path . 'header.php');
        require_once( self::$view_path . 'menunavi.php');
        require_once( self::$view_path . $view . '.php');
        require_once( self::$view_path . 'footer.php');
    }

    /**
     * Destructor de la clase Autoload
     */

    public function __destruct(){

    }



}



?>
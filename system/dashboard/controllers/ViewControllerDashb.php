<?php

class ViewControllerDashb{

    private static $view_path = './system/dashboard/views/';
    private static $header_path = '././views/';


    /**
     * Constructor de la clase router
     */
    public function __construct(){

    }

    public function load_view_menu($view){

        require_once( self::$view_path . $view . '.php');

    }

    /// metodo para llamar al archivo que se vizualisara (Views)
    public function load_view($view){
       
        ///Solicitamos que carge el Archivo Header para las VIEWS
        require_once( self::$header_path . 'header.php');
        
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
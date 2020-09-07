<?php

class ViewController{

    private static $view_path = './views/';
    private static $menu_path = './views/menu_nav/';

    /**
     * Constructor de la clase router
     */
    public function __construct(){

    }

      /**
     * Destructor de la clase Autoload
     */

    public function __destruct(){

    }

    public function load_view_menu($view){

        require_once( self::$menu_path . $view . '.php');

    }

    /// metodo para llamar al archivo que se vizualisara (Views)
    public function load_view($view){
       
        ///Solicitamos que carge el Archivo Header para las VIEWS
        require_once( self::$view_path . 'header.php');
        
        require_once( self::$view_path . $view . '.php');
        require_once( self::$view_path . 'footer.php');
    }

  



}



?>
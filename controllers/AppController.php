<?php
require_once('Router.php');

// clase control de flujo de la Aplicacion learch MCVM 
// 



class AppController{

    private $nameApp;
    private $dateCurrent;
    private $url;
    private $routerApp;


    public function __construct($routeUrl)
    {

        $this->routerApp = new Router($routeUrl);

        $this->url = $routeUrl;


    }

    private function setUrl( $newUrl)
    {

     $this->url = $newUrl;

    }

    private function getUrl()
    {
        return $this->url;

    }
  
    public function intitApp()
    {

        /// Inicializamos la app apartir de aqui 
        /// haciendo el primer llamado a router
        $this->routerApp->initRouter($this->url);
        
        





    }


   







};







?>
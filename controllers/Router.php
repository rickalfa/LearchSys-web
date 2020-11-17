<?php


require_once('ViewController.php');

class Router{

    private $route;

    /**
     * Constructor de la clase router
     */
    public function __construct($routeUrl)
    {  
      $this->route = $routeUrl;
       
    }

    /**
     * Destructor de la clase router
     */
    public function __destruct(){


    }

    public function initRouter()
    {

        if( !isset($_SESSION) )
        {
            
            echo "<p>CREACION DE USUARIO</p>";

            ///Parametro de la funcion  session_start. Documentacion
            ///http://php.net/manual/es/session.configuration.php
            ///Buscar opciones en el archivo PHP.ini
            session_start([
                'use_only_cookies' => 1,
                'auto_start' => 1,
                'read_and_close' => true
             ]);
                

        }
       

                echo 'route Init class name : '. __CLASS__;

               ///formulario de autenticacion si no esta validada la autenticacion
               /// se mostrara el login
               
                   ///Inicializamos el controlador de Vistas
                   $controlador = new ViewController();


                   ///  LOAD VIEW NAV MENU 
                   $controlador->load_view_menu('menuUser');

                   //$this->route = isset($_GET['ruta']) ? $_GET['ruta'] : 'home';
             
                   //$routeUrl = str_replace('/Learchsys/LearchSys-web/','',$routeUri );

                   //$controlador->load_view($this->route);


                switch($this->route)
                {
                    case 'home/main':                  
                         $controlador->load_view('home/main');
                        break;
                    
                    case 'noticia':               
                         $controlador->load_view('noticia');
                        break;
        
                    case 'vision':                
                         $controlador->load_view('vision');
                        break;
    
                    case 'download':     
                         $controlador->load_view('download');
                        break;
    
                    case 'members':
                         $controlador->load_view('members');
                        break;

                    case 'login':
                         $controlador->load_view('login');
                        break;    
    
                    case 'salir':
                       
                         $controlador->load_view('salir');
                        break;

                    case 'register':
                       
                            $controlador->load_view('register');
                           break;
    
                    default:
                         $controlador->load_view('error/error404');
    
                        break;
                 }

                }

       private function filterUri($uriReq)
       {
           $urilfil = explode('/', $uriReq);

           return $urilfil;

       }

       




}




?>
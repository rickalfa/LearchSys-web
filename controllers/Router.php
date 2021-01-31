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
            ///CREACION DE USUARIO de Session en caso de no estar Registrado

            ///Parametro de la funcion  session_start. Documentacion
            ///http://php.net/manual/es/session.configuration.php
            ///Buscar opciones en el archivo PHP.ini
            session_start([
                'use_only_cookies' => 2,
                'auto_start' => 1,
                'read_and_close' => true
             ]);
                

        }
       
                //echo 'route Init class name : '. __CLASS__;

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
                    case 'main':                  
                         $controlador->load_view('main');
                        break;
                    
                    case 'contact':               
                         $controlador->load_view('contact');
                        break;
        
                    case 'about':                
                         $controlador->load_view('about');
                        break;
    
                    case 'download':     
                         $controlador->load_view('download');
                        break;
    
                    case 'members':
                         $controlador->load_view('members');
                        break;

                    case 'login':
                        session_start();
                        if ($_SESSION['ok']) {
                            # code...
                            $controlador->load_view('home/main');
                        }else
                        {
                            $controlador->load_view('login');

                        }
                         
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
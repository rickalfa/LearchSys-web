<?php

class Router{

    public $route;

    /**
     * Constructor de la clase router
     */
    public function __construct($route)
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

        /// si la variable $_SESSION no esta definida se asigna el valor de false
        if( !isset($_SESSION['ok']) )
        {

            $_SESSION['ok'] = false;
            
        }else{
            
             $_SESSION['ok'] = true;
            
        }
        
        if( $_SESSION['ok'] )
        {
            /// SE COMPRUEBA QUE LA SESSION OK  fue creada y accedemos a este punto
            /// Aqui hira todo las views de la webapp 
      
            echo 'holas  bienvenido Usuario';

            $this->route = isset($_GET['ruta']) ? $_GET['ruta'] : 'home';
             
            ///Inicializamos el controlador de Vistas
        

            $controlador = new ViewControllerDashb();

            $controlador02 = new ViewController();

             
            $controlador02->load_view_menu('menuUser');
            $controlador->load_view_menu('menunavi');
            

            switch($this->route)
            {
                case 'home':                  
                     $controlador02->load_view('home');
                    break;
                
                case 'productos':               
                     $controlador->load_view('productos');
                    break;
    
                case 'usuarios':                
                     $controlador->load_view('usuarios');
                    break;

                case 'noticia':     
                     $controlador->load_view('noticia');
                    break;

                case 'sales':     
                    $controlador->load_view('sales');
                   break;

                case 'status':
                     if( !isset($_POST['ruta']))
                       $controlador->load_view('status');
    
                           if($_POST['ruta'] == 'status_add')
                           {
                             $controlador->load_view('status_add');
                           }
                    

                     $controlador->load_view('status');
                    break;

                case 'salir':
                     $user_session = new SessionController();
                     $user_session->logout();
                    break;

                default:
                     $controlador->load_view('error/error404');

                    break;

             }

          

        }else{ 
              if( !isset($_POST['user_email']) && !isset($_POST['pass']))
              {

                echo 'FORMULARIO (enviado por ROUTER controler) ';

               ///formulario de autenticacion si no esta validada la autenticacion
               /// se mostrara el login
               
                   ///Inicializamos el controlador de Vistas
                   $controlador = new ViewController();

                   $controlador->load_view_menu('menuUser');

                $this->route = isset($_GET['ruta']) ? $_GET['ruta'] : 'home';
             
                switch($this->route)
                {
                    case 'home':                  
                         $controlador->load_view('home');
                        break;
                    
                    case 'notice':               
                         $controlador->load_view('notice');
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
                         $user_session = new SessionController();
                         $user_session->logout();
                        break;
    
                    default:
                         $controlador->load_view('error/error404');
    
                        break;
    
                 }
    
                
                ///Datos del usuario
                ///print_r($_SESSION);


                }else{
                    
                    
                  echo "<p>'Creacion de la clase Sessioncontroller dentro de route'</p>";

                  $user_session = new SessionController();
 
                  $session = $user_session->login($_POST['user_email'], $_POST['pass']);
                  
                  ///Comprovamos si la variable $session viene vacia

                  print_r($session);

                  if( empty($session[0]))
                  {
                      /// el login fue INCORRECTO
                      echo 'password or user is Incorrect <br>';
                     

                      $viewcontrol = new ViewController();


                      $login_form->load_view_menu('menuUser');

                      $viewcontrol->load_view('login');

                     /// password proporsionado no existen o estan erroneos');

                    }else{
                        /// el login fue un EXITO
                        
                        session_start();
                         
                        $_SESSION['ok'] = true;
                         
                        ///Con esta funcion entregamos los datos a lavariable Global SESSION
                        foreach ($session[0] as $key => $value)
                        {
                            
                            $_SESSION[$key] = $value;
                
                            echo "datos del Usuario :".$key. '= '. $value. '<br>' ;  

                        }
                    
                         
                      ///print_r($session);
                      ///echo $_SESSION['name']. '<br>' ;
                      ///print_r($_SESSION);
                   
                      header('Location: home');
                    }
                }
            }  
             
    }

    /**
     * Destructor de la clase router
     */
    public function __destruct(){


    }


}




?>
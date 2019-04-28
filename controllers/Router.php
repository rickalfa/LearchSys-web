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
        
        //$_SESSION['ok'] = false;
        //$session_ok = $_SESSION['ok'];
        
        if($session_ok)
        {
            echo 'session ok : True ';
        }else{
            echo 'session ok : False ';
        }
        echo 'esta variable session_ok si es false o true : '.$session_ok. '</br>';
        print_r($session_ok);
        

        if( $_SESSION['ok'] )
        {
            /// SE COMPRUEBA QUE LA SESSION OK  fue creada y accedemos a este punto
            /// Aqui hira todo las views de la webapp 
      
            echo 'holas  bienvenido Usuario';

            $this->route = isset($_GET['ruta']) ? $_GET['ruta'] : 'home';
             
            ///Inicializamos el controlador de Vistas
            $controlador = new ViewController();

            switch($this->route)
            {
                case 'home':                  
                     $controlador->load_view('home');
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

                case 'status':
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
               
                
                $login_form = new ViewController;
                
             
                $login_form->load_view('login');
                
                ///Datos del usuario
                print_r($_SESSION);


                }else{
                    
                    
                    echo "<p>'Creacion de la clase Sessioncontroller dentro de route'</p>";
                   $user_session = new SessionController();
 
                   $session = $user_session->login($_POST['user_email'], $_POST['pass']);

                   ///$session = $user_session->login('thea', '2351');
                  
                  ///Comprovamos si la variable $session viene vacia

                  print_r($session);

                  if( empty($session[0]))
                  {
                      /// el login fue INCORRECTO
                      echo 'password or user is Incorrect <br>';
                     

                      $viewcontrol = new ViewController();

                      $viewcontrol->load_view('login');

                     /// header('Location: ./?error=el usuario'.$_POST['user_email'].'y el 
                     /// password proporsionado no existen o estan erroneos');

                    }else{
                        /// el login fue un EXITO
                        
                        ///echo '<br>';
                         
                        echo '<br> el login fue un exito </br>';
                        
                        session_start();
                         
                        $_SESSION['ok'] = true;
                         
                     
                        foreach ($session[0] as $key => $value)
                        {
                            
                            $_SESSION[$key] = $value;
                
                            echo "datos del Usuario :".$key. '= '. $value. '<br>' ;  

                        }
                    
                         
                      ///echo 'password or user is  Correct ';

                      //print_r($session);
                      ///echo $_SESSION['name']. '<br>' ;
                      
                      
                        print_r($_SESSION);
            
                        echo  '<br>' ;
                   
                      ///header('Location: home');
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
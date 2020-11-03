<?php

require_once('../modelapp/UsersModel.php');


echo "nombre de la clase ejecutada :".__CLASS__;

class SessionController
{

    private $session;

    /**
     * Constructor de la clase SessionController
     */
    public function __construct(){
        
        $this->session = new UsersModel();

    }

    public function login($user, $pass){

        $done = FALSE;

        //Comprovamos si el usario existe validando sus datos 
        $dateuser =  $this->session->validateUser($user, $pass);

         if($dateuser[0] == NULL)
         {
            $done = FALSE;

          
         }
         else
         {
            $done = TRUE;
           
            
            $this->createSession($dateuser);


         }

        return $done;



    }

    public function logout(){

        session_start();
        session_destroy();
        header('Location: ./home');

    }

    private function createSession($datesuser)
    {
        session_start();

        foreach($datesuser as $clave=>$value)
        {
         $_SESSION[$clave]= $value;

        }

    }
    
     /**
     * Destructor de la clase SessionController
     */

    public function __destruct(){

    }

}


?>+

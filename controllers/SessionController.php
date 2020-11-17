<?php

require_once('../modelapp/UsersModel.php');



class SessionController
{

    

    private $session;
    private $datesuser;


    /**
     * Constructor de la clase SessionController
     */
    public function __construct(){
        
        echo 'nombre de la clase ejecutada :'. __CLASS__;

        echo "<p>'contructor de la session'</p>";

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

    public function getDatesUser(){


        return $this->datesuser;

    }


    public function logout(){

        session_start();
        session_destroy();
        
    }

    private function createSession($datesuser)
    {
        session_start();

        foreach($datesuser as $clave=>$value)
        {
         $_SESSION[$clave]= $value;

        }

        $_SESSION['ok'] = true;

    }
    
     /**
     * Destructor de la clase SessionController
     */

    public function __destruct(){

    }

}


?>+

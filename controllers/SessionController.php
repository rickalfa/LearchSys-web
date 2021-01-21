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
        
        $this->session = new UsersModel();

    }

    public function login($user, $pass){


        $this->datesuser = $this->session->validateUser($user, $pass);

        if ($this->datesuser[0] == NULL){

            return false;
        
        }
        else
        {
            /// Creamos la session en caso de que el login se exitoso y retornamos true
            session_start();
            $_SESSION['ok'] = true;


            return true;

        }

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


?>

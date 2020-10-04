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
        
        echo "<p>'contructor de la session'</p>";

        $this->session = new UsersModel();

    }

    public function login($user, $pass){

        return $this->session->validateUser($user, $pass);

    }

    public function logout(){

        session_start();
        session_destroy();
        header('Location: ./home');

    }
    
     /**
     * Destructor de la clase SessionController
     */

    public function __destruct(){

    }

}


?>
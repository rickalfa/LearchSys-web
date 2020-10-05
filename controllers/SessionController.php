<?php

require_once('../modelapp/UsersModel.php');

<<<<<<< HEAD
echo ' modulo  SessionController ';
=======
echo "nombre de la clase ejecutada :".__CLASS__;
>>>>>>> b6a4105de73edd342b34c71113eb2b2a15d17fcf

class SessionController
{

    private $session;

    /**
     * Constructor de la clase SessionController
     */
    public function __construct(){
        
        echo "<p>'CONSTRUCT Session controller'</p>";

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
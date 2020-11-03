<?php

require_once('../modelapp/UsersModel.php');

<<<<<<< HEAD

echo "nombre de la clase ejecutada :".__CLASS__;
=======
>>>>>>> 712598478302c9cec7befbb8d035015ac2e660b3

class SessionController
{

    

    private $session;
    private $datesuser;


    /**
     * Constructor de la clase SessionController
     */
    public function __construct(){
        
<<<<<<< HEAD
=======
        echo 'nombre de la clase ejecutada :'. __CLASS__;

        echo "<p>'contructor de la session'</p>";

>>>>>>> 712598478302c9cec7befbb8d035015ac2e660b3
        $this->session = new UsersModel();

    }

    public function login($user, $pass){

<<<<<<< HEAD
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


=======

        $this->datesuser = $this->session->validateUser($user, $pass);

        if ($this->datesuser[0] == NULL) {

            return false;
        
        }
        else
        {
            /// Creamos la session en caso de que el login se exitoso y retornamos true
            session_start();
            $_SESSION['ok'] = true;


            return true;

        }
>>>>>>> 712598478302c9cec7befbb8d035015ac2e660b3

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

    }
    
     /**
     * Destructor de la clase SessionController
     */

    public function __destruct(){

    }

}


?>+

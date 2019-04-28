<?php


///////  control de SESSION class   

include("usuario.php");


class Session extends Usuario{

private $id;
private $status;
private $time;
private $active;
private $startdate;
private $listadd;
private $buys;

//// constructor

  function __construct(){

  $this->status = "active";
  $this->time = "23/23/23";
  $this->active = TRUE;
  $this->startdate = "###";
  $this->listadd = "productos agregados";
  $this->buys = 3;

   /**
    * constructor the father class
    */

    parent::__construct("ricardo",
                         "esteban",
                          "ventura laureda ",
                           "angel@rick.com",
                            "santiago",
                            "chile",
                             "usuario"
                            );
   
   
   }


/**
 * Destructor de la clase
 * 
*/

  function __destruct(){

    echo "soy el destructor del objeto session";

   }



   public function showdate(){
    
    echo " estado de la session :  " . $this->status . "  <br>" ;
    echo " sesion live    : ".$this->active. "<br>";
    echo " email           : " .$this->email." <br>";
    
    ////Method class father
     parent::showinfo();

   }
    
   
  public function getstatus(){

    return $this->status;

  }

  public function gettime(){

    return $this->time;

  }

  public function getactive(){

    return $this->active;

  }

  public function getstartdate(){

    return $this->startdate;

  }

  public function getlistadd(){

    return $this->listadd;

  }

  public function getbuys(){

    return $this->buys;
    
  }

}









?>

<?php

////////////    Usuario class  save all date  

Class Usuario{


private $id;

private static $accion;

protected $name;
protected $namesecond;
protected $addres;
protected $email;
protected $state;
protected $city;
Protected $postalcode;
protected $country;
protected $role;


/**
 *  Consturct of class
 */

public function __construct($nam, $secondnam, $addre, $emaill, $stat, $countr, $role){
   
   
   $this->name = $nam;
   $this->namesecond = $secondnam;
   $this->addres = $addre;
   $this->email = $emaill;
   $this->state = $stat;
   $this->country = $countr;
   $this->role = $role;



}


/**
 * Destructor de la clase
 * 
*/

function __destruct(){

}


static function showAction(){

  self::$accion = "holaaaa";

 

}

 public function showinfo(){

  echo "ID of user           : "  .$this->id. "<br>";
  echo "nombre del usuario   : " .$this->name." <br>";
  echo " email               : " .$this->email."<br>" ;
  echo "   accion            : " .self::$accion." <br>";


 }




}











?>

<?php
/*
* CLASS  product basic for the sell 
*
*/


Class Product {


    private $id;

    private $name;
    private $mark;
    private $weight;
    private $price;
    private $status;
    private $ingresdate;
    private $expirationdate;
    private $typeproduct;
    private $category;
    private $descryption;
    private $country;
    private $img;
    private $stock;
    private $pricesend;
    



/** 
 *   BUILDIING  overload
*/

function __construct($id, $name, $mark, $weight, $price, $ingresdate, $expirationdate, $typeproduct, $category, $descryption, $country, $imagen, $stock){


  }

  /**
 * Destructor de la clase
 * 
*/

function __destruct(){

}


  public function getid(){

    return $this->id;

  }

  public function getname(){

    return $this->name;

  }

  public function getweight(){

    return $this->weight;

  }

  public function getprice(){

    return $this->price;

  }

  public function getingresdate(){

    return $this->ingresdate;

  }

  public function getexpirationdate(){

    return $this->expirationdate;

  }

  public function gettypeproduct(){

    return $this->typeproduct;

  }

  public function getcategory(){

    return $this->category;

  }

  public function getdescryption(){

    return $this->descryption;

  }

  public function getstock(){
    
    return $this->stock;

  }

  public function getimg(){

    return $this->img;

  }

  public function getcountry(){

    return $this->country;

  }
 

}

?>
<?php
/**
 * statusController  controlador del status
 */


 require('./modelapp/ItemModel.php');

 
 Class ItemController{

    private $model;


    /**
     * CONTRUCTOR de la clase
     */
    public function __construct(){

        $this->model = new ItemModel();

    }

    /**
     * DESTRUCTOR de la clase 
     */

     public function __destruct(){

     }

     /**
      * METODOS de la funcion 
      */

    public function create( $item_data = array() ){

        return $this->model->create($item_data);

    }

    public function read( $item_id = ''){

        return $this->model->read($item_id);

    }

    public function update( $item_data = array()){
 
        return $this->model->update($item_data);

    }

    public function delete( $item_id = ''){

        return $this->model->delete($item_id);

    }

    public function set($item_data = array()){

        return $this->set($item_data);

    }

    public function get($item_id = ''){

        return $this->model->get($item_id);

    }

 }



// ?>
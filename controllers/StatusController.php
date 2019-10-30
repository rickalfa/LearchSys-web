<?php
/**
 * statusController  controlador del status
 */


 require('./modelapp/StatusModel.php');

 
 Class StatusController{

    private $model;


    /**
     * CONTRUCTOR de la clase
     */
    public function __construct(){

        $this->model = new StatusModel();

    }

    /**
     * DESTRUCTOR de la clase 
     */

     public function __destruct(){

     }

     /**
      * METODOS de la funcion 
      */

    public function create( $status_data = array() ){

        return $this->model->create($status_data);

    }

    public function read( $status_id = ''){

        return $this->model->read($status_id);

    }

    public function update( $status_data = array()){
 
        return $this->model->update($status_data);

    }

    public function delete( $status_id = ''){

        return $this->model->delete($status_id);

    }

    public function set($status_data = array()){

        return $this->set($status_data);

    }

    public function get($status_id = ''){

        return $this->model->get($status_id);

    }

 }



// ?>
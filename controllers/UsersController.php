<?php
/**
 * statusController  controlador del status
 */


 require('./modelapp/UsersModel.php');

 
 Class UsersController{

    private $model;


    /**
     * CONTRUCTOR de la clase
     */
    public function __construct(){

        $this->model = new UsersModel();

    }

    /**
     * DESTRUCTOR de la clase 
     */

     public function __destruct(){


     }

     /**
      * METODOS de la funcion 
      */

    public function create( $users_data = array() ){

        return $this->model->create($users_data);

    }

    public function read( $users_id = ''){

        return $this->model->read($users_id);

    }

    public function update( $users_data = array()){
 
        return $this->model->update($users_data);

    }

    public function delete( $users_id = ''){

        return $this->model->delete($users_id);

    }

    public function set($users_data = array()){

        return $this->set($users_data);

    }

    public function get($users_id = ''){

        return $this->model->get($users_id);

    }

 }



// ?>
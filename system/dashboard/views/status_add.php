
<?php


$role_user = $_SESSION['role'];

 if($_POST['ruta'] == 'status_add' AND $_SESSION['role'] == 'admin' )
   {

       print('

       <h3> Add Status</h3>

        
          <form method = "POST" >
          <input type = "text" name ="status" placeholder = "status nuevo" required>

          <input type = "hidden" name ="ruta" class = "btn btn-secondary" value = "status_add">
          <input type = "hidden" name ="crud" class = "btn btn-secondary" value = "set">
          <input type = "submit" class = "btn btn-secondary" value = "Add New status">
          </form>
           
       ');

      

   }else{ 
       
          printf('Hola como estas ?, su rol es %s <br> 
            usted no tiene permisos para utilizar esta funcion',$role_user);


    }
     
    if($_POST['ruta'] == 'status_add' && $_SESSION['role'] == 'admin' && $_POST['crud'] == 'set' )
    {
        //Insercion del nuevo status

        $Status_controller = new StatusController();

        $new_status = array(
 
            'status_id' => 0,
            'status' => $_POST['status']
        );
 
        $status = $Status_controller->create($new_status);
 
 
        $template = ' 
        <p> Status  %s Agregado a la tabla status</p>
        
          <script>
              window.onload = function(){
                  reloadPage("status")
              }
                  </script>

        ';
 
        printf($template,$_POST['status']);


       

    }

?>
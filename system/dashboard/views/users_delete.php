
<?php

$Status_controller = new StatusController();

$role_user = $_SESSION['role'];

/// Comprovamos si la Ruta esta llamando a status_delete y comprovamos el rol del Usuario
 if($_POST['ruta'] == 'status_delete' AND $_SESSION['role'] == 'admin' )
   {
       if($_POST['crud'] != 'delete')
       {
         /// Obtengo el registro el cual quiero eliminar 
         $statusId =  $Status_controller->get($_POST['status_id']);

            if( empty($statusId))
            {
             printf('Hola como estas ?, Error no Existe el status_id  %s <br> 
       
             ',$_POST['status_id']);

              }else{

              $template_status = '
              <h3> Delete Status</h3>
              <form method = "POST" >
           
              <h4> estas seguro que quieres eliminar el status : -" %s "
           
              <input type="checkbox" name="deletecheck" value="si"> Delete ?<br>
              </h4> 
              <input  type = "submit"  class = "btn btn-danger" value = "enviar">
              <input type = "hidden" name ="status_id" value = "%s">
              <input type = "hidden" name ="ruta" value = "status_delete">
              <input type = "hidden" name ="crud" value = "delete">
              </form>
              ';

               printf(
               $template_status,
               $statusId[0]['status'],
               $statusId[0]['status_id']
               );

            }
        }

   }else{ 
       
          printf('Hola como estas ?, su rol es %s <br> 
            usted no tiene permisos para utilizar esta funcion  <a class = "btn btn-danger" href="status">Volver</a>',$role_user);


   }

    // Inicio de la operacion 
    //operacion para editar el registro Status

    if($_POST['ruta'] == 'status_delete' && $_SESSION['role'] == 'admin' && $_POST['crud'] == 'delete' )
    {
        
        if( $_POST['deletecheck'] == 'si')
        {
            $new_status =  $_POST['status_id'];
            
            /// metodo que elimina el registro
           $status = $Status_controller->delete($new_status);
    
    
           $template = ' 
           <p> Status  %s fue eliminado de la tabla status</p>
           
           <a class = "btn btn-danger" href="status">Volver</a>
   
           ';
    
           printf($template,$_POST['status']);

        }else{

            $template = ' 
            <p> Status  %s NO fue Eliminado de la tabla status</p>
            
            <a class = "btn btn-danger" href="status">Volver</a>
    
            ';
     
            printf($template,$_POST['status']);
    


        }
      


    }

?>
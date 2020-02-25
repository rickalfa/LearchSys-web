
<?php

$User_controller = new UsersController();

$role_user = $_SESSION['role'];

/// Comprovamos si la Ruta esta llamando a status_delete y comprovamos el rol del Usuario
 if($_POST['ruta'] == 'userdelete' AND $_SESSION['role'] == 'admin' )
   {
       if($_POST['crud'] != 'delete')
       {
         /// Obtengo el registro el cual quiero eliminar 
         $userId =  $User_controller->get($_POST['user_id']);

            if( empty($userId))
            {
             printf('Hola como estas ?, Error no Existe el user_id  %s <br> 
       
             ',$_POST['user_id']);

              }else{

              $template_user = '
              <h3> Delete user</h3>
              <form method = "POST" >
           
              <h4> estas seguro que quieres eliminar el user : -" %s "
           
              <input type="checkbox" name="deletecheck" value="si"> Delete ?<br>
              </h4> 
              <input  type = "submit"  class = "btn btn-danger" value = "enviar">
              <input type = "hidden" name ="user_id" value = "%s">
              <input type = "hidden" name ="ruta" value = "users_delete">
              <input type = "hidden" name ="crud" value = "delete">
              </form>
              ';

               printf(
               $template_user,
               $statusId[0]['name'],
               $statusId[0]['user_id']
               );

            }
        }

   }else{ 
       
          printf('Hola como estas ?, su rol es %s <br> 
            usted no tiene permisos para utilizar esta funcion  <a class = "btn btn-danger" href="status">Volver</a>',$role_user);


   }

    // Inicio de la operacion 
    //operacion para editar el registro Status

    if($_POST['ruta'] == 'users_delete' && $_SESSION['role'] == 'admin' && $_POST['crud'] == 'delete' )
    {
        
        if( $_POST['deletecheck'] == 'si')
        {
            $user_id_delete =  $_POST['user_id'];
            
            /// metodo que elimina el registro
           $user_current_delete = $user_controller->delete($user_id_delete);
    
    
           $template = ' 
           <p> el User  %s fue eliminado de la Base de datos</p>
           
           <a class = "btn btn-danger" href="users">Volver</a>
   
           ';
    
           printf($template,$_POST['name']);

        }else{

            $template = ' 
            <p> El User  %s NO fue Eliminado de la tabla Users</p>
            
            <a class = "btn btn-danger" href="users">Volver</a>
    
            ';
     
            printf($template,$_POST['name']);
    


        }
      


    }

?>

<?php

$user_controller = new UsersController();

$role_user = $_SESSION['role'];
$user_id = $_POST['user_id'];
$curret_ruta = $_POST['ruta'];

/*
$mensaje = 'USER EDITAR  ruta de acceso : %s , Role user : %s, user edit : %s';
*/
printf($mensaje,$curret_ruta , $role_user, $user_id);

/// Comprovamos si la Ruta esta llamando a status_edit y comprovamos el rol del Usuario
 if($curret_ruta == 'editar' && $role_user == 'admin')
   {

    if($_POST['crud'] != 'set')
    {
        $userDatId =  $user_controller->get($user_id);

        if( empty($userDatId))
        {
          printf('Hola como estas ?, Error no Existe el user_id  %s <br> 
         
           ',$_POST['user_id']);

        }else{

           $template_user = '
           <h3> Edit Status</h3>
           <form method = "POST" >
           <input type = "text" placeholder = "user_id" value = "%s" disabled required>
           <input type = "hidden" name ="user_id" value = "%s">
           <input type = "text" name ="name" placeholder = "name user" value = "%s" required>
           
           </br>

           <input type = "text" placeholder = "name user" value = "%s" disabled required>
           <input type = "hidden" name ="name" value = "%s">
           <input type = "text" name ="name" placeholder = "new name " value = "%s" required>
           <input  type = "submit"  class = "btn btn-secondary" value = "Editar">



           <input type = "hidden" name ="ruta" value = "users_edit">
           <input type = "hidden" name ="crud" value = "set">
           </form>
             ';

            printf(
            $template_user,
             
            $userDatId[0]['user_id'],
          
            $userDatId[0]['user_id'],
            $userDatId[0]['user_id'],
            
            
            $userDatId[0]['name'],
            $userDatId[0]['name'],
            $userDatId[0]['name']
            
            );

            }
     }
    }else{ 
       
          printf('Hola como estas ?, su rol es %s <br> 
            usted no tiene permisos para utilizar esta funcion <a class = "btn btn-danger" href="users">Volver</a>',$role_user);


        }

    // Inicio de la operacion 
    //operacion para editar el registro Status

    if($_POST['ruta'] == 'editar' && $_SESSION['role'] == 'admin' && $_POST['crud'] == 'set' )
    {
        //Insercion del nuevo status

        $new_status = array(
 
            'users_id' => $_POST['user_id'],
            'name' => $_POST['n']
        );
 
        $status = $Status_controller->update($new_status);
 
 
        $template = ' 
        <p> El registro fue Editado con Exito¡¡ , el nuevo registro es %s </p>
        <a class = "btn btn-danger" href="users">Volver</a>
        ';
        printf($template,$_POST['name']);

       
       

    }

?>
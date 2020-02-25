<?php

$userController = new UsersController();

$role_user = $_SESSION['role'];
$user_id = $_POST['user_id'];
$curret_ruta = $_POST['ruta'];

$mensaje = 'USER EDITAR  ruta de acceso : %s , Role user : %s, user edit : %s  ';

printf($mensaje,$curret_ruta , $role_user, $user_id);

/// Comprovamos si la Ruta esta llamando a status_edit y comprovamos el rol del Usuario
 if($curret_ruta == 'usereditar' AND $role_user == 'admin')
   {

    if($_POST['crud'] != 'set')
    {
<<<<<<< HEAD
  
=======
        $userDatId = $userController->get($user_id);

        print_r($userDatId);
>>>>>>> b79e9282e7115787c92de9661b2c50f158606bd7

        if( empty($userDatId))
        {
          printf('Hola como estas ?, Error no Existe el user_id  %s <br> 
         
           ',$_POST['user_id']);

        }else{

           $template_user = '
           <h3> Edit Status</h3>
           <form method = "POST" >
           <input type = "text" placeholder = "user_id" value = "user_id" disabled required>
           <input type = "hidden" name ="user_id" value = "%s">
<<<<<<< HEAD
          
=======
           <input type = "text" name ="name" placeholder = "name user" value = "%s" disabled required>
           </br>

           <input type = "text" placeholder = "user_name" value = "user_name" disabled required>
           <input type = "hidden" name ="user_name" value = "%s">
           <input type = "text" name ="user_name" placeholder = "name user" value = "%s" required>
           </br>

           <input type = "text" placeholder = "second name" value = "secondname" disabled required>
           <input type = "hidden" name ="secondname" value = "%s">
           <input type = "text" name ="secondname" placeholder = "secondname" value = "%s" required>
           </br>

           <input type = "text" placeholder = "country" value = "country" disabled required>
           <input type = "hidden" name ="country" value = "%s">
           <input type = "text" name ="country" placeholder = "country" value = "%s" required>
           </br>

           <input type = "text" placeholder = "addres" value = "addres" disabled required>
           <input type = "hidden" name ="addres" value = "%s">
           <input type = "text" name ="addres" placeholder = "addres" value = "%s" required>
           </br>

           <input type = "text" placeholder = "codpostal" value = "codpostal" disabled required>
           <input type = "hidden" name ="codpostal" value = "%s">
           <input type = "text" name ="codpostal" placeholder = "codpostal" value = "%s" required>
           </br>

           <input type = "text" placeholder = "email" value = "email" disabled required>
           <input type = "hidden" name ="email" value = "%s">
           <input type = "text" name ="email" placeholder = "email" value = "%s" required>
           </br>

           <input type = "text" placeholder = "phone" value = "phone" disabled required>
           <input type = "hidden" name ="phone" value = "%s">
           <input type = "text" name ="phone" placeholder = "phone" value = "%s" required>
           </br>

           <input type = "text" placeholder = "role" value = "role" disabled required>
           <input type = "hidden" name ="role" value = "%s">
           <input type = "text" name ="role" placeholder = "role" value = "%s" required>
           
           
           <input  type = "submit"  class = "btn btn-secondary" value = "Editar">
           <input type = "hidden" name ="ruta" value = "editar">
>>>>>>> b79e9282e7115787c92de9661b2c50f158606bd7
           <input type = "hidden" name ="crud" value = "set">
           </form>
             ';

            printf(
            $template_user,
             
            $userDatId[0]['user_id'],
          
            $userDatId[0]['user_id'],
            $userDatId[0]['user_id'],
<<<<<<< HEAD
            
            
        
            $userDatId[0]['user_id'],
            $userDatId[0]['name'],
            $userDatId[0]['name'],
            $userDatId[0]['secondname'],
            $userDatId[0]['secondname'],
            $userDatId[0]['country'],
            $userDatId[0]['country'],
            $userDatId[0]['addres'],
            $userDatId[0]['addres'],
            $userDatId[0]['codpostal'],
            $userDatId[0]['codpostal'],
            $userDatId[0]['email'],
            $userDatId[0]['email'],
            $userDatId[0]['phone'],
            $userDatId[0]['phone'],
            $userDatId[0]['role'],
            $userDatId[0]['role']
>>>>>>> b79e9282e7115787c92de9661b2c50f158606bd7
            
            );

            }
     }
    }else{ 
       
          printf('Hola como estas ?, su rol es %s <br> 
            usted no tiene permisos para utilizar esta funcion
             <a class = "btn btn-danger" href="users">Volver</a>',$role_user);

        }

    // Inicio de la operacion 
    //operacion para editar el registro User

    if($_POST['ruta'] == 'editar' && $_SESSION['role'] == 'admin' && $_POST['crud'] == 'set' )
    {
        //Insercion del nuevo status

        $update_user_date = array(
 
            'user_id' => $_POST['user_id'],
            'name' => $_POST['user_name'],
            'secondname' => $_POST['secondname'],
            'country' => $_POST['country'],
            'addres' => $_POST['addres'],
            'codpostal' => $_POST['codpostal'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'role' => $_POST['role']
            
        );

 
        $user = $userController->update($update_user_date);
        $template = ' 
        <p> El registro fue Editado con Exito¡¡ , el nuevo Name de usuario es: %s </br>
        el nuevo Second name de usuario es: %s </br> 
        el nuevo Country de usuario es: %s </br>
        el nuevo Addres de usuario es: %s </br>
        el nuevo Codpostal de usuario es: %s </br>
        el nuevo Email de usuario es: %s </br>
        el nuevo Phone de usuario es: %s </br>
        el nuevo Role de usuario es: %s </br>  </p>
        <a class = "btn btn-danger" href="users">Volver</a>
        ';
        printf($template,
        $_POST['user_name'],
        $_POST['secondname'],
        $_POST['country'],
        $_POST['addres'],
        $_POST['codpostal'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['role']
        );

    }

?>






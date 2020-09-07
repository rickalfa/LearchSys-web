
<?php

/**
 * Comprovamos el rol del usuario 
 */
$role_user = $_SESSION['role'];

 if($_POST['ruta'] == 'user_add' AND $_SESSION['role'] == 'admin' )
   {

      if ($_POST['crud'] != 'set')
      {
        print('

        <h3> Add User Agregar usuario</h3>
          <form method = "POST" >
          <input type = "text" name ="name" placeholder = "user name" required>
          </br>
          <input type = "text" name ="secondname" placeholder = "secondname" required>
          </br>
          <input type = "email" name ="email" placeholder = "email" required>
          </br>
          <input type = "text" name ="phone" placeholder = "Phone" required>
          </br>
          <input type = "text" name ="country" placeholder = "country" required>
          </br>
          <input type = "text" name ="addres" placeholder = "addres" required>
          </br>
          <input type = "text" name ="role" placeholder = "role" required>
          </br>

          <input type = "hidden" name ="ruta" class = "btn btn-secondary" value = "user_add">
          <input type = "hidden" name ="crud" class = "btn btn-secondary" value = "set">
          <input type = "submit" class = "btn btn-secondary" value = "Add New status">
          </form>
            ');

      
      }
       
    }else{ 
       
    printf('Hola como estas ?, su rol es %s <br> 
      usted no tiene permisos para utilizar esta funcion 
      <a class = "btn btn-danger" href="users">Volver</a>',$role_user);
    }
     
    if($_POST['ruta'] == 'user_add' && $_SESSION['role'] == 'admin' && $_POST['crud'] == 'set' )
    {
        //Insercion del nuevo status

        $user_controller = new UsersController();

        $new_user = array(
 
            'user_id' => 0,
            'name' => $_POST['name'],
            'secondname' => $_POST['secondname'],
            'statu' => 3,
            'country' => $_POST['country'],
            'addres' => $_POST['addres'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'role' => $_POST['role'] 
        );
 
        $user = $user_controller->create($new_user);
 
 
        $template = ' 
        <p> User  -" %s " fue Agregado el nuevo usuario</p>
        
        <a class = "btn btn-danger" href="users">Volver</a>

        ';
 
        printf($template,$_POST['name']);


       

    }

?>
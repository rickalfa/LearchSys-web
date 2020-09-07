
<?php

$Status_controller = new StatusController();

$role_user = $_SESSION['role'];

/// Comprovamos si la Ruta esta llamando a status_edit y comprovamos el rol del Usuario
 if($_POST['ruta'] == 'status_edit' AND $_SESSION['role'] == 'admin')
   {

    if($_POST['crud'] != 'set')
    {
        $statusId =  $Status_controller->get($_POST['status_id']);

        print_r($statusId);

        if( empty($statusId))
        {
          printf('Hola como estas ?, Error no Existe el status_id  %s <br> 
         
           ',$_POST['status_id']);

        }else{

           $template_status = '
           <h3> Edit Status</h3>
           <form method = "POST" >
           <input type = "text" placeholder = "status_id" value = "%s" disabled required>
           <input type = "hidden" name ="status_id" value = "%s">

           <input type = "text" name ="status" placeholder = "status" value = "%s" required>

           <input  type = "submit"  class = "btn btn-secondary" value = "Editar">
           <input type = "hidden" name ="ruta" value = "status_edit">
           <input type = "hidden" name ="crud" value = "set">
           </form>
             ';

            printf(
            $template_status,
            $statusId[0]['status_id'],
            $statusId[0]['status_id'],
            $statusId[0]['status']
            );

            }
    }

   }else{ 
       
          printf('Hola como estas ?, su rol es %s <br> 
            usted no tiene permisos para utilizar esta funcion <a class = "btn btn-danger" href="status">Volver</a>',$role_user);


    }

    // Inicio de la operacion 
    //operacion para editar el registro Status

    if($_POST['ruta'] == 'status_edit' && $_SESSION['role'] == 'admin' && $_POST['crud'] == 'set' )
    {
        //Insercion del nuevo status

        $new_status = array(
 
            'status_id' => $_POST['status_id'],
            'status' => $_POST['status']
        );
 
        $status = $Status_controller->update($new_status);
 
 
        $template = ' 
        <p> El registro fue Editado con Exito¡¡ , el nuevo registro es %s </p>
        <a class = "btn btn-danger" href="status">Volver</a>
        ';
        printf($template,$_POST['status']);
        
    }

?>
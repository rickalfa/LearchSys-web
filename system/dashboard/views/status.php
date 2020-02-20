<?php

print('<h2>GESTION de status para usuarios </h2>');


$status_controller = new StatusController();

$status_table = $status_controller->get();

  if( empty($status_table))
  {
      print('<h4> error esta variable no contiene nada </h4>');
  }else{

      $template_status = ' <div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
         <tr>
           <th>id_Status</th>
           <th>Status name</th>
           <th colspan = "2">
              <form method = "POST" >
                <input type = "hidden" name ="ruta" class = "btn btn-secondary" value = "status_add">
                <input type = "submit" class = "btn btn-secondary" value = "Add new status">
                
              </form>
           </th>
         </tr>
        </thead>

       <tbody>';

       

       for ($n=0; $n < count($status_table) - 1; $n++){ 
           $template_status .='
        <tr>
         <td>' .$status_table[$n]['status_id'].'</td>
         <td>'.$status_table[$n]['status'].'</td>
         <td>
              <form method = "POST" >
                <input type = "hidden" name ="ruta" value = "status_edit">
                <input type = "hidden" name ="status_id" class = "btn btn-secondary" value = "' .$status_table[$n]['status_id'].'">
                <input type = "submit" class = "btn btn-info" value = "Edit">
                
              </form>

         </td>
         <td>
              <form method = "POST" >
              <input type = "hidden" name ="ruta" value = "status_delete">
                <input type = "hidden" name ="status_id" class = "btn btn-secondary" value = "' .$status_table[$n]['status_id'].'">
                <input type = "submit" class = "btn btn-danger" value = "delete">
              </form>
         </td>
       
        </tr>';
        }

        $template_status .='
      </tbody>
      </table>  
      </div> ';

      printf($template_status);

     }

?>
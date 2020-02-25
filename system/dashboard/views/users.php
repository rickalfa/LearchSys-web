<?php


$users_dat = new UsersController();

$users_table = $users_dat->get();

if( empty($users_table))
{
    print('<h4> error esta variable no contiene nada </h4>');
}else{

    $template_users = '
       <h2>Gestion  USUARIOS</h2>
       <div class="table-responsive">
         <table class="table table-striped table-sm">
           <thead>
            <tr>
              <th>id Usuario</th>
              <th>Status</th>
              <th>name</th>
              <th>second name</th>
              <th> @Email</th>
              <th>Phone</th>
              <th>Addres </th>
              <th>country</th>
              <th>Role</th>
              <th colspan = "2">
              <form method = "POST" >
               <input type = "hidden" name ="ruta" value = "user_add">
               <input type = "submit" class = "btn btn-secondary" value = "Add new user">
              </form>
             </th>
            </tr>

           </thead>          
          <tbody>';

          for ($n=0; $n < count($users_table) - 1; $n++){ 
            $template_users .='
           <tr>
             <td>'.$users_table[$n]['user_id'].'</td>
             <td>'.$users_table[$n]['statu'].'</td>
             <td>'.$users_table[$n]['name'].'</td>
             <td>'.$users_table[$n]['secondname'].'</td>
             <td>'.$users_table[$n]['email'].'</td>
             <td>'.$users_table[$n]['phone'].'</td>
             <td>'.$users_table[$n]['addres'].'</td>
             <td>'.$users_table[$n]['country'].'</td>
             <td>'.$users_table[$n]['role'].'</td>

             <td>
             <form method = "POST" >
             <input type = "hidden" name ="ruta" value = "usereditar">
             <input type = "hidden" name ="user_id" class = "btn btn-secondary" value = "' .$users_table[$n]['user_id'].'">
             <input type = "submit" class = "btn btn-info" value = "Edit">
             
           </form>

             <td>
             <form method = "POST" >
              <input type = "hidden" name ="ruta" value = "userdelete">
              <input type = "hidden" name ="user_id" class = "btn btn-secondary"  value = "' .$users_table[$n]['user_id'].'">
              <input type = "submit" class = "btn btn-danger" value = "Delete">
             </form>
             
             </td>

           
            </tr>';
         
          }
            $template_users .='
            </tbody>
           </table>
        
         </div>
        ';

      printf($template_users);

     }

 $template = '<h4> Hola  %s como estas ?</h4>
              <h5>Como te encuentras hoy ?</h5>';

printf($template,
       $_SESSION['name']
      );





?>
<?php

 echo '<h2>  USUARIOS</h2>
       <div class="table-responsive">
         <table class="table table-striped table-sm">
           <thead>
            <tr>
              <th>id Usuario</th>
              <th>User name</th>
              <th>Status</th>
              <th>name</th>
              <th>second name</th>
              <th> @Email</th>
              <th>Phone</th>
              <th>Addres </th>
              <th>country</th>

            </tr>
           </thead>
          <tbody>
           <tr>
            <td>1,001</td>
            <td>Lorem</td>
            <td>Administrador</td>
            <td>ipsum</td>
            <td>dolor</td>
            <td>sit</td>
            <td>sit</td>
            <td>sit</td>
            <td>colombia</td>
           </tr>
          </tbody>
         </table>
         <input type = "button" class = "btn btn-primary" value = "Send">
         <input type = "button" class = "btn btn-secondary" value = "Add">
         <input type = "button" class = "btn btn-danger" value = "Delete">
         <input type = "button" class = "btn btn-info" value = "Edit">

        </div>  ';


 $template = '<h4> Hola  %s como estas ?</h4>
              <h5>Como te encuentras hoy ?</h5>';

printf($template,
       $_SESSION['name']
      );





?>
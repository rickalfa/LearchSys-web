
  <?php

   require('././controllers/config/configapp.php');

   echo ROOTPROJECT;

 ///NAVEGATION MENU User No logger
session_start();

if(!$_SESSION['ok'])
      {
        echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

 <a class="navbar-brand" href="#">LearchSys</a>

  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

    <li class=nav-item active>
      <a class="nav-link" href= "'.ROOTPROJECT.'home/main ">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="'.ROOTPROJECT.'noticia">Notice</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="'.ROOTPROJECT.'vision">vision</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="'.ROOTPROJECT.'download">Download</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="'.ROOTPROJECT.'member">Members</a>
    </li>
  
  </ul>

  <ul class="navbar-nav  mt-lg-0">
    <li class="nav-item">
    <a class="nav-link" href="'.ROOTPROJECT.'login">Login</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="'.ROOTPROJECT.'register">Register</a>
    </li>
  </ul>

</nav> ';
 ///END  NAVEGATION MENU  NO logger
    }else
    {
      ///NAVEGATION MENU User logging
      echo '
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" >
      
       <a class="navbar-brand" href="#">LearchSys</a>
      
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
          <li class=nav-item active>
            <a class="nav-link" href="'.ROOTPROJECT.'home/main">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="'.ROOTPROJECT.'noticia">Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="'.ROOTPROJECT.'vision">vision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="'.ROOTPROJECT.'download">Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="'.ROOTPROJECT.'member">Members</a>
          </li>
          </ul>

          <li>
          <div class="btn-group">
          <button class="btn btn-success btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User menu
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Edit</a>
            <a class="dropdown-item" href="'.ROOTPROJECT.'salir">Logout</a>
            
          </div>
        </div>
        </li>

      
      </nav> ';

    }
     ///END NAVEGATION MENU User logging


?>

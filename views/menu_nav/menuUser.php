
  <?php

   require('././controllers/config/configapp.php');

   //echo ROOTPROJECT;

 ///NAVEGATION MENU User No logger
session_start();

if(!$_SESSION['ok'])
      {
        /// Nav menu EDGE
        echo '  
        <!-- Encabezado -->

        <header class="header d-flex flex-row justify-content-end align-items-center trans_200">
      
          <!-- Logo -->
          <div class="logo mr-auto">
            <a href="">EDGE<span>{Code}</span></a>
          </div>
      
          <!-- Navegacion -->
          <nav class="main_nav justify-self-end text-right">
            <ul>
              <li class="active"><a href="'.ROOTPROJECT.'main">Inicio</a></li>
              <li><a href="'.ROOTPROJECT.'about">Nosotros</a></li>
              <li><a href="'.ROOTPROJECT.'services">Servicios</a></li>
              <li><a href="'.ROOTPROJECT.'contact">Contacto</a></li>
            </ul>
      
      
          </nav>
      
          <!-- contenedor 1 -->
          <div class="hamburger_container bez_1">
            <i class="fas fa-bars trans_200"></i>
          </div>
      
        </header>
';
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

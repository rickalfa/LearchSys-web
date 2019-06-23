
  <?php
 ///NAVEGATION MENU User No logger
if(!$_SESSION['ok'])
      {
        echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

 <a class="navbar-brand" href="#">LearchSys</a>

  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

    <li class=nav-item active>
      <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="notice">Notice</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="vision">vision</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="download">Download</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="member">Members</a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="login">Login</a>
    </li>
      
  </ul>
</nav> ';
 ///END  NAVEGATION MENU  NO logger
    }else
    {
      ///NAVEGATION MENU User logging
      echo '
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
      
       <a class="navbar-brand" href="#">LearchSys</a>
      
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
          <li class=nav-item active>
            <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice">Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vision">vision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="download">Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="member">Members</a>
          </li>
           
        </ul>
      </nav> ';

    }
     ///END NAVEGATION MENU User logging


?>

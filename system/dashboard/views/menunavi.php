

<!-- NAVEGATION MENU -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

<a class="navbar-brand" href="home">LearchSys-Darshboard</a>

  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

    
    <li class="nav-item">
      <a class="nav-link" href="usuarios">usuarios</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="productos">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="status">Status</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sales">Sales</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="salir">Logout</a>
    </li>

  </ul>
</nav> 


<!-- END  NAVEGATION MENU -->



<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="sales">Sales Views</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <h2>Dates Views</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open menu side</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

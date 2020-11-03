<?php

echo '<h2>Salir </h2>';

//$Sessionuser = new SessionController();

session_start();

session_destroy();

//$Sessionuser->logout();
$self = $_SERVER['PHP_SELF'];

location($self);

//header("refresh:0.5; url=$_GET['ruta']=home/main");

$_GET['ruta']="home/main";













?>
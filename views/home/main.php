
<?php

session_start();

$template = '<h2> Hola  %s como estas ?</h2> <br>';

printf($template, $_SESSION['name']);

var_dump($_SESSION);


echo '<br>  estado de la session  : '.$_SESSION['ok']. '</br>';


print_r($_SESSION .'<br>');
print_r($_SERVER);

$routeUri = $_SERVER['REQUEST_URI'];
$HttpsSer = $_SERVER['HTTPS'];

$route1 = $_GET['ruta'];
$route2 = $_GET['subruta'];

$routeUrl = str_replace('/Learchsys/LearchSys-web/','',$routeUri);

print('<br> URI Actual : '.$routeUrl.'<br>');
print('<br> HTTPS Actual : '.$HttpsSer.'<br>');

printf('<br> <h4> ruta 1 : %s -  Sub ruta 2 : %s </h4> <br> ', $route1, $route2);


?>
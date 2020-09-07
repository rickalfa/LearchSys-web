
<?php


$template = '<h2> Hola  %s como estas ?</h2>';

printf($template, $_SESSION['name']);

echo 'hola mada facka '.$_SESSION['ok']. '</br>';


print_r($_SESSION .'<br>');
print_r($_SERVER);

$routeUri = $_SERVER['REQUEST_URI'];
$HttpsSer = $_SERVER['HTTPS'];

$route1 = $_GET['ruta'];
$route2 = $_GET['subruta'];

$routeUrl = str_replace('/Learchsys/LearchSys-web/','',$routeUri);

print('URI Actual : '.$routeUrl);
print('HTTPS Actual : '.$HttpsSer);

printf('<h4> ruta 1 : %s -  Sub ruta 2 : %s </h4>', $route1, $route2);


?>
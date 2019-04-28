<?php

echo '<h2> Index.php</h2>';

require_once('controllers/Autoload.php');

require_once('controllers/Router.php');


$autoload = new Autoload();


$route = isset($_GET['ruta']) ? $_GET['ruta']: 'home' ;


$route_shop = new Router($route);





?>
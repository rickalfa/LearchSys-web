<?php

require_once('controllers/Autoload.php');

require_once('controllers/AppController.php');

$autoload = new Autoload();

$route = isset($_GET['ruta']) ? $_GET['ruta']: 'home/main';

$route2param = $_GET['ruta'];

echo 'la ruta de dos paramatros es : '.$route2param . ' --- ';

//$routeurl = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI']: 'home/main' ;

$AppLearch = new AppController($route);

$AppLearch->intitApp();






?>
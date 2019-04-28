
<?php


$template = '<h2> Hola  %s como estas ?</h2>';

printf($template, $_SESSION['name']);

echo 'hola mada facka '.$_SESSION['ok']. '</br>';


print_r($_SESSION);
?>
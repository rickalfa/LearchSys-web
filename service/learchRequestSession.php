<?php

header('Content-Type: application/x-www-form-urlencoded');

require_once('../controllers/test.php');

require_once('../controllers/SessionController.php');

$sessionlog = new SessionController();


$email = 'email';

$useremail = $_POST[$email];


if(empty($useremail))
{
   echo 'mensaje vacio';
}
else
{
     echo 'datos recividos al servidor, email del user : '.$useremail;
}



?>
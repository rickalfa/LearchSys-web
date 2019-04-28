<?php

require('./modelapp/StatusModel.php');



echo '<h1>CRUD vista de las tablas por MVC </h1>';

$status = new StatusModel();

$status->read();




?>
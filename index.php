<?php

//Mostrar errores 
ini_set('display_errors' ,1);
ini_set('log_errors' ,1);
ini_set('error_log','C:/xampp/htdocs/SWEntrevistaClinica/php_error_log');


//Requerimientos
require_once "Controllers/routes.controller.php";
require_once "Models/connection.php";

Connection::infoDatabase();
echo' <pre>'; print_r(Connection::connect()); echo '</pre>';
return;

$index = new RoutesController();
$index -> Index();


//echo' <pre>'; print_r(Connection::infoDatabase()); echo '</pre>';

//
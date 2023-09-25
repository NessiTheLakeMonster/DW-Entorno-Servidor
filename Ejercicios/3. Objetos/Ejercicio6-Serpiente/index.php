<?php

require_once('Serpiente.php');
require_once('Nido.php');
require_once('Factoria.php');

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; 
$paths = $_SERVER['REQUEST_URI'];

$args = explode('/', $paths);
unset($args[0]);

?>
<?php

require_once(__DIR__.'/Modelo/Animal.php');
require_once(__DIR__.'/Modelo/Perro.php');
require_once(__DIR__.'/Modelo/Gato.php');
require_once(__DIR__.'/Auxiliar/Factoria.php');

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; 
$paths = $_SERVER['REQUEST_URI'];
$args = explode('/', $paths);

$v = Factoria::generarMultAnimales();

?>
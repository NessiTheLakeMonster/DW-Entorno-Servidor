<?php

require_once('Aula.php');
require_once('Ordenador.php');
require_once('Factoria.php');

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; 
$paths = $_SERVER['REQUEST_URI'];
$args = explode('/', $paths);

$aula = Factoria::generarAula();
print_r($aula);

?>
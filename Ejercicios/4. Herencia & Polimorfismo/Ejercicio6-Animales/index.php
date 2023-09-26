<?php

require_once(__DIR__.'/Modelo/Animal.php');
require_once(__DIR__.'/Modelo/Perro.php');
require_once(__DIR__.'/Modelo/Gato.php');
require_once(__DIR__.'/Modelo/Elefante.php');
require_once(__DIR__.'/Auxiliar/Factoria.php');

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; 
$paths = $_SERVER['REQUEST_URI'];
$args = explode('/', $paths);

unset($args[0]);

$animales = Factoria::generarMultAnimales();


if ($requestMethod == 'GET') {
    $v = [1,2,3,4];
    $cod =202;
    $mes = 'Todo OK';
    header("HTTP/1.1 " . $cod . ' ' . $mes);

    echo json_encode($animales); 
} else {

}

?>
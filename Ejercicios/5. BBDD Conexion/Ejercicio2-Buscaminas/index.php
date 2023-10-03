<?php

require_once __DIR__.'/Auxiliar/Conexion.php';
require_once __DIR__.'/Auxiliar/Factoria.php';
require_once __DIR__.'/Modelo/Tablero.php';

header("Content-Type:application/json");
$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths =  $_SERVER['REQUEST_URI'];
$datosRecibidos = file_get_contents("php://input");

$argus = explode('/', $paths);
unset($argus[0]);

if ($requestMethod == 'GET') {

} else if ($requestMethod == 'POST') {
    
}
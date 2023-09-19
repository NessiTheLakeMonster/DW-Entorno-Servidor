<?php

require_once('Coche.php');
require_once('Factoria.php');

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; 
$paths = $_SERVER['REQUEST_URI'];
$args = explode('/', $paths);

$coche = Factoria::generarCoche();
$parking = Factoria::generarMultCoches();



if ($requestMethod == 'GET') {
    
    $v = [1,2,3,4];
    $cod =202;
    $mes = 'Todo OK';
    header("HTTP/1.1 " . $cod . ' ' . $mes);

    echo json_encode($parking);    
} else {
    $cod = 200;
    $mes = 'Verbo no soportado';
    header("HTTP/1.1 " . $cod . ' ' . $mes);

    echo json_encode(['cod' => $cod,
                    'mes' => $mes]);
}

?>
<?php

require_once(__DIR__.'/Auxiliar/Factoria.php');
require_once(__DIR__.'/Modelo/Aldeano.php');
require_once(__DIR__.'/Modelo/Civilizacion.php');
require_once(__DIR__.'/Modelo/Mina.php');

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; 
$paths = $_SERVER['REQUEST_URI'];
/* $args = explode('/', $paths); */

if ($requestMethod == 'POST') {
    $datosRecibidos = file_get_contents('php://input');
    $data = json_decode($datosRecibidos, true);

    $c1 = Factoria::generarCivilizacion($data[0]['nombre'], $data[0]['rey'], $data[0]['vida']);
    $c2 = Factoria::generarCivilizacion($data[1]['nombre'], $data[1]['rey'], $data[1]['vida']);
    
} elseif ($requestMethod == 'GET') {
    $c1 = Factoria::generarCivilizacion('ESP', 'Isabel I', 150);
    $c2 = Factoria::generarCivilizacion('BIZ', 'Constantino II', 150);

    $aldeanosC1 = [];
    $aldeanosC2 = [];

    for ($i=0; $i < 5; $i++) { 
        $aC1 = Factoria::generarAldeano($c1);
        $aC1 -> setSalud(200);
        array_push($aldeanosC1, $aC1);

        $aC2 = Factoria::generarAldeano($c2);
        $aC2 -> setSalud(250);
        array_push($aldeanosC1, $aC2);
    }

    echo json_encode($aldeanosC1);
}

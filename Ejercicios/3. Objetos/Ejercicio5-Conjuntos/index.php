<?php

require_once('Factoria.php');
require_once('Conjunto.php');

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; 
$paths = $_SERVER['REQUEST_URI'];

$args = explode('/', $paths);
unset($args[0]);



const abecedario = ['A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z'];
$conjuntoA = new Conjunto();
$conjuntoB = new Conjunto();

$union = [];
$interseccion = [];

$letras = Factoria::separarLetras(abecedario);
print_r($letras);

//$conjuntoA = Factoria::crearConjunto();
$conjuntoA -> addLetras($conjuntoA,$letras);
print_r($conjuntoA);

if ($args[1] == 'i') { // Interseccion
    

} elseif ($args[1] == 'u') { // Union
    for ($i=0; $i < count($letras); $i++) { 
        if (in_array($letras[$i], $conjuntoA -> conjunto) && in_array($letras[$i], $conjuntoB -> conjunto)) {
            array_splice($union, $i, 1, $letras);
        }
    }

}

if ($requestMethod == 'GET') {

} else {
    $cod = 200;
    $mes = 'Verbo no soportado';
    header("HTTP/1.1 " . $cod . ' ' . $mes);

    echo json_encode(['cod' => $cod,
                    'mes' => $mes]);
}

?>
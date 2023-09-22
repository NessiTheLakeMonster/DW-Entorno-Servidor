<?php

require_once('Factoria.php');
require_once('Conjunto.php');

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; 
$paths = $_SERVER['REQUEST_URI'];

$args = explode('/', $paths);
unset($args[0]);


const abecedario = 'A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z';
$conjuntoA = new Conjunto();
$conjuntoB = new Conjunto();

$letras = Factoria::separarLetras(abecedario);
print_r($letras);

//$conjuntoA = Factoria::crearConjunto();
$conjuntoA -> addLetras($conjuntoA,$letras);
print_r($conjuntoA);

if ($args[1] == 'i') {

} elseif ($args[1] == 'u') {

}

?>
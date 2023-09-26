<?php

require_once('Personaje.php');

echo 'Aula de los personajes: ' . Personaje::$AULA;

$p = new Personaje('Ines', 22);
echo $p . '<br>';

$p -> setNombre('Javi');
echo $p . '<br>';
echo 'La persona: ' . $p -> getNombre(). ' tiene ' . strval($p -> getEdad()) . ' años. <br>';

echo Personaje::metodoEstatico();
?>
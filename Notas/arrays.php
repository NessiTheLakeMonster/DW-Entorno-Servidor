<?php

$vec = array(1,2,3,4);
$vec2 = ['a', 9.4, true, 'cadena', 9]; // Permite arrays con varios tipos a la vez

$vec3 = [];
$vect7 = array();

for ($i = 0; $i < count($vec); $i++) {
    echo $vec[$i]. '<br>';
}

// Se usa mas esta opcion
foreach ($vec as $key => $value) {
    echo $key . '->' . $value . '<br>';
}

$vec4 = ['1A' => 'Carlos',
        '2B' => 'Inés'];

foreach ($vec4 as $key => $value) {
    echo $key . '->' . $value . '<br>';
}

// Añadir un elemento
$vec4[] = ['3D' => 'Jaime'];

$a = 18;
unset($a); // Para hacer que deje de existir esa variable
unset($vec2);

$vector = array();

function rellenarVector(&$v) { // Para rellenar vector con una funcion
    $v = range(1,7);
}

rellenarVector($vector);

?>
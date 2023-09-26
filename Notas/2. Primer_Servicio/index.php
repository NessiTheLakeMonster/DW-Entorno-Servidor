<?php

// a) Cabecera devolucion JSON
header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"]; // Devuelve el verbo (GET,POST,etc...)
$paths = $_SERVER['REQUEST_URI']; // Devuelve los argumentos que van despues del puerto
$args = explode('/', $paths); // Separas los argumentos en un vector

unset($args[0]); // Quitas la posicion 0 del array de argumentos porque siempre esta vacia 

if ($requestMethod == 'GET') {
    $v = [1,2,3,4];
    $cod =202;
    $mes = 'Todo OK';
    header("HTTP/1.1 " . $cod . ' ' . $mes);

    echo json_encode($v);

} else {
    // b) Cabecera devolucion peticion
    $cod = 200;
    $mes = 'Verbo no soportado';
    header("HTTP/1.1 " . $cod . ' ' . $mes);

    // c) Enviar la respuesta
    echo json_encode(['cod' => $cod,
                    'mes' => $mes]);
}

?>
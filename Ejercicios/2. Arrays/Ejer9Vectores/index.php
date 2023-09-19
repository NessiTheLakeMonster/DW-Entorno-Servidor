<?php
    header("Content-Type:application/json");

    require 'index_SinS.php';

    $requestMethod = $_SERVER["REQUEST_METHOD"];
    $paths = $_SERVER['REQUEST_URI'];
    $args = explode('/', $paths);

    unset($args[0]);

    $num = $args[1];
    $array = str_split($num);

    $rev = revertirNum($array);
    comprobarCapicua($array, $rev);

    if ($requestMethod == 'GET') {
        

    } else {
        $cod = 200;
        $mes = 'Verbo no soportado';
        header("HTTP/1.1 " . $cod . ' ' . $mes);

        echo json_encode(['cod' => $cod,
                        'mes' => $mes]);        
    }

?>
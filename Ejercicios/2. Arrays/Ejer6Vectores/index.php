<?php
    header("Content-Type:application/json");

    require 'index_SinS.php';

    $requestMethod = $_SERVER["REQUEST_METHOD"];
    $paths = $_SERVER['REQUEST_URI'];
    $args = explode('/', $paths);

    unset($args[0]);

    $vector = range(1,100);
    $num = $args[1];

    rellenarVector($vector);

    if ($requestMethod == 'GET') {
        if ($args[1] > 100 || $args[1] < 1 || !is_numeric($args[1])) {
            $cod = 200;
            $mes = 'Numero para buscar demasiado alto o bajo';
            header("HTTP/1.1 " . $cod . ' ' . $mes);

            echo json_encode(['cod' => $cod,
                            'mes' => $mes]);
        } else {
            $cod =202;
            $mes = 'Todo OK';
            header("HTTP/1.1 " . $cod . ' ' . $mes);

            echo json_encode('El ' . $num . ' se repite ' . 
            aparecer($vector, $num));
        } 
    } else {
        $cod = 200;
        $mes = 'Verbo no soportado';
        header("HTTP/1.1 " . $cod . ' ' . $mes);

        echo json_encode(['cod' => $cod,
                        'mes' => $mes]);
    }
?>
<?php

class Controlador
{

    static function crearPartida($p)
    {
        if (Conexion::insertarPartida($p)) {
            $insercion = true;
            
            $cod = 201;
            $msg = 'TODO OK';

            header(Constantes::$headerMssg . $cod . ' ' . $msg);
            $respuesta = [
                'Cod: ' => $cod,
                'Mensaje: ' => $msg,
                'Inserccion: ' =>  $insercion
            ];
            echo json_encode($respuesta);
        } else {
            $insercion = false;

            $cod = 201;
            $msg = 'NO SE PUDO CREAR LA PARTIDA';

            header(Constantes::$headerMssg . $cod . ' ' . $msg);
            $respuesta = [
                'Cod: ' => $cod,
                'Mensaje: ' => $msg,
                'Inserccion: ' =>  $insercion
            ];
            echo json_encode($respuesta);
        }
    }
}

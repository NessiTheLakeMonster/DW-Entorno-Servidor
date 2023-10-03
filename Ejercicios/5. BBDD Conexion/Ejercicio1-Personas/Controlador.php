<?php 
class Controlador {

    static function getTodas(){
        $arrayPersonas = Conexion::SeleccionarTodasPersonas();
        $cod = 201;
        $mes = "TODO OK";
        header(Constantes::$headerMssg . $cod . ' ' . $mes);
        $respuesta = [
            'Cod:' => $cod,
            'Mensaje:' => $mes,
            'Personas' => $arrayPersonas
        ];
        echo json_encode($respuesta);
    }

    static function getPersona($dni){
        $persona = Conexion::seleccionarPersona($dni);
            $cod = 201;
            $mes = "TODO OK";
            header(Constantes::$headerMssg . $cod . ' ' . $mes);
            $respuesta = [
                'Cod:' => $cod,
                'Mensaje:' => $mes,
                'Persona' => $persona
            ];
            echo json_encode($respuesta);
    }

    static function insertarPersona($p){
        if (Conexion::insertarPersona($p)) {
            $inserccion = true;
            $cod = 201;
            $mes = "TODO OK";
            header(Constantes::$headerMssg . $cod . ' ' . $mes);
            $respuesta = [
                'Cod:' => $cod,
                'Mensaje:' => $mes,
                'Inserccion' => $inserccion
            ];
            echo json_encode($respuesta);
    }
        else {
            $inserccion = false;
            $cod = 201;
            $mes = "TODO OK";
            header(Constantes::$headerMssg . $cod . ' ' . $mes);
            $respuesta = [
                'Cod:' => $cod,
                'Mensaje:' => $mes,
                'Inserccion' => $inserccion
            ];
            echo json_encode($respuesta);
        }
    }
}
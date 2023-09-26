<?php 
require_once (__DIR__.'/Modelo/Personaje.php');
require_once (__DIR__ .'/Auxiliar/Factoria.php');
require_once (__DIR__ .'/Modelo/Elfo.php');

// header("Content-Type:application/json");



//  echo 'Aula de los personajes: '.Personaje::$AULA.'<br>';
//  $v = [];
//  $v[] = new Personaje('Javi',17);
//  $v[] = new Personaje('Juan',107);
//  foreach ($v as  $value) {
//     echo $value->pasear().'<br>';
//  }


//  $p = new Personaje('Javi',17);
//  $p2 = new Personaje('Juan',107);
//  echo $p->pasear().'<br>';
//  echo $p2->pasear(4).'<br>';

$p = Factoria::generaPersonaje();

//c) Enviar la respuesta.
// $cod = 200;
// header('HTTP/1.1 '.$cod.' Oki');
//  echo json_encode($p, JSON_UNESCAPED_UNICODE);
//  echo json_encode($v, JSON_UNESCAPED_UNICODE);


//  echo $p->pelear(12,'hola').'<br>';
//  echo $p.'<br>';
//  $p->setNombre('Inés');
//  echo $p.'<br>';
//  echo 'La persona: '.$p->getNombre().' tiene '.$p->getEdad().' años<br>';
//  echo Personaje::metodoEstatico();

// $e = Factoria::generaElfo();
// echo $e;

$v = Factoria::generaVariosPersonajes();
foreach ($v as $value) {
    echo $value.'<br>';
    if ($value instanceof Elfo){
        echo $value->lanzarFlechas();
    }
    else {
        echo 'Soy mindundi'.'<br>'; //casting  -- casteo.
    }
    // echo $value->pelear().'<br>';
}

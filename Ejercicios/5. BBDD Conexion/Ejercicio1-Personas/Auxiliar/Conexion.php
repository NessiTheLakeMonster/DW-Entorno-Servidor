<?php

$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');
if (!$conexion) {
    print 'Fallo al conectar a MySQL: ' . mysqli_connect_error();
    die();
}
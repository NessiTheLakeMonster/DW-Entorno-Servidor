<?php

/** ****************** Conectar ************************* */
// Utilizando la forma procedimental.
$conexion = mysqli_connect('localhost', 'fernando', 'Chubaca2024', 'ejemplo');
if (!$conexion) {
    print "Fallo al conectar a MySQL: " . mysqli_connect_error();
    die();
}


/** ****************** Consultar ************************* */
print "Conexión realizada de forma procedimental: " . mysqli_get_server_info($conexion) . "<br>";
echo '<br>';
$dni = '1A';
$consulta = "SELECT * FROM personas WHERE DNI = '" . $dni . "'";
echo '<br>';
echo $consulta;
echo '<br>';
echo '<br>';

//NO, repito NO es un vector!!!
if ($resultado = mysqli_query($conexion, $consulta)) {
    //var_dump($resultado);
    /* obtener array asociativo */
    //    while ($fila = mysqli_fetch_assoc($resultado)) {
    //        print  $fila["DNI"].",". $fila["Nombre"].",".$fila["Tfno"]."<br/>";
    //    }

    /* obtener el array por índices */
    //    while ($fila = mysqli_fetch_row($resultado)) {
    //        print  $fila[0].",". $fila[1].",".$fila[2]."<br/>";
    //    }

    /* obtener ambos */
    while ($fila = mysqli_fetch_array($resultado)) {
        print $fila["DNI"] . "," . $fila[1] . "," . $fila[2] . "<br>";
    }

    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}

//Bind param procedimental.
$consulta = "SELECT * FROM personas WHERE DNI = ?";
$stmt = mysqli_prepare($conexion, $consulta);
$dni = '2B';
$clave = 1245;
mysqli_stmt_bind_param($stmt, "s", $dni);
mysqli_stmt_execute($stmt);
$resultados = mysqli_stmt_get_result($stmt);
//print_r($resultados);
while ($fila = mysqli_fetch_array($resultados)) {
    // print_r($fila);
    print $fila["DNI"] . "," . $fila[1] . "," . $fila[2] . "<br>";
}


//************* Insertar ************************
/* Sentencias de preparación de la inserción y de la inserción propiamente. 
           Con esta forma se evitará la inyección de SQL.         */
$query = "INSERT INTO personas (DNI, Nombre, Clave, Tfno) VALUES (?,?,?,?)"; //Estos parametros seran sustituidos mas adelante por valores.
$stmt = mysqli_prepare($conexion, $query);
$val1 = '101A';
$val2 = 'Un nombre';
$val3 = 1234;
$val4 = '555827494';
mysqli_stmt_bind_param($stmt, "ssis", $val1, $val2, $val3, $val4);

/* Ejecución de la sentencia. */
try {
    echo mysqli_stmt_execute($stmt) . ' registro insertado.<br>';
} catch (Exception $e) {
    echo "Fallo al insertar: (" . $e->getMessage() . ") <br>";
}
//
//        $val1 = '101B';
//        $val2 = 'Otro';
//        $val3 = '999999';
//
//        /* Ejecución de la sentencia. */
//        mysqli_stmt_execute($stmt);

$dn = '100E';
$no = 'DAW2 Ejemplo';
$tfno = '243';
//$query = "INSERT INTO personas (DNI, Nombre, Tfno) VALUES ('".$dn."'"."'".$no."'"."'".$tfno."')"; //Estos parametros seran sustituidos mas adelante por valores.
$query = "INSERT INTO personas (DNI, Nombre, Clave, Tfno) VALUES ('" . $dn . "','" . $no . "', 1234, '" . $tfno . "')"; //Estos parametros seran sustituidos mas adelante por valores.
echo $query . "<br>";
try {
    echo mysqli_query($conexion, $query) . ' registro insertado sin bind param.<br>';
} catch (Exception $e) {
    echo "Fallo al insertar: (" . $e->getMessage() . ") <br>";
}


/** ***************** Borrar ************************ */
//Con Update y con Delete es exactamente igual. 
//También se puede usar:
$query = "DELETE FROM personas WHERE DNI = '101A'";
try {
    mysqli_query($conexion, $query);
    echo "Borrado ok<br>";
} catch (Exception $e) {
    echo "Fallo al borrar: (" . $e->getMessage() . ") <br>";
}



/******************** Cerrar la conexión *********************/
mysqli_close($conexion);
print "Conexión 2 cerrada" . "<br>";

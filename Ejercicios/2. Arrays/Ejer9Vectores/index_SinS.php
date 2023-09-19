<?php

// $n = '3 0 0 3';
// $array = explode(' ',$n);

$n = '3003';
$array = str_split($n);
print_r($array);

function revertirNum(&$n) {
    $rev = array_reverse($n);
    return $rev;
}

$rev_num = revertirNum($array);
print_r($rev_num);

function comprobarCapicua(&$derecho, &$reves) {
    if ($derecho == $reves) {
        echo 'Los números son capicua';
    } else {
        echo 'Los números no son capicua';
    }
}

comprobarCapicua($array, $rev_num);

?>
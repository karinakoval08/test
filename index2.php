<?php
function printPairs($array) {
    $pairs = [];
    $length = count($array);
    array_map(function($i) use ($array, $length) {
        for ($j = $i + 1; $j < $length; $j++) {
            echo "($array[$i], $array[$j])\n";
        }
    }, array_keys($array));
}

$array = [1, 2, 3, 4, 5];
printPairs($array);
?>

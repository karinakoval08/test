<?php
function myFunction($array) {
    $reverseArray = [];
    $length = count($array);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reverseArray[] = $array[$i];
    }

    return $reverseArray;
}

$array = ['Natasha', 'Emil', 'Yaroslav', 'Kuzya', 'Olya'];
$reverseArray = myFunction($array);
echo implode(', ', $reverseArray);
?>

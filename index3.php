<?php function minWord($str) {
    $words = explode(' ', $str);
    $shortest = $words[0];
    foreach ($words as $word) {
        if (strlen($word) < strlen($shortest)) {
            $shortest = $word;
        }
    }
    return $shortest;
}
$array =  [1,2,3,4,5];
echo minWord($array); 
?>
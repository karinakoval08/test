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
$str = "moskali must die";
echo minWord($str); 
?>
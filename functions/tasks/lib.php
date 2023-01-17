<?php

function key_value($array) {

    $keys = array_keys($array);
    $string = '';
    foreach ($keys as $key) {
        $len = strlen($key);
        $string .= "Длина строки «$key » равна $len<br><br>";
    }

    $values = array_values($array);
    foreach ($values as $value) {
        $len = strlen($value);
        $string .= "Длина строки «$value » равна $len<br><br>";
    }

    return $string;
    //echo '<pre>';
    //var_dump($keys);
    //echo '</pre>';


}
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

// переобъявляем $sum равной текущему $sum плюс $value
function get_sum_or_multiplication($array,$operation) {
    if ($operation == '+') {
        $result = 0;
        foreach ($array as $value) {
            $result = $result + $value;
        }
    } else {
        if ($operation != '*') {
            exit('Передан неверный математический знак');
        } else {
            $result = 1;
            foreach ($array as $value) {
                $result = $result * $value;
            }
        }
    }
    echo '<pre>';
    var_dump($result);
    echo '</pre>';

}
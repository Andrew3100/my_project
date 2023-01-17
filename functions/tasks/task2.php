<?php
include 'lib.php';
// Задача 2 в списке (9)

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1,25);
}

get_sum_or_multiplication($array,'-');
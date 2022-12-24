<?php

// Массив - упорядоченный набор элементов. Данные могут быть одинаковые и разнотипные данные
//
// пример одинаковых данных

$array = [1, 2, 3, 4, 5];


// ключи, заданные вручную
$array1 = [1 => 1, 2 => 2, 3 => '3', '4' => '4', 5 => 5];

$array2 = [
    'Petrov' => 'Ivan',
    'Ivanov' => 'Alexey',
    'Sergeev' => 'Ivan',
            ];


//echo '<pre>';
//var_dump($array2);
//echo '</pre>';

//foreach ($array2 as $value) {
  //  echo $value.'<br>';
//}

//foreach ($array2 as $key => $value) {
  //  echo "Ключ $key ссылается на значение $value<br>";
//}

//echo '<pre>';
//var_dump(($array2));
//echo '</pre>';
//
//echo '<pre>';
//var_dump(array_keys($array2));
//echo '</pre>';
//
//echo '<pre>';
//var_dump(array_values($array2));
//echo '</pre>';

$new_array = [1,1,2,3,4,5,6,6,7,8,89,9,999,999,99,99,9];



echo '<pre>';
var_dump(array_sum($new_array));
echo '</pre>';

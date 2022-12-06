<?php

($variable = "              It's some string for EXAMPLE                   ");

echo "<br>"; // перенос строки
// echo strlen($variable); // возвращает длину строки

// echo strtolower($variable); // Преобразование строки в нижний регистр

// echo strtoupper($variable); // Преобразование строки в верхний регистр

// echo $new = str_replace('string','str',$variable); // замена string на str в строке $variable


//$new = explode(' ',$variable); // преобразует

// echo "<pre>"; // форматирование программного кода
// var_dump($new);
// echo "</pre>"; // форматирование программного кода


// echo md5($variable); // шифрует заданную строку в соответствии с алгоритмом MD5

// echo substr_count($variable,' '); // кол-во вхождений подстроки $needle в строку $variable

 // var_dump(trim($variable)); // очищает лишние пробелы в начале и в конце строки
 // var_dump(rtrim($variable)); // очищает лишние пробелы в конце строки

$var = rand(0,10); // генерация случайного числа в диапазоне от 0 до 10 (первый и второй аргументы)


// $count = strlen($variable); // переменная $count хранит длину строки $variable

if (strlen($variable) > 10) {
    // выполняем некоторый код при выполнении условия
} else {
    // выполняем некоторый код при невыполнении условия
}

// == проверка на равенство
// != проверка на неравенство
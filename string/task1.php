<?php



$string = "Your country not be allowed for show content";

// получили 3 длины строки
$len = strlen($string) * 3;

// необходимое нам случайное число
$random = rand(1,$len);

// шифр, который будет выведен если условие выполнится
$md5 = md5($string);

// массив, который будет выведен если условие не выполнится
$array = explode(' ',$string);


if ( strlen($string) > $random ) {
    // если len больше random
    echo $md5;
}

else {
    // если это не так...
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
}



<?php


$string = "Your country not be allowed for show content";

// получили 3 длины строки
$len = strlen($string) * 3;

// необходимое нам случайное число
$random = rand(1,$len);

// шифр, который будет выведен если условие выполнится
$md5 = md5($string);

$explode1 = str_replace(' ','...',$string);

echo $md5.'<br>';
$explode2 = str_replace(['0','1','2','3','4','5'],rand(0,1000),$md5);
echo $explode2;
exit();

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



<?php
// функция без параметров
function my_first_function() {

// блок выполняемого кода
//...
//...
//...

$data = [1,2,3,4,5];

//возвращаемый результат
return $data;
}



// функция с параметрами
function my_first_function_with_params($param=1,$param2=2,$param3=3) {
    var_dump($param);
    var_dump($param2);
    var_dump($param3);
}
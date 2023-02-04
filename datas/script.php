<?php

$lables = [
    'Имя пользователя',
    'Возраст пользователя',
];

foreach ($_POST as $key => $value) {
    echo "Поле с атрибутом $key имеет значение $value<br>";
}


//echo $_GET['name'].'<br>';
//echo $_GET['age'].'<br>';
//echo $_GET['color'].'<br>';
//echo $_GET['select'].'<br>';

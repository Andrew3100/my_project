<?php

# Подключаем БД для поиска данных
include "db.php";
$city = $_REQUEST['word'];
# Составляем запрос для поиска города
$sql = "SELECT * FROM city WHERE name like '%$city%'";
$html = '';
$data = $db->query($sql);

$count = ($data->num_rows);
$html .= "<h5>Найдено результатов: $count</h5>";
while ($row = mysqli_fetch_assoc($data)) {
    $html .= "<h6>{$row['name']}</h6>";
}


$array['text'] = $html;
echo json_encode($array);

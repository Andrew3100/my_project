<?php



$sum = $_REQUEST['first'] + $_REQUEST['second'];

$array = [
    'response' => $sum
];

echo json_encode($array);
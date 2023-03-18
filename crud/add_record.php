<?php

include 'db.php';

$fio = $_POST['fio'];
$mail = $_POST['mail'];
$login = $_POST['login'];
$password = md5($_POST['password']);

$sql = "INSERT INTO users (`fullname`,`mail`,`login`,`password`) 
VALUES ('$fio','$mail','$login','$password')";
echo $sql;
$db->query($sql);
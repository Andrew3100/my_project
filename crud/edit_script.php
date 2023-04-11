<?php

include 'db.php';

$id = $_POST['id'];
$fio = $_POST['fio'];
$mail = $_POST['mail'];
$login = $_POST['login'];

$db->query("UPDATE `users` SET `fullname` = '$fio' WHERE `id` = $id;");
$db->query("UPDATE `users` SET `mail` = '$mail' WHERE `id` = $id;");
$db->query("UPDATE `users` SET `login` = '$login' WHERE `id` = $id;");

echo "<script>window.location.replace('/my_project/crud/record_list.php')</script>";
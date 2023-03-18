<?php

include 'db.php';
$data = $db->query("SELECT * FROM users");

while ($row = mysqli_fetch_assoc($data)) {
    echo $row['id'].'<br>';
    echo $row['fullname'].'<br>';
    echo $row['password'].'<br>';
}

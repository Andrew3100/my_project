<?php
include 'db.php';



echo "Для редактирования выбрана запись {$_GET['record_id']}<br><br>";

$data = $db->query("SELECT * FROM users WHERE id = {$_GET['record_id']}");



while ($record = mysqli_fetch_assoc($data)) {
    $fio = $record['fullname'];
    $mail = $record['mail'];
    $login = $record['login'];
}

echo "<form action='edit_script.php' method='post'>
<input name='fio' value='$fio' type='text' placeholder='ФИО'><br><br>
    <input name='mail' value='$mail' type='email' placeholder='email'><br><br>
    <input name='login' value='$login' type='text' placeholder='login'><br><br>
    <input name='id' value='{$_GET['record_id']}' type='hidden'>
    <button type='submit'>Изменить запись</button><br><br>
</form>";


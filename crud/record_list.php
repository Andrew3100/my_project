<?php

# Подключаем базу данных из файла
include "db.php";
# Добавляем Bootstrap
include "bootstrap.php";


# Составляем запрос на выборку без условий
$sql = "SELECT * FROM users";

# Выполняем запрос
$data = $db->query($sql);
echo "
<div class='container'>
<div class='row'>
<div class='col'>
";
echo "<table style='margin-top: 80px;' class='table table-bordered table-striped table-dark text-center'>";
echo "<tr>
<td>Порядковый номер</td>
<td>Полное имя</td>
<td>Электронная почта</td>
<td>Имя пользователя</td>
<td>Статус</td>
<td>Действия</td>
</tr>";
# Обработка полученных записей в цикле
while ($record = mysqli_fetch_assoc($data)) {

    if ($record['status'] == 1) {
        $ban = 'Пользователь забанен';
    } else {
        $ban = 'Пользователь активен';
    }


    # создание строк таблицы
    echo "
    <tr>
        <td>{$record['id']}</td>
        <td>{$record['fullname']}</td>
        <td>{$record['mail']}</td>
        <td>{$record['login']}</td>
        <td>$ban</td>
        <td>
        <a href='edit_record.php?record_id={$record['id']}'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg></a>
<a href='delete_record.php?record_id={$record['id']}'><svg style='color: red' xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
</svg></a></td>
</tr>
    ";


}
echo "</table>";
echo '
</div>
</div>
</div>
';
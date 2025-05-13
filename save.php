<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_POST['company'];
    $date = $_POST['date'];
    $result = $_POST['result'];
    $fio = $_POST['fio'];

    $entry = "Организация: $company\nДата: $date\nРезультаты: $result\nФИО: $fio\n---\n";
    file_put_contents("protocols.txt", $entry, FILE_APPEND);

    echo "<h2>Протокол успешно сохранён!</h2>";
    echo "<a href='protocol.html'>Назад</a>";
}
?>

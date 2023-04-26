<?php
// Подключение к базе данны
$db = mysqli_connect('localhost', 'root', '', 'gb') or die ('Ошибка соединения с БД');
if (! $db ) die ( mysqli_connect_error());

// Установка кодировки соединения
mysqli_set_charset($db, "utf8") or die ('Не установлена кодировка');





?>
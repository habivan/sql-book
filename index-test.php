<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);


// Подключение к базе данных
$db = @mysqli_connect( 'localhost', 'root', '', 'gb' ) or die ( 'Ошибка соединения с БД' );


// если нет подключения, тогда мы выведем текст ошибки mysqli_connect_error(), и завершим дальнейшее выполнение скрипта - die
if (! $db ) die (mysqli_connect_error());

// Установка кодировки соединения
mysqli_set_charset($db, "utf8") or die ('Не установлено подключение');


// Запрос к базе данных (добавим новые данные в нашу таблицу)
// готовим запрос
// $insert = "INSERT INTO gb (name, text) VALUES ('Оля', 'ПРИВЕТ! ПРИВЕТ!')" ;
// выполняем запрос
// $res_insert = mysqli_query( $db , $insert );




// Запрос к базе данных (обновляем данные в нашей таблице)
// готовим запрос
// $update = "UPDATE gb SET text = CONCAT (text, '|||') WHERE id > 4" ;
// выполняем запрос
// $res_update = mysqli_query( $db , $update ) or die (mysqli_error( $db ));



// Запрос к базе данных (удаляем данные в нашей таблице)
// готовим запрос
// $delite = "DELETE FROM gb WHERE id = 5";
// выполняем запрос
// $res_delete = mysqli_query($db, $delite);



// Запрос к базе данных (выбираем данные из нашей таблицы)
// выполняем запрос
// $res = mysqli_query($db, "SELECT *  FROM gb ");
// получаем данные в ассоциативный массив
// $date = mysqli_fetch_all($res, MYSQLI_ASSOC);
// распечатаем массив $date
// echo '<pre>';
// print_r ( $date );
// echo '</pre>';





?>
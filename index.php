<?php
header("Content-type: text/html; charset=utf-8 ");
error_reporting(-1);

// подключаем файл connect.php
require_once 'connect.php';
require_once 'funcs.php';

// принятие данных из формы
// если у нас не пуст массив $_POST, то вызовем некую функцию: save_mess
if (! empty ($_POST )){
  save_mess ();
  // производим редирект
  header ("Location: {$_SERVER['PHP_SELF']}");
  exit ;
  }

  $messages = get_mess();
  // print_arr($messages);
?>

<!doctype html>
<html Lang="en">
<html>
  <head>
    <meta charset ="UTF-8">
    <title>Гостевая книга</title>
  </head>
  <body>
    <form action = "index.php" method = "post">
      <p>
        <!-- название поля -->
        <label for ="name"> Имя:</label>
        <!-- поле для ввода имени -->
        <input type="text" name="name" id="name" >
      </p>
      <p>
        <!-- название поля -->
        <label for="text"> Текст:</label>
        <!-- поле для ввода текста -->
        <textarea name= "text" id="text"></textarea>
      </p>
      <!-- кнопка -->
      <button type="submit"> Написать </button>
    </form>
    <hr>
    <?php if(!empty($messages)): ?>
      <!-- проходим по массиву $messages в цикле и выводим наши сообшения -->
      <?php foreach($messages as $message): ?>
        <!-- выводим полученные наши данные -->
        <div class="messages">
          <hr>
          <p>
            Автор: <?= $message['name']?>| Дата :<?= $message['date']?>
          </p>
          <div>
            <?= nl2br(htmlspecialchars($message['text'])) ?>
          </div>
          <hr>
        </div>
        <?php endforeach?>
        <?php endif?>
        
    </body>
</html>
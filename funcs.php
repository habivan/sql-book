<?php

function clear(){
  global $db ;
  foreach ($_POST as $key => $value ){
  $_POST[$key] = mysqli_real_escape_string($db, $value);
  }
  }
  
  // изменяем функцию save_mess
  function save_mess(){
  global $db ;
  // вызываем функцию clear, которая экранирует все данные в массиве $_POST
  clear();
  // получаем переменные $name и $text
  extract($_POST);
  
  //$name = mysqli_real_escape_string($db, $_POST['name']);
  //$text = mysqli_real_escape_string($db, $_POST['text']);
  
  // составляем запрос
  $query = "INSERT INTO gb1 (name, text) VALUES ('$name', '$text')";
  
  // выполняем запрос (без проверки)
  mysqli_query($db, $query);
  }

// Пользовательская функция get_mess
function get_mess(){
  // соединение с базой данных
  global $db ;
  // запрос на выборку
  $query = "SELECT * FROM gb1 ";
  // выполняем запрос
  $res = mysqli_query($db, $query );
  // возвращаем готовый ассоциативный массив
  return mysqli_fetch_all($res, MYSQLI_ASSOC );
}

// функция для распечатки массива
function print_arr($arr){
  echo'<pre>' . print_r($arr, true) . '</pre>';
  }

?>
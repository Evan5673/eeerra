<?php 
$dblocation = 'localhost'; // имя хоста
$database = 'comment'; // имя базы данных 
$dbuser = 'root'; // имя пользователя
$dbpasswd = ''; // пароль пользователя
$link = mysqli_connect($dblocation, $dbuser, $dbpasswd, $database) or die("Не могу подключиться");  
mysqli_select_db($link, $database) or die ('Не могу выбрать БД');
$link->set_charset("utf8");
?>
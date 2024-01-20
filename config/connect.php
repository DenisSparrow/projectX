<?php
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'projectX');

    if (!$connect) {
        die('Ошибка подключения к БД');
    }
?>
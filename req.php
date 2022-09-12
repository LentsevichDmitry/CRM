<?php
$sqlBase = mysqli_connect('localhost', 'root', 'root', 'clientbd');
if (!$sqlBase) {
    die('Ошибка подключения к БД');
}

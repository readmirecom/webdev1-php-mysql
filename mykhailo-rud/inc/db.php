<?php

require_once('config.php');

try {
    $db = new PDO($dsn, $mysql_user, $mysql_password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
    die;
}

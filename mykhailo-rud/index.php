<?php
/** Отображаем все ошибки */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('inc/db.php');
require_once('inc/routes.php');
require_once('functions.php');

/** Получаем запрашиваемый путь */
$path = $_SERVER['REQUEST_URI'];

/** Проверка существования запрошеного пути */
if (array_key_exists($path, $routes)) {
    /** Разбиваем существующий путь */
    $path = explode('@', $routes[$path]);

    if(!empty($path)) {
        /** Получаем имя функции и контроллера */
        $controllerName = $path[0];
        $functionName = $path[1];
        
        /** Подключаем соответсвущий контроллер */
        require_once("$controllerName.php");

        /** Вызываем соответствующую функцию */
        call_user_func($functionName);
    }
} else {
    /** В противном случае, бросаем ошибку 404 */
    header("HTTP/1.0 404 Not Found");
    echo 'This page was not found';
    die;
}

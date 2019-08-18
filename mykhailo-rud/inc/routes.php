<?php

/** Путь к контроллерам */
$controllerPath = 'controllers/';

/** Маршруты */
$routes = [
    '/'            => 'DefaultController@index',
    '/picture/add' => 'PictureController@add',
    '/note/edit'   => 'NoteController@index',
];

/** Обьединяем путь контроллеров с их названиями */
foreach($routes as $key => $value) {
    $routes[$key] = $controllerPath . $value;
}
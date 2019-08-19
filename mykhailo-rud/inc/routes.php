<?php

/** Путь к контроллерам */
$controllerPath = 'controllers/';

/** Маршруты */
$routes = [
    '/'            => 'DefaultController@index',
    '/image/edit' => 'PictureController@index',
    '/note/edit'   => 'NoteController@index',
    '/image/view' => 'PictureController@view',
    '/note/view' => 'NoteController@view'
    
];

/** Обьединяем путь контроллеров с их названиями */
foreach($routes as $key => $value) {
    $routes[$key] = $controllerPath . $value;
}
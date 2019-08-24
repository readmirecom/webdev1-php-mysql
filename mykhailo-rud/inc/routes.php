<?php

/** Путь к контроллерам */
$controllerPath = 'controllers/';

/** Маршруты */
$routes = [
    '/'               => 'DefaultController@index',
    '/image/edit'     => 'PictureController@index',
    '/note/edit'      => 'NoteController@index',
    '/image/view?id'  => 'PictureController@view',
    '/note/view?id'   => 'NoteController@view',
    '/image/edit?id'  => 'PictureController@edit',
    '/note/edit?id'   => 'NoteController@edit',
    '/note/delete'    => 'NoteController@delete',
    '/image/delete'   => 'PictureController@delete',
];

/** Обьединяем путь контроллеров с их названиями */
foreach($routes as $key => $value) {
    $routes[$key] = $controllerPath . $value;
}
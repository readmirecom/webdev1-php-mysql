<?php 

/** Отрисовываем страницу по названию шаблона */
function renderPage($template_name, $params = []) {
    $layout = 'layout';

    $content = "$template_name.php";

    if(!empty($params)) {
        foreach($params as $key => $value) {
            ${$key} = $value;
        }
    }

    include_once("$layout.php");
}



/**Регистрируем ссылки в шаблоне */
function registerSrc($asset_name){
    $host = $_SERVER['SERVER_NAME'];
    $asset = "//$host/$asset_name";

    return $asset;
}

/** Дебагинг */
function dd($var) {
    print "<pre>";
    print_r($var);
    die;
}
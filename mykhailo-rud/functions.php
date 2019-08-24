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
function registerSrc($asset_name, $params = []){
    $host = $_SERVER['SERVER_NAME'];
    $asset = "//$host/$asset_name";

    if(!empty($params)) {
        $asset .= '?' . http_build_query($params);
    }

    return $asset;
}

/** Дебагинг */
function dd($var) {
    print "<pre>";
    print_r($var);
    die;
}

function isPost() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function isGet() {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}
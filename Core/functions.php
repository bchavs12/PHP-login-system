<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($request, $value)
{
    return $_SERVER[$request] === $value;
}

function abort($response = Response::NOT_FOUND)
{
    http_response_code($response);

    require './views/404.view.php';

    die();
}
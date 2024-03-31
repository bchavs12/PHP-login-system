<?php
// function to debug code
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($request,$value)
{
    return $_SERVER[$request] === $value;
}

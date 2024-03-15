<?php

function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

function dump($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function redirectToRoute($route)
{
    http_response_code(303);
    header("Location : {$route}");
    exit;
}

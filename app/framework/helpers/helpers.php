<?php

use app\framework\classes\Router;

function path()
{
    return $_SERVER['REQUEST_URI'];
}

function request()
{
    return strtolower($_SERVER['REQUEST_METHOD']);
}

function routerExecute()
{
    try {
        $routes = require '../app/routes/routes.php';
        $router = new Router;
        $router->execute($routes);
    } catch (\Throwable $th) {
        var_dump($th->getMessage());
    }
}

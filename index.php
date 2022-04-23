<?php

include 'vendor/autoload.php';

use Core\Routing\Router;

$router = new Router();

$router->get('/', function () {
    return 'some data';
});

$router->get('/name',function (){
    return 'my name';
});

echo $router->processRequest($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


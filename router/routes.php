<?php

use Core\Facades\Routing\Router;

Router::get('/', function () {
    return 'some data';
});

Router::get('/name', function () {
    return 'name';
});

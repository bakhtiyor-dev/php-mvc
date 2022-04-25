<?php

require 'vendor/autoload.php';
require 'router/routes.php';

use Core\Facades\Routing\Router;

try {
    echo Router::processRequest($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
} catch (Exception $exception) {
    echo $exception->getMessage();
}


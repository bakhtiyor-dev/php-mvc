<?php

namespace Core\Routing;

use Core\Singleton;

class Router extends Singleton
{
    protected string $incomeRoute;
    protected string $method;

    protected array $routes = [
        'GET' => []
    ];

    public function get(string $route, callable $handler)
    {
        $this->routes['GET'][$route] = $handler;
    }

    public function processRequest($route, $method)
    {
        if (array_key_exists($route, $this->routes[$method])) {
            return call_user_func($this->routes[$method][$route]);
        }

        return '404';
    }


}
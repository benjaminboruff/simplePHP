<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function load($routes_file)
    {
        $router = new static;
        require $routes_file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function route($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        } else {
            return $this->routes['GET'][''];
        }

        // throw new Exception("No route defined for this uri.", 1);
    }
}

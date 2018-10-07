<?php

namespace App\Core;

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
            // Util::dd($this->routes[$requestType][$uri]);
            $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        } else {
            return $this->routes['GET'][''];
        }

        // throw new Exception("No route defined for this uri.", 1);
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        // Util::dd($controller);
        if (! method_exists($controller, $action)) {
            throw new Exception(
                get_class($controller) . " does not respond to {$action} action"
            );
        }

        return $controller->$action();
    }
}

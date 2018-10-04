<?php

class Router
{
    protected $routes = [];

    public function load($routes_file)
    {
        $router = new static;
        require $routes_file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function route($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            return $this->routes[''];
        }

        // throw new Exception("No route defined for this uri.", 1);
    }
}

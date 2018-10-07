<?php

namespace Core;

class Request
{
    public function uri()
    {
        //Util::dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}

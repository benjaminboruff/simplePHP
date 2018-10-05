<?php
// require('core/utils.php');
class Request
{
    public function uri()
    {
        //dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}

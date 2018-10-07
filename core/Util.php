<?php

namespace App\Core;

class Util
{
    // dump and die
    public static function dd($data)
    {
        //echo "<pre>";
        var_dump($data);
        //echo "</pre>";
        die();
    }

    public static function view($view, $data = [])
    {
        extract($data);
        return require "app/views/{$view}.view.php";
    }
    public static function redirect($path, $data = [])
    {
        extract($data);
        return header("Location: /{$path}");
    }
}

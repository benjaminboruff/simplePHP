<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=phptest', 'root', 'mysql');
        } catch (PDOEXCEPTION $e) {
            echo "Could not connect!";
            echo $e->getMessage();
            die();
        }
    }
}

<?php

namespace Core\Database;

use PDO;

class Connection
{
    public static function make($config)
    {
        try {
            // return new PDO('mysql:host=127.0.0.1;dbname=phptest', 'root', 'mysql');

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOEXCEPTION $e) {
            echo "Could not connect!";
            echo $e->getMessage();
            die();
        }
    }
}

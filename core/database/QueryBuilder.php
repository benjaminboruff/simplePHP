<?php
// require 'core/utils.php';

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $intoClass = "App\\Core\\{$intoClass}";
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) VALUES(%s)',
            $table,
            implode(", ", array_keys($parameters)),
            ':' . implode(", :", array_keys($parameters))
        );
        // dd($sql);
        try {
            $insert = $this->pdo->prepare($sql);
            return $insert->execute($parameters);
        } catch (Exception $e) {
            die("Whoops, something went wront!");
        }
    }
}

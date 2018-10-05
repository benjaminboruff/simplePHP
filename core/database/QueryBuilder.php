<?php
// require 'core/utils.php';
class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
    public function insertName($table, $name)
    {
        // dd($sqlStr);
        $insert = $this->pdo->prepare("insert into {$table} (name) VALUES('{$name}')");
        return $insert->execute();
    }
}

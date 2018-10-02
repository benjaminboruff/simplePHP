<?php

require "Task.php";

// dump and die
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

// return a PDO connection to the mysql db
function getConnectionDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=phptest', 'root', '');
    } catch (PDOEXCEPTION $e) {
        echo "Could not connect!";
        echo $e->getMessage();
        die();
    }
}

// get all tasks from todos table
function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

<?php

require "utils.php";

$pdo = getConnectionDb();
$tasks = fetchAllTasks($pdo);
// dd($tasks);

require "index.view.php";

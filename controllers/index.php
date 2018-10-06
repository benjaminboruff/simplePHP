<?php

//$tasks = $app['database']->selectAll('todos', 'Task');
$users = $app['database']->selectAll('users', 'User');
$title = "Home";

require "views/index.view.php";

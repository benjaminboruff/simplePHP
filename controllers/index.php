<?php

require 'core/Task.php';

$tasks = $app['database']->selectAll('todos', 'Task');
$title = "PHP Fun!";

require "views/index.view.php";

<?php

require 'core/Task.php';

$tasks = $app['database']->selectAll('todos', 'Task');
$title = "Home";

require "views/index.view.php";

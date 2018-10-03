<?php

require 'core/utils.php';
require 'core/Task.php';

$tasks = $db->selectAll('todos', 'Task');
// dd($tasks);

require "views/index.view.php";

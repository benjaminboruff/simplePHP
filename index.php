<?php

require 'utils.php';
require 'Task.php';

$db = require 'bootstrap.php';

$tasks = $db->selectAll('todos', 'Task');
// dd($tasks);

require "index.view.php";

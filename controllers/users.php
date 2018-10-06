<?php

$users = $app['database']->selectAll('users', 'User');
$title = "Users";

require "views/users.view.php";

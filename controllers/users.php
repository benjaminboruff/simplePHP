<?php

$title = "Users";

$users = App::get('database')->selectAll('users', 'User');

require "views/users.view.php";

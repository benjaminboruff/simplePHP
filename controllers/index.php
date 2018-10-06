<?php

$title = "Home";

$users = App::get('database')->selectAll('users', 'User');

require "views/index.view.php";

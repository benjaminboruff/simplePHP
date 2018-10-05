<?php
// require 'core/utils.php';
require 'core/User.php';

if ($app['database']->insertName('users', $_POST['name'])) {
    $users = $app['database']->selectAll('users', 'User');
    $title = "Users";
    
    require "views/users.view.php";
} else {
    echo 'Error';
}

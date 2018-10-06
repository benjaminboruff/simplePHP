<?php
// require 'core/utils.php';
require 'core/User.php';

$app['database']->insert('users', ['name' => $_POST['name']]);
$users = $app['database']->selectAll('users', 'User');
$title = "Users";

header('Location: /');

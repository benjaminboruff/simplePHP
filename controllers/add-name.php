<?php

$title = "Users";

App::get('database')->insert('users', ['name' => $_POST['name']]);
$users = App::get('database')->selectAll('users', 'User');


header('Location: /');

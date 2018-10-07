<?php

namespace App\Controllers;

use Core\Util;
use Core\App;

class UsersController
{
    public function index()
    {
        $title = "Users";
        $users = App::get('database')->selectAll('users', 'User');
        return Util::view('users', compact('title', 'users'));
    }
    public function store()
    {
        App::get('database')->insert('users', ['name' => $_POST['name']]);
        return Util::redirect('users');
    }
    public function addUserForm()
    {
        $title = "Add User";
        return Util::view('add-user', compact('title'));
    }
}

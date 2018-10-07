<?php

$router->get('', 'PagesController@home');
$router->get('users', 'UsersController@index');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('add-user', 'UsersController@addUserForm');
$router->post('add-user', 'UsersController@store');

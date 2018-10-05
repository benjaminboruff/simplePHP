<?php

$router->get('', 'controllers/index.php');
$router->get('users', 'controllers/users.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');

<?php

// I have php setup to NOT display
// errors in the browser by default.

// Uncomment this to display errors
// in the browser
// ini_set('display_errors', 1);

$db = require 'core/bootstrap.php';

$routes = [
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php'
];

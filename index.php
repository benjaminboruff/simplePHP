<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

// Uncomment this to display errors
// in both the browser and console.
ini_set('display_errors', 1);

Router::load('app/routes.php')->route(Request::uri(), Request::method());

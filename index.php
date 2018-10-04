<?php

require 'core/bootstrap.php';

// Uncomment this to display errors
// in both the browser and console.
// ini_set('display_errors', 1);

require Router::load('routes.php')->route(Request::uri());

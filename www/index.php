<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
// require '.maintenance.php';

define('WWW_DIR', dirname(__FILE__)); // path to the web root
define('APP_DIR', WWW_DIR . '/../app'); // path to the application root
define('LIBS_DIR', WWW_DIR . '/../libs'); // path to the libraries

// Let bootstrap create Dependency Injection container.
$container = require __DIR__ . '/../app/bootstrap.php';

// Run application.
$container->application->run();

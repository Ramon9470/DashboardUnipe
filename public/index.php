<?php

require_once __DIR__ .'/../config/config.php';
require_once __DIR__ .'/../app/core/Router.php';

session_start();

$router = new Router();
$router->run();
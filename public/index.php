<?php

require '../helpers.php';

// loadView('home');

// inspectAndDie($uri);
require basePath('Router.php');

$router = new Router();

$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router -> route($uri, $method);

<?php

$URI = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
  'index' => 'controllers/index.php',
  'login' => 'controllers/login.php',
  'register' => 'controllers/register.php',
];

function routerToController($URI, $routes)
{
  if (!array_key_exists($URI, $routes)) {
    abort();
  }

  require $routes[$URI];
}

routerToController($URI, $routes);
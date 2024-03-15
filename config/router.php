
<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'HomeController.php',
    '/register' => 'RegisterController.php',
];

if (array_key_exists($uri, $routes)) {
    require_once("./src/Controllers/" . $routes[$uri]);
} else {
    http_response_code(404);
    require_once('./src/Controllers/404.php');
}

<?php 

$routes = require basePath('routes.php');


if (array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));

 } else {
    http_response_code(404); // to get the proper response in the network tab showing the error code
    require basePath($routes['404']);
 }

?>
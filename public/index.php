<?php
require_once './app/core/router.php';

use App\Core\Router;

$router = new Router();

// Register Routes 
$router->add('GET',  '/sugus',  'StudentController','index');
$router->add('GET',  '/sugus/create',  'StudentController',  'create');
$router->add('GET',  '/sugus/{id}',  'StudentController',  'show');

$router->run();

?>
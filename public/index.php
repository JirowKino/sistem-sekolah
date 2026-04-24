<?php
require_once '../app/core/router.php';

use App\Core\Router;

$router = new Router();

// Register Routes 
$router->add('GET',  '/sugus',  'StudentController','index');
$router->add('GET',  '/sugus/create',  'StudentController',  'create');
$router->add('GET',  '/sugus/{id}',  'StudentController',  'show');
$router->add('GET',  '/sugus/{id}/edit', 'StudentController', 'edit');

$router->add('POST', '/sugus', 'StudentController', 'store');
$router->add('PUT', '/sugus/{id}', 'StudentController', 'update');
$router->add('DELETE', '/sugus/{id}', 'StudentController', 'destroy');


$router->run();

?>
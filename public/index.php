<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/core/Router.php';

use App\Core\Router;

$router = new Router();


$router->addRoute('/patients', 'App\Controllers\PatientsController', 'index');
$router->addRoute('/patients/add', 'App\Controllers\PatientsController', 'add');


$router->dispatch();
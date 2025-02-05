<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/core/Router.php';

$router = new Router();
$router->dispatch();
?>
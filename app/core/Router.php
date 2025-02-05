<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function addRoute($url, $controller, $action) {
        $this->routes[$url] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch() {
        $url = $_SERVER['REQUEST_URI'];
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];
            $controllerInstance = new $controller();
            $controllerInstance->$action();
        } else {
            echo "404 - Page not found!";
        }
    }
}
?>
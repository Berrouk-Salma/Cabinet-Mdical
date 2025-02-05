<?php
class Controller {
    protected function view($view, $data = []) {
        require __DIR__ . "/../views/$view.php";
    }
}
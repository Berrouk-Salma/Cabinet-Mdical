<?php
class Model {
    protected $db;

    public function __construct() {
        $this->db = new PDO('pgsql:host=localhost;dbname=medical_db', 'user', 'password');
    }
}
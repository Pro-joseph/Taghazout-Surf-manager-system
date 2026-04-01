<?php
require_once '../config/Database.php';
class user
{
    private $conn;
    private $table = 'users';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }
}
?>
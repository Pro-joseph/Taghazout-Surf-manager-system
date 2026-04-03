<?php
require_once __DIR__ . '/../config/db.php';

class User
{
    private $conn;
    private $table = 'users';

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function create($email, $psw)
    {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (email, password) VALUES (?, ?)");
        return $stmt->execute([$email, $hashed]);
    }
}
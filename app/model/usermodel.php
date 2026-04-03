<?php

require_once __DIR__ . '/../config/db.php';

class User
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function getAllUsers()
    {
        $stmt = $this->pdo->query('SELECT id, name, email, role FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

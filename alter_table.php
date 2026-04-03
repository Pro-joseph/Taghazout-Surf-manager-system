<?php
require_once 'app/config/db.php';
$db = Database::getInstance()->getConnection();
$db->exec('ALTER TABLE users ADD COLUMN name VARCHAR(100) NOT NULL AFTER id');
echo 'Name column added to users table.' . PHP_EOL;
?>
<?php
require_once 'app/config/db.php';
$db = Database::getInstance()->getConnection();
$stmt = $db->query('SELECT COUNT(*) as count FROM users');
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo 'Number of users in database: ' . $result['count'] . PHP_EOL;
?>
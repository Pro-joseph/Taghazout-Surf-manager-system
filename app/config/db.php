<?php
class database
{
    private $host = 'localhost';
    private $dbname = 'manage_surf';
    private $user = 'root';
    private $pass = '';

    public function connect()
    {
        try {
            $conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
            $conn->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
            echo "connected succesfully";
        } catch (PDOException $e) {
            echo "connection error:" . $e->getMessage();
        }
        return $conn;
    }
}

$database = new database();
$database->connect();
?>
<?php
require_once '../app/model/usermodel.php';
class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function getUsers()
    {
        // 1. get data from model
        $users = $this->userModel->getAllUsers();
        // 2. send data to view
        require_once __DIR__ . '/../views/users.php';
    }
}
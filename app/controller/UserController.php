<?php
include __DIR__ . '/../model/usermodel.php';
class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function getUsers()
    {
        //get data from model //
        return $this->userModel->getAllUsers();
    }


}
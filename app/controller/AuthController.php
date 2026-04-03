<?php
require_once __DIR__ . '/../model/User.php';

class AuthController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $errors = [];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format";
            }
            if (strlen($password) < 6) {
                $errors[] = "Password must be at least 6 characters";
            }

            if (empty($errors)) {
                $saved = $this->userModel->create($email, $password);
                if ($saved) {
                    echo "User registered successfully!";
                } else {
                    echo "Failed to save user.";
                }
            } else {
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
            }
            require '../app/view/auth/register.php'; // show form
        }
    }
}
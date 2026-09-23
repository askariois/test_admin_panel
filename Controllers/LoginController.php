<?php

class LoginController
{
    public function index()
    {
        require __DIR__ . '/../View/login/login.php';
    }

    public function login()
    {
        require __DIR__ . '/../Model/Admin.php';
        $data = $_POST;
        $adminData = new Admin();
        $admin = $adminData->login($data['login']);


        if (password_verify($data['password'], $admin['password'])) {
            $_SESSION['admin_login'] = $admin['login'];
            header('Location: /home/');
            exit;
        } else {
            $error = 'Неверный логин или пароль';
            require __DIR__ . '/../View/login/login.php';
        }

    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
        exit;
    }
}
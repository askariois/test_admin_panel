<?php
require __DIR__ . '/../Controllers/UserController.php';
require __DIR__ . '/../Controllers/LoginController.php';
require __DIR__ . '/../Database/database.php';
session_start();

$uri = $_SERVER['REQUEST_URI'] ?? '/';
$parts = explode('/', trim($uri, '/'));
$id = $parts[2] ?? null;
$route = parse_url($parts[0], PHP_URL_PATH) . '/' . ($parts[1] ?? '');

if (empty($_SESSION['admin_id']) && ($route !== '/' && $route !== 'login/')) {
    header('Location: /');
    exit;
}

switch ($route) {
    case 'home/':
        $controller = new UserController();
        $controller->list();
        break;
    case 'user/create':
        $controller = new UserController();
        $controller->create();
        break;
    case 'user/store':
        $controller = new UserController();
        $controller->store();
        break;
    case 'user/edit':
        $controller = new UserController();
        $controller->edit($id);
        break;
    case 'user/update':
        $controller = new UserController();
        $controller->update($id);
        break;
    case 'user/delete':
        $controller = new UserController();
        $controller->delete($id);
        break;
    case 'user/show':
        $controller = new UserController();
        $controller->show($id);
        break;
    case '/':
        $controller = new LoginController();
        $controller->index();
        break;
    case 'login/':
        $controller = new LoginController();
        $controller->login();
        break;
    case 'logout/':
        $controller = new LoginController();
        $controller->logout();
        break;
}
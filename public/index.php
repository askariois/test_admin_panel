<?php
require __DIR__ . '/../Controllers/UserController.php';
require __DIR__ . '/../Database/database.php';

$uri = $_SERVER['REQUEST_URI'] ?? '/';
$parts = explode('/', trim($uri, '/'));
$id = $parts[2] ?? null;
$route = $parts[0] . '/' . ($parts[1] ?? '');

switch ($route) {
    case '/':
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
}
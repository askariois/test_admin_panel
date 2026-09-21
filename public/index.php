<?=
    require __DIR__ . '/../Controllers/UserController.php';
require __DIR__ . '/../Database/database.php';

$action = $_SERVER['REQUEST_URI'] ?? '/';
switch ($action) {
    case '/':
        $controller = new UserController();
        $controller->list();
        break;
    case '/user/create':
        $controller = new UserController();
        $controller->create();
        break;
    case '/user/store':
        $controller = new UserController();
        $controller->store();
        break;
    //  case 'delete':
    //      $controller = new UserController();
    //      $controller->delete($_GET['id']);
    //      break;
}
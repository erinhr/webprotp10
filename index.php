<?php
require_once 'app/controllers/FilmController.php';

$controller = new FilmController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}
?>

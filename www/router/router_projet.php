<?php
require_once './controller/ControllerGeneral.php';
$controller = new ControllerGeneral;
$controller->afficherListe();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $commit = isset($_GET["commit"]);
    switch ($action) {
        case 'add':
            $controller->add();
            break;
        case 'edit':
            $controller->edit($commit);
            break;
        case 'delete':
            $controller->delete($commit);
            break;
        default:
            # code...
            break;
    }
}

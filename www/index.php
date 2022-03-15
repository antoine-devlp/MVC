<?php
require_once './view/header.php';
if (isset($_GET['entity'])) {
    $url = $_GET['entity'];
    switch ($url) {
        case 'projet':
            require_once './router/router_projet.php';
            
            break;

        case 'client':
            echo 'page ' . $url;
            break;

        case 'contrat':
            echo 'page ' . $url;
            break;


        default:
            echo 'Page introuvable';
            break;
    }
} else {
    require_once './view/home/content.php';
}

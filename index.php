<?php
require 'model/database.php';
require 'model/work_db.php';
require 'controller/work.php';


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';


switch ($action) {
    case 'index':
        $controller = new Controller\Work;
        $controller->index();
        break;
    case 'create':
        $controller = new Controller\Work;
        $controller->create();
        break;
    case 'store':
        $controller = new Controller\Work;
        $controller->store();
        break;
    case 'edit':
        $controller = new Controller\Work;
        $controller->edit();
        break;
    case 'update':
        $controller = new Controller\Work;
        $controller->update();
        break;
    case 'delete':
        $controller = new Controller\Work;
        $controller->destroy();
    case 'calendar':
        $controller = new Controller\Work;
        $controller->calendar();

}

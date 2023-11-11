<?php
$request = $_SERVER['REQUEST_URI'];
define('BASE_PATH', '/darrbeni/mvc/');
require_once  __DIR__.'/config/config.php';
require_once  __DIR__.'/app/controllers/UserController.php';
require_once  __DIR__.'/app/models/UserModel.php';
require_once  __DIR__.'/Lib/DB/MysqliDb.php';

/* $action = isset($_GET['action']) ? $_GET['action'] :'index'; */
//ssdsdds
$config = require __DIR__.'/config/config.php';
$db = new MysqliDb (
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);

use mo\UserModel;
$model = new UserModel($db);
use co\UserController;
$controller = new UserController($model);
switch ($request) {
    case BASE_PATH:
        $controller->index();
        break;
    case BASE_PATH . 'add':
        $controller->addUser();
        break;
    case BASE_PATH .'edit?id='.$_GET['id']:
        $controller->UpdataUser();
        break;
    case BASE_PATH . 'delete?id='.$_GET['id']:
        $controller->deleteUser();
    
}
/* if (method_exists($controller,$action)) {
    $controller->$action();
}
else {
    echo 'Action Not Found';
}; */





?>
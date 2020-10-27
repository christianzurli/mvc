<?php
chdir(dirname(__DIR__));

require_once __DIR__.'/../DB/DBPDO.php';
$data = require __DIR__ . '/../config/database.php';
//$conn = App\DB\DBPDO::getInstance($data);

if (!defined('PDO::ATTR_DRIVER_NAME')) {
    echo 'PDO is unavailable<br/>';
} elseif (defined('PDO::ATTR_DRIVER_NAME')) {
    echo 'PDO is available<br/>';
    print_r(PDO::getAvailableDrivers());
}
die;

require_once __DIR__.'/../app/Controllers/postController.php';

$controller = new \App\Controllers\postController;

$controller->show(1);
$controller->display();
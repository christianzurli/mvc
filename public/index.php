<?php
chdir(dirname(__DIR__));

require_once __DIR__ . '/../db/DbPDO.php';
require_once __DIR__ . '/../db/DbFactory.php';
require_once __DIR__ . '/../app/controllers/postController.php';

$data = require __DIR__ . '/../config/database.php';

try {
    $pdoConn = App\DB\DbFactory::create($data);
    $conn = $pdoConn->getConn();
    $controller = new \App\Controllers\postController($conn);
    $controller->display();

} catch (PDOException $exception) {
    $exception->getMessage();
}







//$controller->show(1);
/*
$statement = $conn->query('select * from posts', PDO::FETCH_OBJ);
if ($statement) {
    while ($row = $statement->fetchObject()) {
        print_r($row);
    }
}
*/
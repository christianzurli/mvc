<?php
chdir(dirname(__DIR__));

require_once __DIR__.'/../app/Controllers/postController.php';
$controller = new \App\Controllers\postController;
$controller->display();
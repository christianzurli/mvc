<?php


namespace App\Controllers;


class postController {
    protected $layout = 'layout/index.tpl.php';
    public function __construct() {
        echo "post controller creato";
    }
    public function display() {
        require $this->layout;
    }
}
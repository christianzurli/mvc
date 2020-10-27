<?php


namespace App\Controllers;


class postController {
    protected $layout = 'layout/index.tpl.php';
    protected $title = 'Christian Zurli';
    public function __construct() {
        echo "post controller creato";
    }
    public function display() {
        require $this->layout;
    }
    public function show($postid) {
        $message = "this is a post message";
        ob_start();
        require __DIR__.'/../Views/post.tpl.php';
        $this->content = ob_get_contents();
        ob_end_clean();
    }
}
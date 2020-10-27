<?php


namespace App\Controllers;

use \PDO;
class postController {
    protected $layout = 'layout/index.tpl.php';
    protected $title = 'Christian Zurli';
    protected $conn;
    public function __construct(PDO $conn) {
        $this->conn = $conn;
        $posts = $this->conn->query('select * from posts')->fetchAll(PDO::FETCH_OBJ);
        ob_start();
        require __DIR__ . '/../views/posts.tpl.php';
        $this->content = ob_get_contents();
        ob_end_clean();
    }
    public function display() {
        require $this->layout;
    }
    public function show($postid) {
        ob_start();
        require __DIR__ . '/../views/post.tpl.php';
        $this->content = ob_get_contents();
        ob_end_clean();
    }
}
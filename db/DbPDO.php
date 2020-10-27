<?php


namespace App\DB;

//singleton
class DbPDO
{
    protected $conn;
    private static $instance;
    public static function getInstance (array $options) {
        if (!self::$instance) {
            self::$instance = new DbPDO($options); // new singleton // oppure self::$instance = new static($options)
        }
        return self::$instance;
    }
    protected function __construct(array $options) {
        $this->conn = new \PDO($options['dsn'], $options['user'], $options['password'], $options['pdo_options']);
    }
    public function getConn() {
        return $this->conn;
    }
}
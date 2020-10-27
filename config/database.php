<?php
return[
    'driver' => 'mysql',
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'pussywagon45',
    'database' => 'blog',
    'dsn' => 'mysql:host=localhost;dbname=blog',
    'pdo_options' => [
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    ]
];
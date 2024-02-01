<?php
spl_autoload_register(static function ($class_name){
    include '../database/' . $class_name . '.php';
});

$database = new Database('127.0.0.1', 'task-php', 'root', '');
$pdo = $database->connect();
Auth::$pdo = $pdo;
Products::$pdo = $pdo;

<?php

$dsn = "mysql:host=db;dbname=testdb;charset=utf8mb4";
$user = "testuser";
$pass = "testpass";

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "Database connection successful";
} catch (PDOException $e) {
    echo "Connection failed";
}

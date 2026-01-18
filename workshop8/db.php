<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'school_db';

try {
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    // Changed $pdo to $conn to match index.php
    $conn = new PDO(
        "mysql:host=$server;dbname=$database;charset=utf8mb4",
        $username,
        $password,
        $options
    );

    // Note: It is better to remove the "echo" from here 
    // because it might mess up your page layout/Blade templates.

} catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}
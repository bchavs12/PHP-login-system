<?php
require 'functions.php';

// Database configuration
$dsn = "mysql:host=localhost;port=3306;dbname=users;charset=utf8mb4";
$db_user = "root";
$db_password = "";

// Create database connection
try {
    $connection = new PDO($dns, $db_user, $db_password);
    dd($connection);
    $connection-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    die();
}
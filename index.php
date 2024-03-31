<?php
require "functions.php";


// connect to our MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=users;user=root;charset=utf8mb4";

// conexão com o BD
$PDO = new PDO($dsn);

// Query de consulta
$stmt = $PDO->prepare("SELECT * FROM users ");
$stmt->execute();

$usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);

require('views/index.view.php');

?>



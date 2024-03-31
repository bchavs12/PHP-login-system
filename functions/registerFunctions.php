<?php
require_once "configDB.php";

function registerUser($name, $email, $password)
{
    global $connection;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $connection->prepare(
        "INSERT INTO users (user_name, user_password, user_email)
         VALUES (?, ?, ?)"
    );
    $stmt->execute([$name, $email, $hashedPassword]);

    return $stmt->rowCount() > 0;
}

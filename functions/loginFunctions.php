<?php
require_once "configDB.php";

function loginUser($email, $password){
    

    global $connection;

    $stmt = $connection->prepare("SELECT user_id, user_name, user_password, user_email FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // verifica se a senha fornecida pelo usuário corresponde à senha armazenada no banco de dados para o mesmo usuário.
    if ($user && password_verify($password, $user['user_password'])){
        return $user;
    }else{
        return false;
    }

}

function isLoogedIn(){
    return isset($_SESSION['user_id']);
}

function logoutUser(){
    session_unset();
    session_destroy();
}
<?php
require_once "config/conn.php";
if($action == "register"){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
 if($action == "login"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
            ":username" => $username,
    ]);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['password'] = $user['password'];
    // $hash = password_hash($password);
    if(password_verify($SESSION['password'], $password)){
        session_start();
        header('homepage.php');
    }
    
}
<?php 
$action = $_POST['action'];
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
    $hash = password_hash($password);
    if(password_verify($SESSION['password'], $hash)){
        session_start();
        header('homepage.php');
    }
    
}
if($action == "create"){
    $example = $_POST['example']; // We need to discuss which elements we should use
    $sql = "INSERT INTO dbs(example) VALUES(:example)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
            ":example" => $example,
    ]);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
}
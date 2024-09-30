<?php
$action = $_POST['action'];
require_once "conn/config.php";
if($action == "email"){
    $email = $_POST['email'];
    $content = $_POST['content'];
    $sql = "INSERT INTO emails(email, content) VALUES(:email, :content)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
            ":email" => $email,
            ":content" => $content,
    ]);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
}
<?php 
require_once "config/conn.php";
$action = $_POST['action'];

// create table
if($action == "create"){
    $example = $_POST['example']; // We need to discuss which elements we should use
    $sql = "INSERT INTO dbs(title, introtext, information, picture1, info1, info2, info3) VALUES(:title, :introtext, :information, :picture1, :info1, :info2, :info3)"; // todo fill the data
    $stmt = $conn->prepare($sql);
    $stmt->execute([
            ":title" => $title,
            ":introtext" => $introtext,
            ":information" => $information,
            ":picture1" => $picture1,
            ":info1" => $info1,
            ":info2" => $info2,
            ":info3" => $info3,
    ]);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
}
if($action == "update"){
    // We start here to update the portfolio
    $example = $_POST['example']; // We need to discuss which elements we should use
    $sql = "UPDATE dbs(id) SET :example = example, "; // todo fill the data
    $stmt = $conn->prepare($sql);
    $stmt->execute([
            ":title" => $title,
            ":introtext" => $introtext,
            ":information" => $information,
            ":picture1" => $picture1,
            ":info1" => $info1,
            ":info2" => $info2,
            ":info3" => $info3,
    ]);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// here we can delete a portfolio
if($action == "delete"){
    $example = $_POST['example']; // We need to discuss which elements we should use
    $sql = "DELETE FROM dbs WHERE id = :id"; // todo fill the data
    $stmt = $conn->prepare($sql);
    $stmt->execute([
            ":id" => $id,
    ]);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
}
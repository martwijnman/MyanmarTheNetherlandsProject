<?php 
$action = $_POST['action'];
if($action == "create"){
    $example = $_POST['example']; // We need to discuss which elements we should use
    $sql = "INSERT INTO dbs(example) VALUES(:example)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
            ":example" => $example,
    ]);
    $stmt->fetchAll(PDO::FETCH_ASSOC);
}
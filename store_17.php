<?php
session_start();

function file_store($filename) {
    $pdo = new PDO('mysql:hostname=localhost;dbname=sandbox', 'root', '');
    $sql = "INSERT INTO images (image) VALUES (:filename)";
    $statement = $pdo->prepare($sql);
    $statement->execute([':filename' => $filename,]);
}

function file_upload($file) {
    $result = pathinfo($file['name']);

    $filename = uniqid() . "." . $result['extension'];

    move_uploaded_file($file['tmp_name'], 'uploads/' . $filename);

    file_store($filename);
}

file_upload($_FILES['image']);

header("Location: /task_17.php");
     exit;

;?>

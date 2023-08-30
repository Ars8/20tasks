<?php
session_start();

function file_store($filename) {
    $pdo = new PDO('mysql:hostname=localhost;dbname=sandbox', 'root', '');
    $sql = "INSERT INTO images (image) VALUES (:filename)";
    $statement = $pdo->prepare($sql);
    $statement->execute([':filename' => $filename,]);
}

function file_upload($filename, $tmp_name) {
    $result = pathinfo($filename);

    $filename = uniqid() . "." . $result['extension'];

    move_uploaded_file($tmp_name, 'uploads/' . $filename);

    file_store($filename);
}

for ($i=0; $i < count($_FILES['image']['name']); $i++) {
    file_upload($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}

header("Location: /task_19.php");
    exit;

;

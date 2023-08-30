<?php

    $text = $_POST['text'];

    $pdo = new PDO('mysql:hostname=localhost;dbname=sandbox', 'root', '' );
    $sql = "INSERT INTO text (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);

    header('Location: task_10.php');

;?>
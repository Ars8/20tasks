<?php
session_start();

    $text = $_POST['text'];

    $pdo = new PDO('mysql:hostname=localhost;dbname=sandbox', 'root', '' );

    $sql = "SELECT * FROM text WHERE text=:text";
    $statement = $pdo->prepare($sql);
    $statement->execute([':text' => $text]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        $message = "You should check";
        $_SESSION['message'] = $message;

        header("Location: /task_11.php");
        exit;
    }

    
    $sql = "INSERT INTO text (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);

    header('Location: task_11.php');

;?>
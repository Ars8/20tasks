<?php
session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = new PDO('mysql:hostname=localhost;dbname=sandbox', 'root', '');

    $sql = "SELECT * FROM users WHERE email = :email";
    $statement = $pdo->prepare($sql);
    $statement->execute([':email' => $email]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        $message = "Такой email уже существует";
        $_SESSION['message'] = $message;

        header("Location: /task_12.php");
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email, 'password' => $hashed_password]);

    header('Location: task_12.php');
;?>
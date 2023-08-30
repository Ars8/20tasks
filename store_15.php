<?php
session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = new PDO('mysql:hostname=localhost;dbname=sandbox', 'root', '');

    $sql = "SELECT * FROM users WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute([':email' => $email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if (empty($user)) {
        $_SESSION['message'] = "Неверный логин или пароль";
        header("Location: task_15.php");
        exit();
    }

    if (!password_verify($password, $user['password'])) {
        $_SESSION['message'] = "Неверный логин или пароль";
        header("Location: task_15.php");
        exit();
    }

    $_SESSION['user'] = ['email' => $user['email'], 'id' => $user['id']];

    header("Location: task_16.php");
    exit();
;?>
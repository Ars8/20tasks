<?php
session_start();
    $message = $_POST['message'];

    if (!empty($message)) {
        $_SESSION['message'] = $message;

        header("Location: /task_13.php");
    }
?>
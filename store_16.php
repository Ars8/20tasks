<?php
session_start();

    unset($_SESSION['message']);

    header("Location: task_15.php");
;?>
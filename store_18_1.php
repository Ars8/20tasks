<?php
session_start();
$id = $_POST['id'];
if (isset($_POST['id'])) {

    $pdo = new PDO('mysql:hostname=localhost;dbname=sandbox', 'root', '');

    $sql = "DELETE FROM images WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute([':id' => $id]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    
}
session_reset();
$pdo = new PDO('mysql:hostname=localhost;dbname=sandbox', 'root', '');
$sql = "SELECT * FROM images";
$statement = $pdo->prepare($sql);
$statement->execute();
$result_db = $statement->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['images_from_db'] = $result_db;
header("Location: /task_18.php");
exit;

<?php

include 'Database.php';

session_start();

try {
    $Result = $conn->prepare("update user set tiket=? where email=?");
    $Result->bindValue(1, $_POST['Message']);
    $Result->bindValue(2, $_SESSION["email"]);
    $Result->execute();
    header('Location: ../../editProfile.php');
    // echo "ok";
} catch (PDOException $e) {
    echo "connection failde: " . $e->getMessage();
}

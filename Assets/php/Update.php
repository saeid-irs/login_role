<?php

include 'Database.php';

session_start();

try {
    $Result = $conn->prepare("update user set name=?, password=?, phone=? where email=?");
    $Result->bindValue(1, $_POST['fullName']);
    $Result->bindValue(2, $_POST['password']);
    $Result->bindValue(3, $_POST['phoneNumber']);
    $Result->bindValue(4, $_SESSION["email"]);
    $Result->execute();
    header('Location: ../../logIn.php');
    // echo "ok";
} catch (PDOException $e) {
    echo "connection failde: " . $e->getMessage();
}

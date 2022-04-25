<?php
session_start();
include 'Database.php';
try {
    $Result = $conn->prepare("SELECT * FROM user WHERE email=? AND password=?");
    $Result->bindValue(1, $_POST['email']);
    $Result->bindValue(2, $_POST['password']);
    $Result->execute();
    $res = $Result->fetch(PDO::FETCH_ASSOC);
    if ($Result->rowCount() > 0) {
        if ($res["Role"] == 1) {
            header('Location: ../../profAdmin.php');
        } else
            header('Location: ../../editProfile.php');
    } else {
        $_SESSION["alert"] = "The information entered is incorrect";
        header('Location: ../../logIn.php');
    }
} catch (PDOException $e) {
    echo "connection failde: " . $e->getMessage();
}
<?php

include 'Database.php';

try {
    $Result = $conn->prepare("INSERT INTO user(name, email, password, phone) VALUES (?,?,?,?)");
    $Result->bindValue(1, $_POST['Name']);
    $Result->bindValue(2, $_POST['Email']);
    $Result->bindValue(3, $_POST['Pssword']);
    $Result->bindValue(4, $_POST['Phone']);

    $Result->execute();
    echo "OK";
} catch (PDOException $e) {
    echo "connection failde: " . $e->getMessage();
}
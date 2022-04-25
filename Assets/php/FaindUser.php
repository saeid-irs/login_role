<?php

include 'Database.php';

try {
    $Result = $conn->prepare("SELECT * FROM user WHERE email LIKE ? OR phone LIKE ?");
    $Result->bindValue(1, $_POST['Search']);
    $Result->bindValue(2, $_POST['Search']);

    $Result->execute();
    echo "OK";
} catch (PDOException $e) {
    echo "connection failde: " . $e->getMessage();
}
<?php

$dbName = "user_information";
$serverName = "localhost";
$userName = "root";
$passeord = "";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $userName, $passeord);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "god";
} catch (PDOException $e) {
    echo "connection failde: " . $e->getMessage();
}
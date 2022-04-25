<?php

include "database.php";

$Result = $conn->prepare("SELECT * FROM user");
$Result->execute();

$uzerInfo = $Result->fetchAll(PDO::FETCH_ASSOC);

$SS = "";
foreach ($uzerInfo as $info) {
    $SS .=
        '<tr>' .
        '<td>' . $info["id"] . '</td>' .
        '<td>' . $info["name"] . '</td>' .
        '<td>' . $info["phone"] . '</td>' .
        '<td>' . $info["email"] . '</td>' .
        '<td>' . $info["password"] . '</td>' .
        '</tr>';
}
echo $SS;
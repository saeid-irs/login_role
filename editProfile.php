<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Saeid Tavazani - Contact form">
    <link rel="stylesheet" href="Assets/css/style.css">
    <title>Contact</title>
</head>

<body>

    <main>
        <article class="profile">
            <section class="profile_table">
                <table>
                    <tr>
                        <th>Edit</th>
                        <th>fullName</th>
                        <th>Email</th>
                        <th>phone number</th>
                        <th>Password</th>
                        <th>Message</th>
                    </tr>
                    <tr>
                        <td><img id="edit" src="Assets/img/userEdit.svg" alt="edit"></td>
                        <?php
                        include 'Assets/php/Database.php';
                        $Result = $conn->prepare("SELECT * FROM user WHERE email=? AND password=?");
                        $Result->bindValue(1, $_SESSION["email"]);
                        $Result->bindValue(2, $_SESSION["Password"]);
                        $Result->execute();
                        $uzerInfo = $Result->fetchAll(PDO::FETCH_ASSOC);
                        $bb = "";
                        foreach ($uzerInfo as $info) {
                            $bb .=
                                '<td>' . $info["name"] . '</td>' .
                                '<td>' . $info["phone"] . '</td>' .
                                '<td>' . $info["email"] . '</td>' .
                                '<td>' . $info["password"] . '</td>' .
                                '<td>' . $info["tiket"] . '</td>';
                        }
                        echo $bb; ?>
                    </tr>
                </table>
                <form action="Assets/php/Message.php" method="post" class="Message_box">
                    <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
                    <button type="submit">send</button>
                </form>
            </section>
            <section class="section_box d_none" id="box_edit_form">
                <form action="Assets/php/Update.php" method="post">
                    <div class="input_box">
                        <label for="fullName">fullName</label>
                        <input name="fullName" type="text" id="fullName">
                    </div>
                    <div class="input_box">
                        <label for="phoneNumber">phone number</label>
                        <input name="phoneNumber" type="number" id="phoneNumber">
                    </div>
                    <div class="input_box">
                        <label for="password">Password</label>
                        <input name="password" type="password" id="password">
                    </div>
                    <div class="box_btn">
                        <button id="send">submit</button>
                        <span class="close">close</span>
                    </div>

                </form>
            </section>



        </article>
    </main>

</body>

<script src="Assets/js/jquery-3.6.0.min.js"></script>
<script src="Assets/js/style.js"></script>

</html>
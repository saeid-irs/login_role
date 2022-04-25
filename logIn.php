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
    <h5 class="titel_eror"><?php
                            if ($_SESSION["alert"] == "The information entered is incorrect") {
                                echo $_SESSION["alert"];
                                $_SESSION["alert"] = "";
                            }
                            ?></h5>
    <main>

        <article class="article_box">
            <section class="night">
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
                <div class="shooting_star"></div>
            </section>
            <section class="ceform">
                <div class="logo">
                    <h1>log <span>in</span></h1>
                </div>
                <div class="section_box">
                    <form method="post" id="form_log">
                        <div class="input_box">
                            <label for="email">Email</label>
                            <input name="email" type="email" id="email">
                        </div>
                        <div class="input_box">
                            <label for="password">password</label>
                            <input name="password" type="password" id="password">
                        </div>
                        <button id="send">submit</button>
                        <a class="link" href="Registration.php">Registration Form</a>
                    </form>
                </div>
            </section>
        </article>
    </main>

</body>

<script src="Assets/js/jquery-3.6.0.min.js"></script>
<script src="Assets/js/style.js"></script>
<script>
    $("#send").click(function(e) {
        var em = $("#email").val();
        var pa = $("#password").val();
        if (em !== "" && pa !== "") {
            $("#form_log").attr("action", "Assets/php/login.php");
        }
    });
</script>

</html>
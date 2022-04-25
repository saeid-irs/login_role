<!DOCTYPE html>
<html lang="en">

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
            <section>

            </section>
            <section class="profile_table">
            <!-- <form action="Assets/php/delete.php" method="post">
                <input type="number" name="ID" placeholder="id delete">
               <button type="submit">delete</button>
            </form>    -->
            <table>
                    <tr>
                        <!-- <th>Delete</th> -->
                        <th>id</th>
                        <th>fullName</th>
                        <th>phone number</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Message</th>
                    </tr>
                    <?php include "Assets/php/Admin.php" ?>
                </table>
            </section>
        </article>
    </main>

</body>

<script src="Assets/js/jquery-3.6.0.min.js"></script>
<script src="Assets/js/style.js"></script>

</html>
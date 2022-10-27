<?php
require "model/database.php";
require "controller/signIn.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/twitter.png">
    <link rel="stylesheet" href="Style/loginPage.css">
    <title>Login Page</title>
</head>

<body>

    <form method="Post">
        <div class="center">
            <br>
            <label for="email-field">Email address:</label>
            <br>
            <input id="email-field" type="email" name="email" placeholder="john-doe@mail.com" required
                maxlength="250" />

            <br>

            <label for="password-field">Password:</label>
            <br>
            <input id="password-field" type="password" name="password" placeholder="Password" required />

            <br>

            <label for="name-field">Display:</label>
            <br>
            <input id="name-field" type="text" name="name" placeholder="John Doe" required />

            <br>

            <button type="login" name="login" class="loginbutton">Login</button>
            <?php
            if (isset($error)) {
                echo "<p>$error</p>";
            }
            ?>
        </div>
    </form>

</body>

</html>
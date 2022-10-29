<?php
session_start();
require "model/database.php";
require "controller/accountDetails.php";
echo session_id();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twit-nah</title>
    <link rel="icon" type="image/x-icon" href="images/twitter.png">
    <link rel="stylesheet" href="Style/account.css">
</head>

<body>
    <div class="sidebar">
        <div class="menu">
            <h1><a href="/Project/Main.php" style="text-decoration: none; color:white;">Home</a></h1>
            <br>
            <h1><a href="/Project/privacy.php" style="text-decoration: none; color:white;">Privacy Policy</a></h1>
            <br>
            <h1><a href="/Project/Login.php" style="text-decoration: none; color:white;">Logout</a></h1>
            <br>
            <h1><a href="/Project/account.php" style="text-decoration: none; color:white;">Account</a></h1>
        </div>
    </div>
    <form method="POST" class="content">
        <label><?php echo $_SESSION["name"]; ?></label>
        <br>
        <input id="name-field" type="text" />
        <br>
        <button type="name" name="name" class="postbutton" onclick="name()">Update Name</button>

        <br>

        <label><?php echo $_SESSION["email"]; ?></label>

        <input id=" email-field" type="text" maxlength="250" />
        <br>
        <button type="email" name="email" class="postbutton" onclick="email()">update email</button>

        <br>

        <label>***********</label>
        <br>
        <input id="password-field" type="password" />
        <br>
        <button type="password" name="password" class="postbutton">update password</button>
        <br>




    </form>
</body>

</html>
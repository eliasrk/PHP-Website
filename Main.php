<?php
require "controller/signup.php";
require "model/database.php";
require "controller/postTweets.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twit-nah</title>
    <link rel="icon" type="image/x-icon" href="images/twitter.png">
    <link rel="stylesheet" href="style.css">
</head>


<!--
<form method="Post">

        <label for="email-field">Email address:</label>
        <input id="email-field" type="email" name="email" placeholder="john-doe@mail.com" required maxlength="250" />
        
        <br>
        
        <label for="password-field">Password:</label>
        <input id="password-field" type="password" name="password" placeholder="Password" required />
        
        <br>
        
        <label for="name-field">Display:</label>
        <input id="name-field" type="text" name="name" placeholder="John Doe" required />
        
        <br>
        
        <button type="submit" name="submit">Sign up</button>
        
        <?php
        if (isset($error)) {
            echo "<p>$error</p>";
        }

        ?>
        </form>
        
    </div>

    <div class="content">
        <h1>Tweet</h1>
        
    </div>
    
    <div class="search">
        <div>
        <input id="search" type="search" name="search" placeholder="search">
        <button type="search" name="search">Search</button>
        </div>
    </div>
</body>
-->
<div class="body">
    <div class="sidebar">
        <div class="menu">
            <h1>Menu</h1>
            <br>
            <h1>Trending</h1>
            <br>
            <h1>Profile</h1>
        </div>
    </div>

    <form method="POST" class="content">
        <div class="tabPost">
            <div class="profileimg">
                <img src="images/profilepic.png" alt="profile">
            </div>

            <input type="text" name="tweetfield" class="post" placeholder="whats happening?">

            <br>

            <button type="tweet" name="tweet" class="postbutton">Post</button>
        </div>

        <?php
        require "controller/getTweets.php";
        ?>

</div>
<div class="search">


</div>
</div>

</html>
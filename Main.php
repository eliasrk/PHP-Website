<?php
require "model/database.php";
require "controller/postTweets.php";
include "signup.php";
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twit-nah</title>
    <link rel="icon" type="image/x-icon" href="images/twitter.png">
    <link rel="stylesheet" href="Style/style.css">
</head>

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
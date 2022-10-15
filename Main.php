<?php
require "controller/signup.php";

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twit-nah</title>
    <link rel="icon" type="image/x-icon" href="images/twitter.png">
    <link rel="stylesheet" href="style.css">
</head>


<!-- <div class="sidebar">
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
        <h1>1</h1>
    </div>

    <div class="content"><div>
        <img src="images/profilepic.png" alt="profile" class="profileimg"> </div>
        <input type="text" class="post"placeholder = "whats happening?">
        <br>
        <button class="postbutton">Post</button>
        <?php
        //$conn = new mysqli("localhost", "root", "", "Blog");
        //$sql = "INSERT INTO tweets (username, content) FROM Blog.tweets";
        //$result = $conn->query($sql);

        ?>

        <?php
        $conn = new mysqli("localhost", "root", "", "Blog");
        $sql = "SELECT username, tweetId, content, comment FROM Blog.tweets";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo " <div class = 'tweet'>"
                . "<div class = 'username'> " . $row["username"] . "</div>"
                .  " <div> " . $row["content"] . "</div>"
                . "<br></div> ";
        }
        ?>

    </div>
    <div class="search">
        
    
    </div>
</div>

</html>
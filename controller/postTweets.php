<?php

if (!isset($_POST["tweet"])) {
    return;
}

if (strlen($_POST["tweetfield"]) > 140) {
    $error = "the tweet length is to long";
    echo "<script type='text/javascript'>alert('$error');</script>";
}
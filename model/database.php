<?php
$database = new mysqli("localhost", "root", "", "Blog");

//cant connect to Database
if (!$database) {
    $error = "could not connect to the database! Please contact the webmaster!";
    return;
}

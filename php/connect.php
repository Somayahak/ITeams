<?php

session_start();
$servername = "sql6.freesqldatabase.com";
$username = "sql6586681";
$password = "d71eJpbkAF";
$dbname = "sql6586681";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    $query = "INSERT INTO users VALUES('1','$firstname','$lastname','$Email','$Password','$Phone','$Gender','$education',NULL,NULL,NULL,NULL,NULL)";



?>

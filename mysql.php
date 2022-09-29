<?php
$server = "mysql106.unoeuro.com";
$username = "eaaamichaelkp_dk";
$password = "bkBaHdnG6cwFDAEe5xf4";
$database = "eaaamichaelkp_dk_db";
$mySQL = new mysqli($server, $username, $password, $database);

// Check connection
if(!$mySQL) {
    die("Could not connect to the MySQL server: " . mysqli_connect_error());
    }
?>
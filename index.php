<?php

error_reporting(-1);

ini_set('display_errors', 'On');

ini_set("display_errors",1);
ini_set("error_reporting",E_ALL);


$servername = "localhost";
$username = "root";  //your user name for php my admin if in local most probaly it will be "root"
$password = "root";  //password probably it will be empty
$databasename = "test"; //Your db nane
// Create connection
$conn = new mysqli($servername, $username, $password,$databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";





<?php

error_reporting(-1);

ini_set('display_errors', 'On');

ini_set("display_errors",1);
ini_set("error_reporting",E_ALL);


date_default_timezone_set("Asia/Bangkok");
$host="localhost/phpmyadmin";
$username="root";
$password="";
$dbname="dahangconner";
$conn = new mysqli($host, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";






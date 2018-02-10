<?php

error_reporting(-1);
ini_set('display_errors', 'On');
ini_set("display_errors",1);
ini_set("error_reporting",E_ALL);
date_default_timezone_set("Asia/Bangkok");
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "dahangconner";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }






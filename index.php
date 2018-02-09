<?php
// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.

$server = "DESKTOP-5OQ88VR\MSSQL2014";
$user = "DESKTOP-5OQ88VR\Kasco";
$pass = "";
$db_name="sport"; 

//connection to database
$dbhandle = mssql_connect($server, $user, $pass) or die ("Cannot connect to Server");



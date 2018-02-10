<?php
// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.

$serverName = "DESKTOP-5OQ88VR\MSSQL2014";
$uid = "DESKTOP-5OQ88VR\Kasco";
$pwd = "";
$dbase="sport"; 

resource mssql_connect ([ string $serverName [, string $uid [, string $pwd [, bool $new_link = FALSE ]]]] )
/* Define the Connection String with an array */
//$connectionInfo = array( "Database"=>$dbase, "UID"=>$uid, "PWD"=>$pwd);
/* Open the connection */
//$conn = mssql_connect( $serverName, $connectionInfo);
/* Catch and display any connection error message */
//if( $conn === false ) {
     echo "Unable to connect.</br>";
   //  die( print_r( sqlsrv_errors(), true));
//}else
//{echo "Connect Success !!";}






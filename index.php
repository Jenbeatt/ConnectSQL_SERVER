<?php
$serverName = "DESKTOP-5OQ88VR\MSSQL2014"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"sports");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     //die( print_r( sqlsrv_errors(), true));
}


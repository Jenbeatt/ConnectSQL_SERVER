<?php
// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$server = 'DESKTOP-5OQ88VR\MSSQL2014';

// Connect to MSSQL
$link = mssql_connect($server);

if (!$link) {
    echo'Something went wrong while connecting to MSSQL';
}


<?php
/*
 *  Script to connect to MS SQL Server using
 *  SQL Server Authentication not Win Domain Auth.
 *  Return tabular results and convert to JSON.
 *  Colin A. White - October 2014
 */
 
/* Setup Connection Credentials */

/* A hostname, FQDN or IP address */
$serverName="AHDC513";  
/* Set SQL Server account username and password */
$uid = 'foo';  
$pwd = "baa";
/* Set the default database to connect to */
$dbase = "master";


/* 
 * Establish a Connection to the SQL Server 
 */ 

/* Define the Connection String with an array */
$connectionInfo = array( "Database"=>$dbase, "UID"=>$uid, "PWD"=>$pwd);
/* Open the connection */
$conn = sqlsrv_connect( $serverName, $connectionInfo);
/* Catch and display any connection error message */
if( $conn === false ) {
     echo "Unable to connect.</br>";
     die( print_r( sqlsrv_errors(), true));
}

/* 
 * Submittting a TSQL Query via Connection
 * / 

/* Define a TSQL Query */
$tsql = 'SELECT Top 100 * FROM AHDC389.EDServiceLine.dbo.EDVisitDetails';
/* Sumit the query to the open connection */
$stmt = sqlsrv_query( $conn, $tsql);
/* Catch and display and query error message */
if( !$stmt ) {
     echo "Error executing query.</br>";
     die( print_r( sqlsrv_errors(), true));
}
 
/* 
 * Processing query results 
 */

/* Setup an empty array */
$json = array();
/* Iterate through the table rows populating the array */
do {
     while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
     $json[] = $row;
     }
} while ( sqlsrv_next_result($stmt) );
 
/* Run the tabular results through json_encode() */
/* And ensure numbers don't get cast to trings */
echo json_encode($json);

/* Free statement and connection resources. */
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
 
?>

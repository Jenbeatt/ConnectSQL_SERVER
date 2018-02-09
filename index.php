<?php
// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.

$serverName = "DESKTOP-5OQ88VR\MSSQL2014";
$uid = "DESKTOP-5OQ88VR\Kasco";
$pwd = "";
$dbase="sport"; 
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
}else
{echo "Connect Success !!";}


/* Define a TSQL Query */
$tsql = 'SELECT  * FROM sport ';
/* Sumit the query to the open connection */
$stmt = sqlsrv_query( $conn, $tsql);
/* Catch and display and query error message */
if( !$stmt ) {
     echo "Error executing query.</br>";
     die( print_r( sqlsrv_errors(), true));
}
 

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




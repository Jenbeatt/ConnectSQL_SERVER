<?php

error_reporting(-1);

ini_set('display_errors', 'On');

ini_set("display_errors",1);
ini_set("error_reporting",E_ALL);


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$result = mssql_query("select * from sport", $conn);

if(!$result){

	var_dump(mssql_get_last_message());


	die('MSSQL error: ' . mssql_get_last_message());
}

if($result === true){

	var_dump('result', $result);
	die;
}


$rows = mssql_fetch_assoc($result);

if(!$rows){

	die('MSSQL error: ' . mssql_get_last_message());

}else{

	var_dump($rows);
}






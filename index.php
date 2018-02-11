<?php

error_reporting(-1);
ini_set('display_errors', 'On');
ini_set("display_errors",1);
ini_set("error_reporting",E_ALL);
date_default_timezone_set("Asia/Bangkok");

 $serverName  = "localhost";
 $userName  = "id4708578_test1234";
 $userPassword = "test1234";
 $dbName = "id4708578__ballbib";


 $mysqli = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	mysqli_set_charset($mysqli, "utf8");
 






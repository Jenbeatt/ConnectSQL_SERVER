<?php

error_reporting(-1);

ini_set('display_errors', 'On');

ini_set("display_errors",1);
ini_set("error_reporting",E_ALL);


date_default_timezone_set("Asia/Bangkok");
$host="localhost";
$username="root";
$password="";
$dbname="dahangconner";
$tbname="`member`";
$connect=  mysql_connect($host,$username,$password)or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
$sqldb=mysql_select_db($dbname)or die("No Connect Data");
mysql_db_query($dbname,"SET NAMES UTF8");





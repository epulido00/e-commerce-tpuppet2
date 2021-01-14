<?php


$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject";

$conn = mysql_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){

    die("Connection failed: " . mysql_connect_error());
}


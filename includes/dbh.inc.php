<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName,);

if(!$conn){

    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn,"insert into users values (1,'Jessica Cavazos','jessy@gmail.com','jessy123','hola123')");

?>
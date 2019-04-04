<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "creenix";

$connection = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
	die('Connection Failed: ' . mysqli_connect_error() . mysqli_connect_errno() );
}

?>
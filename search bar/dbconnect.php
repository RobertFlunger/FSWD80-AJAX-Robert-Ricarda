<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ( !$conn ) {
	die("Connection failed") . mysqli_connect_error();
} else {
	/*echo "Connected successfully!";*/
}
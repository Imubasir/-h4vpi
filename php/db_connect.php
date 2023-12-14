<?php
$username = 'root';
$db = 'h4pvi';
$server = 'localhost';
$password = '';

$connect = new mysqli($server, $username, $password, $db);

if($connect->connect_error) {
	die("Connection Failed: ". $connect->connect_error);
}
?>
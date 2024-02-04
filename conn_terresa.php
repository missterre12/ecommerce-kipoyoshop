<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$db_name = 'db_ta_terresa';
$conn = mysqli_connect($host,$username,$password,$db_name);
if(!$conn){
	die("Connection Failed = ".mysqli_connect_error());
}
?>
<?php
$database ="fitbeedb";
$username = "root";
$pw = "root";
$server = "localhost";

$conn= new mysqli($server,$username,$pw,$database);
if($conn->connect_errno)
	echo "Failed to connect".$conn->connect_error;


?>
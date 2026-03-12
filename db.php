<?php
$conn = new mysqli("localhost","root","","management_system");

if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
?>
<?php
$host = "localhost";
$name = "root";
$password = "";
$database = "ReserveeringSysteem";

$db = mysqli_connect($host, $name, $password, $database) or die ("Error: " . mysqli_connect_error());

?>
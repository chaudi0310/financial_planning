<?php
$hostname = "localhost";
$user = "root";
$dbpassword = "";
$database = "uno";

$db = new mysqli($hostname, $user,$dbpassword, $database) or ("Could not connect database");

?>
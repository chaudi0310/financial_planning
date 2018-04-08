<?php 
function call_products(){
	include '../connection/dbConfig.php';
	$dbquery = mysqli_query($db,"SELECT * FROM product ORDER by id ASC");
	$countdbquery = mysqli_num_rows($dbquery);
}
?>
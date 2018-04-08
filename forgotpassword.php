<?php
include 'connection/dbConfig.php';
session_start();
$spassword = $_POST['spassword'];
$sql = mysqli_query($db, "SELECT * FROM accounts WHERE spassword = '$spassword'");
$count = mysqli_num_rows($sql);
if($count > 0){
	$_SESSION['forgotpass'] = 'true';
	?>
		<script>
			window.location = "reset_password.php";
		</script>
	<?php
} else {
	?>
		<script>
			alert("Wrong Second Password");
			window.location = "forgot-password.php";
		</script>
	<?php
}


?>
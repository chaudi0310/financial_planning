<?php
include '../../connection/dbConfig.php';
session_start();
$password = $_POST['password'];
$sql = mysqli_query($db, "SELECT * FROM accounts WHERE password = '$password'");
$countsql = mysqli_num_rows($sql);
if($countsql > 0){
	unset($_SESSION['readonly']);
	?>
		<script>
			alert("Success");
			window.location = "../index.php";
		</script>
	<?php
	
} else {
	?>
		<script>
			alert("Wrong Password");
			window.location = "../index.php";
		</script>
	<?php
}
?>
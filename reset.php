<?php
session_start();
include 'connection/dbConfig.php';
$npassword = $_POST['npassword'];
$cpassword = $_POST['cpassword'];
if($npassword == $cpassword){
	$update = mysqli_query($db, "UPDATE accounts SET password = '$cpassword' WHERE id = '1'");
	if($update == true){
		unset($_SESSION['forgotpass']);
		?>
			<script>
				alert("Success");
				window.location = 'index.php';
			</script>
		<?php
	} else {
		unset($_SESSION['forgotpass']);
		?>
			<script>
				alert("Something Went Wrong");
				window.location = 'index.php';
			</script>
		<?php
	}
} else {
	unset($_SESSION['forgotpass']);
	?>
		<script>
			alert("Password Don't Match");
			window.location = 'index.php';
		</script>
	<?php
}
?>
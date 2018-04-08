<?php
include '../../connection/dbConfig.php';
$oldpass = $_POST['opassword'];
$npass = $_POST['npassword'];
$cnpass = $_POST['cnpassword'];
if($npass == $cnpass){
	$sql = mysqli_query($db, "SELECT * FROM accounts WHERE id = '1'");
	$sqlcount = mysqli_num_rows($sql);
	if($sqlcount > 0){
		$row = mysqli_fetch_assoc($sql);
		$username = $row['username'];
		$password = $row['password'];
		if($password == $oldpass){
			$changepass = mysqli_query($db, "UPDATE accounts SET password = '$cnpass' WHERE id = '1'");
			if($changepass == true){
				?>
					<script>
						alert("Success");
						window.location = '../index.php'
					</script>
				<?php
			} else {
				?>
					<script>
						alert("Failed");
						window.location = '../index.php'
					</script>
				<?php
			}
		} else {
			?>
				<script>
					alert("Wrong Password");
					window.location = '../index.php'
				</script>
			<?php
		}
		
	}
} else {
	?>
	<script>
		alert('Password dont match');
		window.location = '../index.php'
	</script>
	<?php
}
?>
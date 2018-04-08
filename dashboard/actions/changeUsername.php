<?php
include '../../connection/dbConfig.php';
$nusername = $_POST['nusername'];
$cnusername = $_POST['cnusername'];
$vpassword = $_POST['password'];
if($nusername == $cnusername){
	$sql = mysqli_query($db, "SELECT * FROM accounts WHERE id = '1'");
	$sqlcount = mysqli_num_rows($sql);
	if($sqlcount > 0){
		$row = mysqli_fetch_assoc($sql);
		$username = $row['username'];
		$password = $row['password'];
		if($password == $vpassword){
			$changeuser = mysqli_query($db, "UPDATE accounts SET username = '$cnusername' WHERE id = '1'");
			if($changeuser == true){
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
		alert('Username dont match');
		window.location = '../index.php'
	</script>
	<?php
}
?>
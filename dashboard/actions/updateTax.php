<?php
session_start();
include '../../connection/dbConfig.php';
$tax_rate = $_POST['tax_rate'];
$sql = mysqli_query($db, "UPDATE tax SET anual_tax_rate = '$tax_rate' WHERE id = '1'");
if($sql == true){
	$_SESSION['action'] = 'update';
	?>
	
		<script>
			alert("Success");
			window.location = "../profits-and-loss.php";
		</script>
	<?php
} else {
	?>
		<script>
			alert("Failed");
			window.location = '../model-inputs.php';
		</script>
	<?php
}
?>
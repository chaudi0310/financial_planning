<?php
include '../../connection/dbConfig.php';
$id = $_GET['id'];
$delete = mysqli_query($db, "DELETE FROM other_liabilities WHERE id = '$id'");
if($delete == true){
	?>
		<script>
			alert("Success");
			window.location = '../balance-sheet.php';
		</script>
	<?php
} else {
	?>
		<script>
			alert("Failed");
			window.location = '../balance-sheet.php';
		</script>
	<?php
}
?>
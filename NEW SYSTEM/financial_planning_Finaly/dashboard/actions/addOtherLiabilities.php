<?php
include '../../connection/dbConfig.php';
$liability = $_POST['liability'];
$value = $_POST['value'];
$insert = mysqli_query($db, "INSERT INTO other_liabilities(id, name, value) VALUES(NULL, '$liability', '$value')");
if($insert == true){
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
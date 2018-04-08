<?php
include '../../connection/dbConfig.php';
$cash = $_POST['cash'];
$receive = $_POST['receive'];
$inventory = $_POST['inventory'];
$prepaid = $_POST['prepaid'];
$incometax = $_POST['incometax'];
$otherassets = $_POST['otherassets'];
$updatecash = mysqli_query($db, "UPDATE current_assets SET balance = '$cash' WHERE id = '1'");
$updatereceive = mysqli_query($db, "UPDATE current_assets SET balance = '$receive' WHERE id = '2'");
$updateinventory = mysqli_query($db, "UPDATE current_assets SET balance = '$inventory' WHERE id = '3'");
$updateprepaid = mysqli_query($db, "UPDATE current_assets SET balance = '$prepaid' WHERE id = '4'");
$updateincometax = mysqli_query($db, "UPDATE current_assets SET balance = '$incometax' WHERE id = '5'");
$updateotherassets = mysqli_query($db, "UPDATE current_assets SET balance = '$otherassets' WHERE id = '6'");
if($updatecash == true && $updatereceive == true && $updateinventory == true && $updateprepaid == true && $updateincometax == true && $updateotherassets == true){
	
	?>
	
		<script>
			alert("Updated");
			window.location = "../balance-sheet.php";
		</script>
	<?php
} else {
	?>
		<script>
			alert("Failed");
			window.location = "../balance-sheet.php";
		</script>
	<?php
}
?>
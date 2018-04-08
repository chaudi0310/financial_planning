<?php
include '../../connection/dbConfig.php';
$accounts_payable = $_POST['accounts_payable'];
$accrued_expenses = $_POST['accrued_expenses'];
$notes_payable = $_POST['notes_payable'];
$capital_leases = $_POST['capital_leases'];
$ocurrent_liab = $_POST['ocurrent_liab'];
$updateaccount = mysqli_query($db, "UPDATE current_liabilities SET initial_balance = '$accounts_payable' WHERE id = '1'");
$updateaccrued = mysqli_query($db, "UPDATE current_liabilities SET initial_balance = '$accrued_expenses' WHERE id = '2'");
$updatenotes = mysqli_query($db, "UPDATE current_liabilities SET initial_balance = '$notes_payable' WHERE id = '3'");
$updatecapital = mysqli_query($db, "UPDATE current_liabilities SET initial_balance = '$capital_leases' WHERE id = '4'");
$updateother = mysqli_query($db, "UPDATE current_liabilities SET initial_balance = '$ocurrent_liab' WHERE id = '5'");
if($updateaccount == true && $updateaccrued == true && $updatenotes == true && $updatecapital == true && $updateother == true ){
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
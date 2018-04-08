<?php
include '../../connection/dbConfig.php';
$oltdinitial = $_POST['oltdinitial'];
$oltdyear1 = $_POST['oltdyear1'];
$oltdyear2 = $_POST['oltdyear2'];
$oltdyear3 = $_POST['oltdyear3'];
$oltdyear4 = $_POST['oltdyear4'];
$oltdyear5 = $_POST['oltdyear5'];
$updateoltd = mysqli_query($db, "UPDATE debt SET initial_balance = '$oltdinitial', year1 = '$oltdyear1', year2 = '$oltdyear2', year3 = '$oltdyear3', year4 = '$oltdyear4', year5 = '$oltdyear5' WHERE id = '1'");
if($updateoltd == true){
	session_start();
	$_SESSION['action'] = 'balancesheet';
	?>
		<script>
			alert("Success");
			window.location = '../cash-flow.php';
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
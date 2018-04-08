<?php
	include '../../connection/dbConfig.php';
	$owners_equity = $_POST['owners_equity'];
	$paid_in_capital = $_POST['paid_in_capital'];
	$preferred_equity = $_POST['preferred_equity'];
	$retained_earnings = $_POST['retained_earnings'];
	$update1 = mysqli_query($db, "UPDATE equity SET year1 = '$owners_equity' WHERE id = '1'");
	$update2 = mysqli_query($db, "UPDATE equity SET year1 = '$paid_in_capital' WHERE id = '2'");
	$update3 = mysqli_query($db, "UPDATE equity SET year1 = '$preferred_equity' WHERE id = '3'");
	$update4 = mysqli_query($db, "UPDATE equity SET year1 = '$retained_earnings' WHERE id = '4'");
	if($update1 == true && $update2 == true && $update3 == true && $update4 == true){
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
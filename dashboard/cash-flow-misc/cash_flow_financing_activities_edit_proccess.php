<?php
include '../../connection/dbConfig.php';
$preferredstock = $_POST['preferredstockvalue'];
$totalcash = $_POST['totalcashvalue'];
$commonstock = $_POST['commonstockvalue'];
$financingcashflow = $_POST['financingcashflowvalue'];
$sql1 = mysqli_query($db, "UPDATE cash_flow_financing_activities SET value = '$preferredstock' WHERE id = '1'");
$sql2 = mysqli_query($db, "UPDATE cash_flow_financing_activities SET value = '$totalcash' WHERE id = '2'");
$sql3 = mysqli_query($db, "UPDATE cash_flow_financing_activities SET value = '$commonstock' WHERE id = '3'");
$sql4 = mysqli_query($db, "UPDATE cash_flow_financing_activities SET value = '$financingcashflow' WHERE id = '4'");
if($sql1 == true && $sql2 == true && $sql3 == true && $sql4 == true){
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
			window.location = '../cash-flow.php';
		</script>
	<?php
}
?>
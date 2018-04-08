<?php
include '../../connection/dbConfig.php';
$amortization = $_POST['amortizationvalue'];
$otherliabilities = $_POST['otherliabilitiesvalue'];
$othercashflow = $_POST['othercashflow'];
$sql = mysqli_query($db, "UPDATE cash_flow_operating_activities SET value = '$amortization' WHERE id = '1'");
$sql1 = mysqli_query($db, "UPDATE cash_flow_operating_activities SET value = '$otherliabilities' WHERE id = '2'");
$sql2 = mysqli_query($db, "UPDATE cash_flow_operating_activities SET value = '$othercashflow' WHERE id = '3'");
if($sql == true && $sql1 == true && $sql2 == true){
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
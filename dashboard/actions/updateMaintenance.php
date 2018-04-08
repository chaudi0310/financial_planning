<?php
include '../../connection/dbConfig.php';
$retexpense = mysqli_query($db, "SELECT * FROM profits_loss_expense_increase WHERE id = '1'");
			$retrieveexp = mysqli_fetch_assoc($retexpense);
			$expy2 = 1 + ($retrieveexp['year2']/100);
			$expy3 = 1 + ($retrieveexp['year3']/100);
			$expy4 = 1 + ($retrieveexp['year4']/100);
			$expy5 = 1 + ($retrieveexp['year5']/100);
$machinery = mysqli_query($db, "SELECT * FROM properties_equipment WHERE id = '4'");
$countmachinery = mysqli_num_rows($machinery);
if($countmachinery > 0){
	$row = mysqli_fetch_assoc($machinery);
	$machineryvalue = $row['year1'];
}
$maintenance = $_POST['maintenance'];
$sql = mysqli_query($db, "UPDATE anual_maintenance SET factor_cap_equip = '$maintenance'");
if($sql == true){
	$maintenancevalue = $maintenance/100;
	$value1 = $machineryvalue * $maintenancevalue;
	$value2 = $value1 * $expy2;
	$value3 = $value1 * $expy3;
	$value4 = $value1 * $expy4;
	$value5 = $value1 * $expy5;
	$update = mysqli_query($db, "UPDATE operating_expenses SET year1 = '$value1', year2 = '$value2', year3 = '$value3', year4 = '$value4', year5 = '$value5' WHERE id = '6'");
	if($update == true){
		?>
			<script>
				alert("Updated");
				window.location = '../model-inputs.php';
			</script>
		<?php
	} else {
		?>
		<script>
				alert("Please Try Again");
				window.location = '../model-inputs.php';
		</script>
		<?php
	}
	
	
} else {
	?>
		<script>
			alert("Something Went Wrong");
		</script>
	<?php
}
?>
<?php
include '../../connection/dbConfig.php';
$inflationrate = $_POST['inflation_rate'];
$updateinflation = mysqli_query($db, "UPDATE inflation SET anual_inflation_rate = '$inflationrate' WHERE id= '1'");
	if($updateinflation == true){
		$year1 = 0;
		$year2 = $inflationrate;
		$year3 = $year2 + $inflationrate;
		$year4 = $year3 + $inflationrate;
		$year5 = $year4 + $inflationrate;
		$updaterevenue = mysqli_query($db, "UPDATE profits_loss_expense_increase SET year1 = '$year1', year2 = '$year2', year3 = '$year3', year4 = '$year4', year5 = '$year5'");
			if($updaterevenue == true){
				?>
				<script>
					alert('Updated Revenue');
					window.location = '../model-inputs.php';
				</script>
				<?php
				
			} else {
				?>
				<script>
					alert('Update Revenue Failed');
					window.location = '../model-inputs.php';
				</script>
				
				<?php
				
			}
		
		
	} else {
		?>
		<script>
			alert('Update Inflation Failed');
			window.location = '../model-inputs.php';
		</script>
		<?php
		
	}
?>
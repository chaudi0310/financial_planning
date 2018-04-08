<?php
include '../../connection/dbConfig.php';
$pricerate = $_POST['p_increase_rate'];
$updateinflation = mysqli_query($db, "UPDATE product_price_increase SET anual_price_increase = '$pricerate' WHERE id= '1'");
	if($updateinflation == true){
		$year1 = 0;
		$year2 = $pricerate;
		$year3 = $year2 + $pricerate;
		$year4 = $year3 + $pricerate;
		$year5 = $year4 + $pricerate;
		$updaterevenue = mysqli_query($db, "UPDATE profits_loss_revenue_increase SET year1 = '$year1', year2 = '$year2', year3 = '$year3', year4 = '$year4', year5 = '$year5'");
			if($updaterevenue == true){
				?>
				<script>
					alert('Updated');
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
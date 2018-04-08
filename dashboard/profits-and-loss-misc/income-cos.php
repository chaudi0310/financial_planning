<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$sql = mysqli_query($db, "SELECT * FROM `income-cost-of-sales`");
			$countsql = mysqli_num_rows($sql);
			
			
		?>
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="color:white; background-color: gray; border-bottom: 10px black;">
				<th>Cost Of Good Sold</th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<tbody>
		<?php if($countsql > 0){
			while($row = mysqli_fetch_assoc($sql)){
				$product = $row['product'];
				$year1 = $row['year1'];
				$year2 = $row['year2'];
				$year3 = $row['year3'];
				$year4 = $row['year4'];
				$year5 = $row['year5'];
				
			 ?>
			<tr>
				<td class=""><?php echo $product; ?></td>
				<td class="">₱<?php echo number_format($year1,2); ?></td>
				<td class="">₱<?php echo number_format($year2,2); ?></td>
				<td class="">₱<?php echo number_format($year3,2); ?></td>
				<td class="">₱<?php echo number_format($year4,2); ?></td>
				<td class="">₱<?php echo number_format($year5,2); ?></td>
			</tr>
			<?php
			} 
			//get total goods sold
			$gettgs = mysqli_query($db, "SELECT total_cog FROM `model_inputs_totals`");
			$counttgs = mysqli_num_rows($gettgs);
			if($counttgs > 0){
				$gettgs = mysqli_fetch_assoc($gettgs);
				$tgs = $gettgs['total_cog'];
			} else {
				$tgs = "0";
			}
			//end tgs
			//get inflaation rate
			$getinflation = mysqli_query($db, "SELECT * FROM profits_loss_expense_increase");
			$countgetinflation = mysqli_num_rows($getinflation);
			if($countgetinflation > 0){
				$retrieve = mysqli_fetch_assoc($getinflation);
				$tyear1 = 1 + ($retrieve['year1']/100);
				$tyear2 = 1 + ($retrieve['year2']/100);
				$tyear3 = 1 + ($retrieve['year3']/100);
				$tyear4 = 1 + ($retrieve['year4']/100);
				$tyear5 = 1 + ($retrieve['year5']/100);
				$tgsy2 = $tgs * ($tyear2);
				$tgsy3 = $tgsy2 * ($tyear3);
				$tgsy4 = $tgsy3 * ($tyear4);
				$tgsy5 = $tgsy4 * ($tyear5);
			}
		} else {
			?>
			<tr>
				<td class="">No Record Found</td>
			</tr>
			<?php
		}
		  
	  $gfy1 = $totalcostyear1 - $tgs; 
	  $gfy2 = $totalcostyear2 - $tgsy2;
	  $gfy3 = $totalcostyear3 - $tgsy3;
	  $gfy4 = $totalcostyear4 - $tgsy4;
	  $gfy5 = $totalcostyear5 - $tgsy5;
	  
		?>
			
		</tbody>
		<tfoot>
		<tr>
		<th>Cost of good sold</th>
		<th>₱<?php echo number_format($tgs,2) ?></th>
		<th>₱<?php echo number_format($tgsy2,2) ?></th>
		<th>₱<?php echo number_format($tgsy3,2) ?></th>
		<th>₱<?php echo number_format($tgsy4,2) ?></th>
		<th>₱<?php echo number_format($tgsy5,2) ?></th>
		</tr>
		</tfoot>
		</table>
		<br>
		<h3>Gross Profits</h3>
		
		<table class="table table-condensed" style="border: 5px solid black">
			<tr align="center" style="background-color: gray; color: white;" align="center">
				
				<th>Year 1</th>
				<th>Year 2</th>
				<th>Year 3</th>
				<th>Year 4</th>
				<th>Year 5</th>
			</tr>
			<tbody>
				<tr align="center">
					<td>₱<?php echo number_format($gfy1,2) ?></td>
					<td>₱<?php echo number_format($gfy2,2) ?></td>
					<td>₱<?php echo number_format($gfy3,2) ?></td>
					<td>₱<?php echo number_format($gfy4,2) ?></td>
					<td>₱<?php echo number_format($gfy5,2) ?></td>
				</tr>
			</tbody>
		</table>
		<br>
		
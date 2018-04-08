<table class="table table-condensed">
	<thead>
		<tr style="color:white; background-color: gray; border-bottom: 10px black;">
			<th>Non-Operational Income</th>
			<th>Year 1</th>
			<th>Year 2</th>
			<th>Year 3</th>
			<th>Year 4</th>
			<th>Year 5</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	include '../connection/dbConfig.php';
	//rental
	$rental = mysqli_query($db, "SELECT * FROM rental WHERE id = '1'");
	$countrental = mysqli_num_rows($rental);
	if($countrental > 0){
		$fetchrental = mysqli_fetch_assoc($rental);
		$rental1 = $fetchrental['year1'];
		$rental2 = $fetchrental['year2'];
		$rental3 = $fetchrental['year3'];
		$rental4 = $fetchrental['year4'];
		$rental5 = $fetchrental['year5'];
	}
	//interest income ii= Interest Income
	$ii = mysqli_query($db, "SELECT * FROM interest_income WHERE id = '1'");
	$countii = mysqli_num_rows($ii);
	if($countii > 0){
		$fetchii = mysqli_fetch_assoc($ii);
		$ii1 = $fetchii['year1'];
		$ii2 = $fetchii['year2'];
		$ii3 = $fetchii['year3'];
		$ii4 = $fetchii['year4'];
		$ii5 = $fetchii['year5'];
	}
	//sales of assets
	$sos = mysqli_query($db, "SELECT * FROM loss_on_sales_assets WHERE id = '1'");
	$countsos = mysqli_num_rows($sos);
	if($countsos > 0){
		$fetchsos = mysqli_fetch_assoc($sos);
		$sos1 = $fetchsos['year1'];
		$sos2 = $fetchsos['year2'];
		$sos3 = $fetchsos['year3'];
		$sos4 = $fetchsos['year4'];
		$sos5 = $fetchsos['year5'];
	}
	//other income
	$oi = mysqli_query($db, "SELECT * FROM other_income WHERE id = '1'");
	$countoi = mysqli_num_rows($oi);
	if($countoi > 0){
		$fetchoi = mysqli_fetch_assoc($oi);
		$oi1 = $fetchoi['year1'];
		$oi2 = $fetchoi['year2'];
		$oi3 = $fetchoi['year3'];
		$oi4 = $fetchoi['year4'];
		$oi5 = $fetchoi['year5'];
	}
	
	?>
		<tr>
			<td>Rental</td>
			<td><?php echo round($rental1,2);?></td>
			<td><?php echo round($rental2,2);?></td>
			<td><?php echo round($rental3,2);?></td>
			<td><?php echo round($rental4,2);?></td>
			<td><?php echo round($rental5,2);?></td>
		</tr>
		<tr>
			<td>Interest Income</td>
			<td><?php echo round($ii1,2);?></td>
			<td><?php echo round($ii2,2);?></td>
			<td><?php echo round($ii3,2);?></td>
			<td><?php echo round($ii4,2);?></td>
			<td><?php echo round($ii5,2);?></td>
		</tr>
		<tr>
			<td>Loss(gain) on sale of assets</td>
			<td><?php echo round($sos1,2); ?></td>
			<td><?php echo round($sos2,2); ?></td>
			<td><?php echo round($sos3,2); ?></td>
			<td><?php echo round($sos4,2); ?></td>
			<td><?php echo round($sos5,2); ?></td>
		</tr>
		<tr>
			<td>Other Income</td>
			<td><?php echo round($oi1,2); ?></td>
			<td><?php echo round($oi2,2); ?></td>
			<td><?php echo round($oi3,2); ?></td>
			<td><?php echo round($oi4,2); ?></td>
			<td><?php echo round($oi5,2); ?></td>
		</tr>
		
	</tbody>
	<tfoot>
	<?php
	//get total
	$total1 = $rental1 + $ii1 + $sos1 + $oi1;
	$total2 = $rental2 + $ii2 + $sos2 + $oi2;
	$total3 = $rental3 + $ii3 + $sos3 + $oi3;
	$total4 = $rental4 + $ii4 + $sos4 + $oi4;
	$total5 = $rental5 + $ii5 + $sos5 + $oi5;
	?>
		<tr>
			<th>Total Non-Operational Income</th>
			<th><?php echo round($total1,2) ?></th>
			<th><?php echo round($total2,2) ?></th>
			<th><?php echo round($total3,2) ?></th>
			<th><?php echo round($total4,2) ?></th>
			<th><?php echo round($total5,2) ?></th>
		</tr>
	</tfoot>
</table>
<br>
<h3>Total Income</h3>
<table class="table table-condensed" style="border: 5px solid blue">
	<?php
		$income1 = $total1 + $gfy1;
		$income2 = $total2 + $gfy2;
		$income3 = $total3 + $gfy3;
		$income4 = $total4 + $gfy4;
		$income5 = $total5 + $gfy5;
	?>
	<thead>
		<tr style="background-color: gray; color: white;" align="center">
			<th>Year 1</th>
			<th>Year 2</th>
			<th>Year 3</th>
			<th>Year 4</th>
			<th>Year 5</th>
		</tr>
		<tr align="center">
			
			<th><?php echo round($income1,2); ?></th>
			<th><?php echo round($income2,2); ?></th>
			<th><?php echo round($income3,2); ?></th>
			<th><?php echo round($income4,2); ?></th>
			<th><?php echo round($income5,2); ?></th>
		</tr>
		
	</thead>
</table>
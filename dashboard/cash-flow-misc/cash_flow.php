<!--test-->
		<?php 
		include '../connection/dbConfig.php';
		//commulative
		$commulativey1 = $totalfinacningactivities1 + $totalinvestyear1 + $operatingactivities_ty1;
		$commulativey2 = $totalfinacningactivities2 + $totalinvestyear2 + $operatingactivities_ty2;
		$commulativey3 = $totalfinacningactivities3 + $totalinvestyear3 + $operatingactivities_ty3;
		$commulativey4 = $totalfinacningactivities4 + $totalinvestyear4 + $operatingactivities_ty4;
		$commulativey5 = $totalfinacningactivities5 + $totalinvestyear5 + $operatingactivities_ty5;
		$totalcommulative = $commulativey1 +  $commulativey2 +  $commulativey3 +  $commulativey4 +  $commulativey5;
		if($commulativey1 < 0){
			$commulativecolor1 = "red";
		}
		if($commulativey2 < 0){
			$commulativecolor2 = "red";
		}
		if($commulativey3 < 0){
			$commulativecolor3 = "red";
		}
		if($commulativey4 < 0){
			$commulativecolor4 = "red";
		}
		if($commulativey5 < 0){
			$commulativecolor5 = "red";
		}
		if($totalcommulative < 0){
			$commulativecolor6 = "red";
		}
		//beginningcashbalance
		$bcashbalanceq = mysqli_query($db, "SELECT * FROM current_assets WHERE id = '1'");
		$cbcashbalanceq = mysqli_num_rows($bcashbalanceq);
		if($cbcashbalanceq > 0){
			$row = mysqli_fetch_assoc($bcashbalanceq);
			$beginning = $row['balance'];
		}
		$bcashbalance1 = $beginning; 
		$bcashbalance2 = $bcashbalance1 + $commulativey1;
		$bcashbalance3 = $bcashbalance2 + $commulativey2;
		$bcashbalance4 = $bcashbalance3 + $commulativey3;
		$bcashbalance5 = $bcashbalance4 + $commulativey4;
		
		//ending cash balance 
		$ecashbalance1 = $bcashbalance2;
		$ecashbalance2 = $bcashbalance3;
		$ecashbalance3 = $bcashbalance4;
		$ecashbalance4 = $bcashbalance5;
		$ecashbalance5 = $bcashbalance5 + $commulativey5;
		?>
		
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th></th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				<th>Total</th>
				
			</tr>
		</thead>
		<tbody>
			
			
			<tr style="background-color: gray">
				<td ><strong>Cumulative cash flow</strong></td>
				<td class="" align="" style="color: <?php echo $commulativecolor1 ?> ;">₱<?php echo number_format($commulativey1,2) ?></td>
				<td class="" align="" style="color: <?php echo $commulativecolor2 ?> ;">₱<?php echo number_format($commulativey2,2) ?></td>
				<td class="" align="" style="color: <?php echo $commulativecolor3 ?> ;">₱<?php echo number_format($commulativey3,2) ?></td>
				<td class="" align="" style="color: <?php echo $commulativecolor4 ?> ;">₱<?php echo number_format($commulativey4,2) ?></td>
				<td class="" align="" style="color: <?php echo $commulativecolor5 ?> ;">₱<?php echo number_format($commulativey5,2) ?></td>
				<td style="color: <?php echo $commulativecolor6 ?> ;">₱<?php echo number_format($totalcommulative,2) ?></td>
			</tr>
			<br>
			<tr style="background-color: gray">
				<td ><strong>Beginning cash balance</strong></td>
				<td class="" align="">₱<?php echo number_format($bcashbalance1,2) ?></td>
				<td class="" align="">₱<?php echo number_format($bcashbalance2,2) ?></td>
				<td class="" align="">₱<?php echo number_format($bcashbalance3,2) ?></td>
				<td class="" align="">₱<?php echo number_format($bcashbalance4,2) ?></td>
				<td class="" align="">₱<?php echo number_format($bcashbalance5,2) ?></td>
				<td></td>
			</tr>
			<tr style="background-color: gray">
				<td ><strong>Ending cash balance</strong></td>
				<td class="" align="">₱<?php echo number_format($ecashbalance1,2) ?></td>
				<td class="" align="">₱<?php echo number_format($ecashbalance2,2) ?></td>
				<td class="" align="">₱<?php echo number_format($ecashbalance3,2) ?></td>
				<td class="" align="">₱<?php echo number_format($ecashbalance4,2) ?></td>
				<td class="" align="">₱<?php echo number_format($ecashbalance5,2) ?></td>
				<td></td>
			</tr>
			<?php
			$ecb =  mysqli_query($db, "UPDATE ending_cash_balance SET year1 = '$ecashbalance1', year2 = '$ecashbalance2', year3 = '$ecashbalance3', year4 = '$ecashbalance4', year5 = '$ecashbalance5'  WHERE id = '1'");
			
			?>
			
			
			
		</tbody>
		<tfoot>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		</tfoot>
		</table>
		
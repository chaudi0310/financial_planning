<!--test-->
		<?php 
	include '../connection/dbConfig.php';
	$acqsql = mysqli_query($db, "SELECT * FROM cash_flow_investing_activities WHERE id = '1'");
	$countacqsql = mysqli_num_rows($acqsql);
	if($countacqsql > 0){
		$row = mysqli_fetch_assoc($acqsql);
		$acqyear1 = $row['year1'];
		$acqyear2 = $row['year2'];
		$acqyear3 = $row['year3'];
		$acqyear4 = $row['year4'];
		$acqyear5 = $row['year5'];
		$totalacq = $acqyear1 + $acqyear2 + $acqyear3 + $acqyear4 + $acqyear5;
	}
	$fixedasset = mysqli_query($db, "SELECT * FROM loss_on_sales_assets WHERE id = '1'");
	$countfixedasset = mysqli_num_rows($fixedasset);
	if($countfixedasset > 0){
		$row = mysqli_fetch_assoc($fixedasset);
		$fixedassetyear1 = 0 - $row['year1'];
		$fixedassetyear2 = 0 - $row['year2'];
		$fixedassetyear3 = 0 - $row['year3'];
		$fixedassetyear4 = 0 - $row['year4'];
		$fixedassetyear5 = 0 - $row['year5'];
		$totalfixedasset = 0 - $fixedassetyear1 + $fixedassetyear2 + $fixedassetyear3 + $fixedassetyear4 + $fixedassetyear5;
		if($fixedassetyear3 < 0){
			$color3 = 'red';
		}
		if($fixedassetyear1 < 0){
			$color1 = 'red';
		}
		if($fixedassetyear2 < 0){
			$color2 = 'red';
		}
		if($fixedassetyear4 < 0){
			$color4 = 'red';
		}
		if($fixedassetyear5 < 0){
			$color5 = 'red';
		}
		if($totalfixedasset < 0){
			$color6 = 'red';
		}
	}
	//investing cash flow
	$othersql = mysqli_query($db, "SELECT * FROM cash_flow_investing_activities WHERE id = '3'");
	$countothersql = mysqli_num_rows($othersql);
	if($countothersql > 0){
		$row = mysqli_fetch_assoc($othersql);
		$otherinvestyear1 = $row['year1'];
		$otherinvestyear2 = $row['year2'];
		$otherinvestyear3 = $row['year3'];
		$otherinvestyear4 = $row['year4'];
		$otherinvestyear5 = $row['year5'];
		$totalotherinvest = $otherinvestyear1 + $otherinvestyear2 + $otherinvestyear3 + $otherinvestyear4 + $otherinvestyear5;
	}
	$totalinvestyear1 = $acqyear1 + $fixedassetyear1 + $otherinvestyear1;
	$totalinvestyear2 = $acqyear2 + $fixedassetyear2 + $otherinvestyear2;
	$totalinvestyear3 = $acqyear3 + $fixedassetyear3 + $otherinvestyear3;
	$totalinvestyear4 = $acqyear4 + $fixedassetyear4 + $otherinvestyear4;
	$totalinvestyear5 = $acqyear5 + $fixedassetyear5 + $otherinvestyear5;
	$totalinvesttotals = $totalacq + $totalfixedasset + $totalotherinvest;
	if($totalinvestyear1 < 0){
		$colortotalinvest1 = 'red';
	}
	if($totalinvestyear2 < 0){
		$colortotalinvest2 = 'red';
	}
	if($totalinvestyear3 < 0){
		$colortotalinvest3 = 'red';
	}
	if($totalinvestyear4 < 0){
		$colortotalinvest4 = 'red';
	}
	if($totalinvestyear5 < 0){
		$colortotalinvest5 = 'red';
	}
	if($totalinvesttotals < 0){
		$colortotalinvesttotals = 'red';
	}
		?>
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Investing activities <?php if(!isset($_SESSION['readonly'])){ ?><a href="cash-flow-misc/cash_flow_investing_activities_edit.php" class="btn btn-warning"><i class="fa fa-pencil"></i></a><?php } ?></th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				<th>Total</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="" >Acquisition of business</td>
				<td class="" align="" >₱<?php echo number_format($acqyear1,2) ?></td>
				<td class="" align="">₱<?php echo number_format($acqyear2,2) ?></td>
				<td class="" align="">₱<?php echo number_format($acqyear3,2) ?></td>
				<td class="" align="">₱<?php echo number_format($acqyear4,2) ?></td>
				<td class="" align="">₱<?php echo number_format($acqyear5,2) ?></td>
				<td class="" align="">₱<?php echo number_format($totalacq,2) ?></td>
			</tr>
			<tr>
				<td class="" >Sale of fixed assets</td>
				<td class="" align="" style="color:<?php echo $color1 ?>;">₱<?php echo number_format($fixedassetyear1,2) ?></td>
				<td class="" align="" style="color:<?php echo $color2 ?>;">₱<?php echo number_format($fixedassetyear2,2) ?></td>
				<td class="" align="" style="color:<?php echo $color3 ?>;">₱<?php echo number_format($fixedassetyear3,2) ?></td>
				<td class="" align="" style="color:<?php echo $color4 ?>;">₱<?php echo number_format($fixedassetyear4,2) ?></td>
				<td class="" align="" style="color:<?php echo $color5 ?>;">₱<?php echo number_format($fixedassetyear5,2) ?></td>
				<td class="" align="" style="color:<?php echo $color6 ?>;">₱<?php echo number_format($totalfixedasset,2) ?></td>
			</tr>
			<tr>
				<td class="" >Other investing cash flow items</td>
				<td class="" align="">₱<?php echo number_format($otherinvestyear1,2) ?></td>
				<td class="" align="">₱<?php echo number_format($otherinvestyear2,2) ?></td>
				<td class="" align="">₱<?php echo number_format($otherinvestyear3,2) ?></td>
				<td class="" align="">₱<?php echo number_format($otherinvestyear4,2) ?></td>
				<td class="" align="">₱<?php echo number_format($otherinvestyear5,2) ?></td>
				<td class="" align="">₱<?php echo number_format($totalotherinvest,2) ?></td>
			</tr>
			
			<tr style="background-color: gray">
				<td ><strong>Total investing activities</strong></td>
				<td class="" align="" style="color: <?php echo $colortotalinvest1 ?>">₱<?php echo number_format($totalinvestyear1,2) ?></td>
				<td class="" align="" style="color: <?php echo $colortotalinvest2 ?>">₱<?php echo number_format($totalinvestyear2,2) ?></td>
				<td class="" align="" style="color: <?php echo $colortotalinvest3 ?>">₱<?php echo number_format($totalinvestyear3,2) ?></td>
				<td class="" align="" style="color: <?php echo $colortotalinvest4 ?>">₱<?php echo number_format($totalinvestyear4,2) ?></td>
				<td class="" align="" style="color: <?php echo $colortotalinvest5 ?>">₱<?php echo number_format($totalinvestyear5,2) ?></td>
				<td class="" align="" style="color: <?php echo $colortotalinvesttotals ?>">₱<?php echo number_format($totalinvesttotals,2) ?></td>
			</tr>
			
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
		
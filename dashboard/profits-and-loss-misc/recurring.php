<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$retrieve = mysqli_query($db, "SELECT * FROM recurring_expenses WHERE id = '1'");
			$count = mysqli_num_rows($retrieve);
			if($count > 0){
				$row = mysqli_fetch_assoc($retrieve);
				$ueid = $row['id'];
				$ue1 = $row['year1'];
				$ue2 = $row['year2'];
				$ue3 = $row['year3'];
				$ue4 = $row['year4'];
				$ue5 = $row['year5'];
			}
			$retrieve2 = mysqli_query($db, "SELECT * FROM recurring_expenses WHERE id = '2'");
			$count2 = mysqli_num_rows($retrieve2);
			if($count2 > 0){
				$row = mysqli_fetch_assoc($retrieve2);
				$oeid = $row['id'];
				$oe1 = $row['year1'];
				$oe2 = $row['year2'];
				$oe3 = $row['year3'];
				$oe4 = $row['year4'];
				$oe5 = $row['year5'];
			}
			
		?>
	<!--stop test -->
	
	
		<h2></h2>
		<table class="table table-condensed">
		<thead>
			<tr style="color:white; background-color: gray; border-top: 5px solid #0099cc;">
				<th>Non-recurring Expense</th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class=""><button class="btn btn-warning open-unex" data-y1="<?php echo $ue1 ;?>" data-y2="<?php echo $ue2 ;?>" data-y3="<?php echo $ue3 ;?>" data-y4="<?php echo $ue4 ;?>" data-y5="<?php echo $ue5 ;?>" data-id="<?php echo $ueid ;?>" data-toggle="modal" data-target="#updateUnexpected"><i class="fa fa-pencil"></i></button> Unexpected Expenses</td>
				<td class=""><?php echo $ue1 ?></td>
				<td class=""><?php echo $ue2 ?></td>
				<td class=""><?php echo $ue3 ?></td>
				<td class=""><?php echo $ue4 ?></td>
				<td class=""><?php echo $ue5 ?></td>
			</tr>
			<tr>
				<td class=""><button class="btn btn-warning open-other" data-yy1="<?php echo $oe1 ;?>" data-yy2="<?php echo $oe2 ;?>" data-yy3="<?php echo $oe3 ;?>" data-yy4="<?php echo $oe4 ;?>" data-yy5="<?php echo $oe5 ;?>" data-id="<?php echo $oeid ;?>" data-toggle="modal" data-target="#updateOther"><i class="fa fa-pencil"></i></button> Other Expenses</td>
				<td class=""><?php echo $oe1 ?></td>
				<td class=""><?php echo $oe2 ?></td>
				<td class=""><?php echo $oe3 ?></td>
				<td class=""><?php echo $oe4 ?></td>
				<td class=""><?php echo $oe5 ?></td>
			</tr>
			<?php include 'modal/non-recurring.php'; 
			$totalnre = mysqli_query($db, "SELECT * FROM total_non_rec_ex WHERE id = '1'");
			$totalcount = mysqli_num_rows($totalnre);
			if($totalcount > 0){
				$row = mysqli_fetch_assoc($totalnre);
				$ty1 = $row['y1'];
				$ty2 = $row['y2'];
				$ty3 = $row['y3'];
				$ty4 = $row['y4'];
				$ty5 = $row['y5'];
			}
			
			?>
			
			
		</tbody>
		<tfoot>
		
		<th>Total Non-Recurring Expenses</th>
		<th><?php echo $ty1;?></th>
		<th><?php echo $ty2; ?></th>
		<th><?php echo $ty3 ;?></th>
		<th><?php echo $ty4; ?></th>
		<th><?php echo $ty5 ;?></th>
		</tfoot>
		</table>
		
		<h3>Total Expenses</h3>
	<table class="table table-condensed" style="border: 5px solid blue">
	<?php
		$expense1 = $ty1 + $opexp1;
		$expense2 = $ty2 + $opexp2;
		$expense3 = $ty3 + $opexp3;
		$expense4 = $ty4 + $opexp4;
		$expense5 = $ty5 + $opexp5;
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
			
			<th><?php echo round($expense1,2); ?></th>
			<th><?php echo round($expense2,2); ?></th>
			<th><?php echo round($expense3,2); ?></th>
			<th><?php echo round($expense4,2); ?></th>
			<th><?php echo round($expense5,2); ?></th>
		</tr>
		
	</thead>
</table>

<table class="table table-condensed">
		<thead>
			<tr style="color:white; background-color: gray; border-top: 5px solid #0099cc;">
				<th>Taxes</th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<?php 
			$getanualtax = mysqli_query($db, "SELECT * FROM tax WHERE id = '1'");
			$cgetanualtax = mysqli_num_rows($getanualtax);
			if($cgetanualtax > 0){
			$fetchtax = mysqli_fetch_assoc($getanualtax);
			$taxrate = $fetchtax['anual_tax_rate']/100;
			$it1 = ($income1 - $expense1) * $taxrate;
			$it2 = ($income2 - $expense2) * $taxrate;
			$it3 = ($income3 - $expense3) * $taxrate;
			$it4 = ($income4 - $expense4) * $taxrate;
			$it5 = ($income5 - $expense5) * $taxrate;
			}			
			?>
		<tbody>
			<tr>
				<td class=""><button type="button" class="btn btn-warning disabled"><i class="fa fa-pencil"></i></button> Income Tax</td>
				<td class=""><?php echo round($it1,2); ?></td>
				<td class=""><?php echo round($it2,2); ?></td>
				<td class=""><?php echo round($it3,2); ?></td>
				<td class=""><?php echo round($it4,2); ?></td>
				<td class=""><?php echo round($it5,2); ?></td>
			</tr>
			<!-- get other tax -->
			<?php
			$getotax = mysqli_query($db, "SELECT * FROM pl_othertax WHERE id = '1'");
			$cgetotax = mysqli_num_rows($getotax);
			if($cgetotax > 0){
				$get = mysqli_fetch_assoc($getotax);
				$otyear1 = $get['y1'];
				$otyear2 = $get['y2'];
				$otyear3 = $get['y3'];
				$otyear4 = $get['y4'];
				$otyear5 = $get['y5'];
				$totaltax1 = $it1 + $otyear1;
				$totaltax2 = $it2 + $otyear2;
				$totaltax3 = $it3 + $otyear3;
				$totaltax4 = $it4 + $otyear4;
				$totaltax5 = $it5 + $otyear5;
			}
			?>
			<tr>
				<td class=""><button class="btn btn-warning open-ot"  data-toggle="modal" data-target="#updateOtax"><i class="fa fa-pencil"></i></button> Other Taxes</td>
				<td class=""><?php echo $otyear1; ?></td>
				<td class=""><?php echo $otyear2; ?></td>
				<td class=""><?php echo $otyear3; ?></td>
				<td class=""><?php echo $otyear4; ?></td>
				<td class=""><?php echo $otyear5; ?></td>
			</tr>
			
			
			
			
		</tbody>
		<tfoot>
		
		<th>Total Taxes</th>
		<th><?php echo round($totaltax1,2) ?></th>
		<th><?php echo round($totaltax2,2) ?></th>
		<th><?php echo round($totaltax3,2) ?></th>
		<th><?php echo round($totaltax4,2) ?></th>
		<th><?php echo round($totaltax5,2) ?></th>
		</tfoot>
		</table>
		<br>
		<br>

		
		<h3>Net Profit</h3>
	<table class="table table-condensed" style="border: 5px solid blue">
	<?php
		$netprof1 = $income1 - $expense1 - $totaltax1;
		$netprof2 = $income2 - $expense2 - $totaltax2;
		$netprof3 = $income3 - $expense3 - $totaltax3;
		$netprof4 = $income4 - $expense4 - $totaltax4;
		$netprof5 = $income5 - $expense5 - $totaltax5;
		$update_retained = mysqli_query($db, "UPDATE retained_earnings SET year1 = '$netprof1', year2 = '$netprof2', year3 = '$netprof3', year4 = '$netprof4', year5 = '$netprof5' WHERE id = '1'");
		
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
			
			<th><?php echo round($netprof1,2); ?></th>
			<th><?php echo round($netprof2,2); ?></th>
			<th><?php echo round($netprof3,2); ?></th>
			<th><?php echo round($netprof4,2); ?></th>
			<th><?php echo round($netprof5,2); ?></th>
		</tr>
		
	</thead>
</table>

		
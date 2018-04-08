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
			//getting total of other expenses
			$result = mysqli_query($db, "SELECT COUNT(*) as total_num_exp from other_expenses");
			$fetchresult = mysqli_fetch_assoc($result);
			$countotherexpenses = $fetchresult['total_num_exp'];
			if($countotherexpenses > 0){
			$otherexpensey1 = mysqli_query($db, "SELECT SUM(year1) as total_sum1 FROM other_expenses");
			$gety1 = mysqli_fetch_assoc($otherexpensey1);
			$oe1 = $gety1['total_sum1'];
			
			$otherexpensey2 = mysqli_query($db, "SELECT SUM(year2) as total_sum2 FROM other_expenses");
			$gety2 = mysqli_fetch_assoc($otherexpensey2);
			$oe2 = $gety2['total_sum2'];
			
			$otherexpensey3 = mysqli_query($db, "SELECT SUM(year2) as total_sum3 FROM other_expenses");
			$gety3 = mysqli_fetch_assoc($otherexpensey3);
			$oe3 = $gety3['total_sum3'];
			
			$otherexpensey24 = mysqli_query($db, "SELECT SUM(year2) as total_sum4 FROM other_expenses");
			$gety4 = mysqli_fetch_assoc($otherexpensey24);
			$oe4 = $gety4['total_sum4'];
			
			$otherexpensey5 = mysqli_query($db, "SELECT SUM(year2) as total_sum5 FROM other_expenses");
			$gety5 = mysqli_fetch_assoc($otherexpensey5);
			$oe5 = $gety5['total_sum5'];
			
			} else {
				$oe1 = '0';
				$oe2 = '0';
				$oe3 = '0';
				$oe4 = '0';
				$oe5 = '0';
			}
			
		?>
	<!--stop test -->
	
	
		<h2></h2>
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
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
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button class="btn btn-warning open-unex" data-y1="<?php echo $ue1 ;?>" data-y2="<?php echo $ue2 ;?>" data-y3="<?php echo $ue3 ;?>" data-y4="<?php echo $ue4 ;?>" data-y5="<?php echo $ue5 ;?>" data-id="<?php echo $ueid ;?>" data-toggle="modal" data-target="#updateUnexpected"><i class="fa fa-pencil"></i></button><?php } ?> Unexpected Expenses</td>
				<td class="">₱<?php echo number_format($ue1,2) ?></td>
				<td class="">₱<?php echo number_format($ue2,2) ?></td>
				<td class="">₱<?php echo number_format($ue3,2) ?></td>
				<td class="">₱<?php echo number_format($ue4,2) ?></td>
				<td class="">₱<?php echo number_format($ue5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button class="btn btn-success" type="button" data-toggle="modal" data-target="#otherexpModal" title="Add"><i class="fa fa-plus"></i></button> <a class="btn btn-success" href="viewOtherExpense.php" title="View"><i class="fa fa-eye"></i></a><?php } ?>  Other Expenses</td>
				<td class="">₱<?php echo number_format($oe1,2) ?></td>
				<td class="">₱<?php echo number_format($oe2,2) ?></td>
				<td class="">₱<?php echo number_format($oe3,2) ?></td>
				<td class="">₱<?php echo number_format($oe4,2) ?></td>
				<td class="">₱<?php echo number_format($oe5,2) ?></td>
			</tr>
			<?php include 'modal/non-recurring.php';
					include 'modal/otherexpense.php'; 
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
		<th>₱<?php echo number_format($ty1,2);?></th>
		<th>₱<?php echo number_format($ty2,2); ?></th>
		<th>₱<?php echo number_format($ty3,2) ;?></th>
		<th>₱<?php echo number_format($ty4,2); ?></th>
		<th>₱<?php echo number_format($ty5,2) ;?></th>
		</tfoot>
		</table>
		
		<h3>Total Expenses</h3>
	<table class="table table-condensed" style="border: 5px solid black">
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
			
			<th>₱<?php echo number_format($expense1,2); ?></th>
			<th>₱<?php echo number_format($expense2,2); ?></th>
			<th>₱<?php echo number_format($expense3,2); ?></th>
			<th>₱<?php echo number_format($expense4,2); ?></th>
			<th>₱<?php echo number_format($expense5,2); ?></th>
		</tr>
		
	</thead>
</table>

<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
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
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning disabled"><i class="fa fa-pencil"></i></button><?php } ?> Income Tax</td>
				<td class="">₱<?php echo number_format($it1,2); ?></td>
				<td class="">₱<?php echo number_format($it2,2); ?></td>
				<td class="">₱<?php echo number_format($it3,2); ?></td>
				<td class="">₱<?php echo number_format($it4,2); ?></td>
				<td class="">₱<?php echo number_format($it5,2); ?></td>
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
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button class="btn btn-warning open-ot"  data-toggle="modal" data-target="#updateOtax"><i class="fa fa-pencil"></i></button><?php } ?> Other Taxes</td>
				<td class="">₱<?php echo number_format($otyear1,2); ?></td>
				<td class="">₱<?php echo number_format($otyear2,2); ?></td>
				<td class="">₱<?php echo number_format($otyear3,2); ?></td>
				<td class="">₱<?php echo number_format($otyear4,2); ?></td>
				<td class="">₱<?php echo number_format($otyear5,2); ?></td>
			</tr>
			
			
			
			
		</tbody>
		<tfoot>
		
		<th>Total Taxes</th>
		<th>₱<?php echo number_format($totaltax1,2) ?></th>
		<th>₱<?php echo number_format($totaltax2,2) ?></th>
		<th>₱<?php echo number_format($totaltax3,2) ?></th>
		<th>₱<?php echo number_format($totaltax4,2) ?></th>
		<th>₱<?php echo number_format($totaltax5,2) ?></th>
		</tfoot>
		</table>
		<br>
		<br>

		
		<h3>Net Profit</h3>
	<table class="table table-condensed" style="border: 5px solid black">
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
			
			<th>₱<?php echo number_format($netprof1,2); ?></th>
			<th>₱<?php echo number_format($netprof2,2); ?></th>
			<th>₱<?php echo number_format($netprof3,2); ?></th>
			<th>₱<?php echo number_format($netprof4,2); ?></th>
			<th>₱<?php echo number_format($netprof5,2); ?></th>
		</tr>
		
	</thead>
</table>

		
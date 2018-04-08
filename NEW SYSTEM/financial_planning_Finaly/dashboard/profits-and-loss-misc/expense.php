<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			//Sales and Marketing
			$sm= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 1");
			$csm = mysqli_num_rows($sm);
			if($csm > 0){
				$fetch = mysqli_fetch_assoc($sm);
				$smid = $fetch['id'];
				$sm1 = $fetch['year1'];
				$sm2 = $fetch['year2'];
				$sm3 = $fetch['year3'];
				$sm4 = $fetch['year4'];
				$sm5 = $fetch['year5'];
			}
			//Depreciation
			$dep= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 2");
			$cdep = mysqli_num_rows($dep);
			if($cdep > 0){
				$fetch = mysqli_fetch_assoc($dep);
				$depid = $fetch['id'];
				$dep1 = $fetch['year1'];
				$dep2 = $fetch['year2'];
				$dep3 = $fetch['year3'];
				$dep4 = $fetch['year4'];
				$dep5 = $fetch['year5'];
			}
			//Insurance
			$ins= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 3");
			$cins = mysqli_num_rows($ins);
			if($csm > 0){
				$fetch = mysqli_fetch_assoc($ins);
				$insid = $fetch['id'];
				$ins1 = $fetch['year1'];
				$ins2 = $fetch['year2'];
				$ins3 = $fetch['year3'];
				$ins4 = $fetch['year4'];
				$ins5 = $fetch['year5'];
			}
			//Payroll and Tax
			$pt= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 4");
			$cpt = mysqli_num_rows($pt);
			if($cpt > 0){
				$fetch = mysqli_fetch_assoc($pt);
				$ptid = $fetch['id'];
				$pt1 = $fetch['year1'];
				$pt2 = $fetch['year2'];
				$pt3 = $fetch['year3'];
				$pt4 = $fetch['year4'];
				$pt5 = $fetch['year5'];
			}
			//Property Taxes
			$prop= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 5");
			$cprop = mysqli_num_rows($prop);
			if($cprop > 0){
				$fetch = mysqli_fetch_assoc($prop);
				$propid = $fetch['id'];
				$prop1 = $fetch['year1'];
				$prop2 = $fetch['year2'];
				$prop3 = $fetch['year3'];
				$prop4 = $fetch['year4'];
				$prop5 = $fetch['year5'];
			}
			//Maintance
			$main= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 6");
			$cmain = mysqli_num_rows($main);
			if($cmain > 0){
				$fetch = mysqli_fetch_assoc($main);
				$main1 = $fetch['year1'];
				$main2 = $fetch['year2'];
				$main3 = $fetch['year3'];
				$main4 = $fetch['year4'];
				$main5 = $fetch['year5'];
			}
			//utilities
			$ut= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 7");
			$cut = mysqli_num_rows($ut);
			if($cut > 0){
				$fetch = mysqli_fetch_assoc($ut);
				$utid = $fetch['id'];
				$ut1 = $fetch['year1'];
				$ut2 = $fetch['year2'];
				$ut3 = $fetch['year3'];
				$ut4 = $fetch['year4'];
				$ut5 = $fetch['year5'];
			}
			//administrative
			$ad= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 8");
			$cad = mysqli_num_rows($ad);
			if($cad > 0){
				$fetch = mysqli_fetch_assoc($ad);
				$adid = $fetch['id'];
				$ad1 = $fetch['year1'];
				$ad2 = $fetch['year2'];
				$ad3 = $fetch['year3'];
				$ad4 = $fetch['year4'];
				$ad5 = $fetch['year5'];
			}
			//Interest Expense
			$exp= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = 9");
			$cexp = mysqli_num_rows($exp);
			if($cexp > 0){
				$fetch = mysqli_fetch_assoc($exp);
				$exp1 = $fetch['year1'];
				$exp2 = $fetch['year2'];
				$exp3 = $fetch['year3'];
				$exp4 = $fetch['year4'];
				$exp5 = $fetch['year5'];
			}
			//Other
			$oth= mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = '10'");
			$coth = mysqli_num_rows($oth);
			if($csm > 0){
				$fetch = mysqli_fetch_assoc($oth);
				$othid = $fetch['id'];
				$oth1 = $fetch['year1'];
				$oth2 = $fetch['year2'];
				$oth3 = $fetch['year3'];
				$oth4 = $fetch['year4'];
				$oth5 = $fetch['year5'];
			}
			
		?>
	<!--stop test -->
	
	
		<h2>EXPENSE</h2>
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Operating Expense</th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning update-sm" data-id=<?php echo $smid;?> data-sm="<?php echo $sm1; ?>" data-toggle="modal" data-target="#updateSM"><i class="fa fa-pencil"></i></button><?php } ?> Sales and Marketing</td>
				<td class="">₱<?php echo number_format($sm1,2) ?></td>
				<td class="">₱<?php echo number_format($sm2,2) ?></td>
				<td class="">₱<?php echo number_format($sm3,2) ?></td>
				<td class="">₱<?php echo number_format($sm4,2) ?></td>
				<td class="">₱<?php echo number_format($sm5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning disabled"><i class="fa fa-pencil"></i></button><?php } ?> Depreciation</td>
				<td class="">₱<?php echo number_format($dep1,2) ?></td>
				<td class="">₱<?php echo number_format($dep2,2) ?></td>
				<td class="">₱<?php echo number_format($dep3,2) ?></td>
				<td class="">₱<?php echo number_format($dep4,2) ?></td>
				<td class="">₱<?php echo number_format($dep5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning update-ins" data-id=<?php echo $insid;?> data-ins="<?php echo $ins1; ?>" data-toggle="modal" data-target="#updateINS"><i class="fa fa-pencil"></i></button><?php } ?> Insurance</td>
				<td class="">₱<?php echo number_format($ins1,2) ?></td>
				<td class="">₱<?php echo number_format($ins2,2) ?></td>
				<td class="">₱<?php echo number_format($ins3,2) ?></td>
				<td class="">₱<?php echo number_format($ins4,2) ?></td>
				<td class="">₱<?php echo number_format($ins5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning update-pt" data-id=<?php echo $ptid;?> data-pt="<?php echo $pt1; ?>" data-toggle="modal" data-target="#updatePT"><i class="fa fa-pencil"></i></button><?php } ?> Payroll and Tax</td>
				<td class="">₱<?php echo number_format($pt1,2) ?></td>
				<td class="">₱<?php echo number_format($pt2,2) ?></td>
				<td class="">₱<?php echo number_format($pt3,2) ?></td>
				<td class="">₱<?php echo number_format($pt4,2) ?></td>
				<td class="">₱<?php echo number_format($pt5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning update-prop" data-id=<?php echo $propid;?> data-prop="<?php echo $prop1; ?>" data-toggle="modal" data-target="#updatePROP"><i class="fa fa-pencil"></i></button><?php } ?> Property Taxes</td>
				<td class="">₱<?php echo number_format($prop1,2) ?></td>
				<td class="">₱<?php echo number_format($prop2,2) ?></td>
				<td class="">₱<?php echo number_format($prop3,2) ?></td>
				<td class="">₱<?php echo number_format($prop4,2) ?></td>
				<td class="">₱<?php echo number_format($prop5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button"class="btn btn-warning disabled" ><i class="fa fa-pencil"></i></button><?php } ?> Maintenance, Repair, and Overhaul</td>
				<td class="">₱<?php echo number_format($main1,2) ?></td>
				<td class="">₱<?php echo number_format($main2,2) ?></td></td>
				<td class="">₱<?php echo number_format($main3,2) ?></td></td>
				<td class="">₱<?php echo number_format($main4,2) ?></td></td>
				<td class="">₱<?php echo number_format($main5,2) ?></td></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning update-ut" data-id=<?php echo $utid;?> data-ut="<?php echo $ut1; ?>" data-toggle="modal" data-target="#updateUT"><i class="fa fa-pencil"></i></button><?php } ?> Utilities</td>
				<td class="">₱<?php echo number_format($ut1,2) ?></td></td>
				<td class="">₱<?php echo number_format($ut2,2) ?></td>
				<td class="">₱<?php echo number_format($ut3,2) ?></td>
				<td class="">₱<?php echo number_format($ut4,2) ?></td>
				<td class="">₱<?php echo number_format($ut5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning update-ad" data-id=<?php echo $adid;?> data-ad="<?php echo $ad1; ?>" data-toggle="modal" data-target="#updateAD"><i class="fa fa-pencil"></i></button><?php } ?> Administrative Fees</td>
				<td class="">₱<?php echo number_format($ad1,2) ?></td>
				<td class="">₱<?php echo number_format($ad2,2) ?></td>
				<td class="">₱<?php echo number_format($ad3,2) ?></td>
				<td class="">₱<?php echo number_format($ad4,2) ?></td>
				<td class="">₱<?php echo number_format($ad5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning disabled"><i class="fa fa-pencil"></i></button><?php } ?> Interest expense on long-term debt</td>
				<td class="">₱<?php echo number_format($exp1,2) ?></td>
				<td class="">₱<?php echo number_format($exp2,2) ?></td>
				<td class="">₱<?php echo number_format($exp3,2) ?></td>
				<td class="">₱<?php echo number_format($exp4,2) ?></td>
				<td class="">₱<?php echo number_format($exp5,2) ?></td>
			</tr>
			<tr>
				<td class=""><?php if(!isset($_SESSION['readonly'])){ ?><button type="button" class="btn btn-warning update-oth" data-id=<?php echo $othid;?> data-oth="<?php echo $oth1; ?>" data-toggle="modal" data-target="#updateOTH"><i class="fa fa-pencil"></i></button><?php } ?> Other</td>
				<td class="">₱<?php echo number_format($oth1,2) ?></td>
				<td class="">₱<?php echo number_format($oth2,2) ?></td>
				<td class="">₱<?php echo number_format($oth3,2) ?></td>
				<td class="">₱<?php echo number_format($oth4,2) ?></td>
				<td class="">₱<?php echo number_format($oth5,2) ?></td>
			</tr>
			<?php include 'modal/updateExpenses.php';
			$opexp1 = $sm1+$dep1+$ins1+$pt1+$prop1+$main1+$ut1+$ad1+$exp1+$oth1;
			$opexp2 = $sm2+$dep2+$ins2+$pt2+$prop2+$main2+$ut2+$ad2+$exp2+$oth2;
			$opexp3 = $sm3+$dep3+$ins3+$pt3+$prop3+$main3+$ut3+$ad3+$exp3+$oth3;
			$opexp4 = $sm4+$dep4+$ins4+$pt4+$prop4+$main4+$ut4+$ad4+$exp4+$oth4;
			$opexp5 = $sm5+$dep5+$ins5+$pt5+$prop5+$main5+$ut5+$ad5+$exp5+$oth5; 
			?>
		
			
			
			
		</tbody>
		<tfoot>
		<th>Total Operating Expenses</th>
		<th>₱<?php echo number_format($opexp1,2)  ?></th>
		<th>₱<?php echo number_format($opexp2,2)  ?></th>
		<th>₱<?php echo number_format($opexp3,2)  ?></th>
		<th>₱<?php echo number_format($opexp4,2)  ?></th>
		<th>₱<?php echo number_format($opexp5,2) ?></th>
		</tfoot>
		</table>
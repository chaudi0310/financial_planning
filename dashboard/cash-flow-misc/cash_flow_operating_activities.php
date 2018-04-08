<!--test-->
		<?php 
		include '../connection/dbConfig.php';
		//getting the value of net income
		$getnetincome = mysqli_query($db, "SELECT * FROM retained_earnings WHERE id = '1'");
		$countgetneticome = mysqli_num_rows($getnetincome);
		if($countgetneticome > 0){
			$row = mysqli_fetch_assoc($getnetincome);
			$netincomeyear1 = $row['year1'];
			$netincomeyear2 = $row['year2'];
			$netincomeyear3 = $row['year3'];
			$netincomeyear4 = $row['year4'];
			$netincomeyear5 = $row['year5'];
			$totalnetincome = $netincomeyear1 + $netincomeyear2 + $netincomeyear3 + $netincomeyear4 + $netincomeyear5;
		}
		//getting the value of depreciation 
		$getdepreciation = mysqli_query($db, "SELECT * FROM operating_expenses WHERE id = '2'");
		$countgetdepreciation = mysqli_num_rows($getdepreciation);
		if($countgetdepreciation > 0){
			$row = mysqli_fetch_assoc($getdepreciation);
			$depreciationyear1 = $row['year1'];
			$depreciationyear2 = $row['year2'];
			$depreciationyear3 = $row['year3'];
			$depreciationyear4 = $row['year4'];
			$depreciationyear5 = $row['year5'];
			$totaldepreciation = $depreciationyear1 + $depreciationyear2 + $depreciationyear3 + $depreciationyear4 + $depreciationyear5;
		}
		//get amortization 
		$getamortization = mysqli_query($db, "SELECT * FROM cash_flow_operating_activities WHERE id = '1'");
		$countgetamortization = mysqli_num_rows($getamortization);
		if($countgetamortization > 0){
			$row = mysqli_fetch_assoc($getamortization);
			$amortizationvalue = $row['value'];
		}
		//get Other liabilities
		$getotherliabilities = mysqli_query($db, "SELECT * FROM cash_flow_operating_activities WHERE id = '2'");
		$countgetotherliabilities = mysqli_num_rows($getotherliabilities);
		if($countgetotherliabilities > 0){
			$row = mysqli_fetch_assoc($getotherliabilities);
			$otherliabilitiesvalue = $row['value'];
		}
		//getcashflow items
		$getcashflow = mysqli_query($db, "SELECT * FROM cash_flow_operating_activities WHERE id = '3'");
		$countgetcashflow = mysqli_num_rows($getcashflow);
		if($countgetcashflow > 0){
			$row = mysqli_fetch_assoc($getcashflow);
			$othercashflow = $row['value'];
		}
		$operatingactivities_ty1 = $depreciationyear1 + $netincomeyear1 + $amortizationvalue + $otherliabilitiesvalue + $othercashflow;
		$operatingactivities_ty2 = $depreciationyear2 + $netincomeyear2 + $amortizationvalue + $otherliabilitiesvalue + $othercashflow;
		$operatingactivities_ty3 = $depreciationyear3 + $netincomeyear3 + $amortizationvalue + $otherliabilitiesvalue + $othercashflow;
		$operatingactivities_ty4 = $depreciationyear4 + $netincomeyear4 + $amortizationvalue + $otherliabilitiesvalue + $othercashflow;
		$operatingactivities_ty5 = $depreciationyear5 + $netincomeyear5 + $amortizationvalue + $otherliabilitiesvalue + $othercashflow;
		$operatingactivities_ttotals = $totaldepreciation + $totalnetincome + $amortizationvalue + $otherliabilitiesvalue + $othercashflow;
		?>
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Operating activies <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></th>
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
				<td class="" >Net Income</td>
				<td class="" ><?php echo round($netincomeyear1,2) ?></td>
				<td class="" ><?php echo round($netincomeyear2,2) ?></td>
				<td class="" ><?php echo round($netincomeyear3,2) ?></td>
				<td class="" ><?php echo round($netincomeyear4,2) ?></td>
				<td class="" ><?php echo round($netincomeyear5,2) ?></td>
				<td class="" ><?php echo round($totalnetincome,2) ?></td>
			</tr>
			<tr>
				<td class="" >Depriciation</td>
				<td class="" align=""><?php echo round($depreciationyear1,2) ?></td>
				<td class="" align=""><?php echo round($depreciationyear2,2) ?></td>
				<td class="" align=""><?php echo round($depreciationyear3,2) ?></td>
				<td class="" align=""><?php echo round($depreciationyear4,2) ?></td>
				<td class="" align=""><?php echo round($depreciationyear5,2) ?></td>
				<td class="" align=""><?php echo round($totaldepreciation,2) ?></td>
			</tr>
			
			<tr>
				<td class="" >Amortization</td>
				<td class="" align=""><?php echo round($amortizationvalue,2) ?></td>
				<td class="" align=""><?php echo round($amortizationvalue,2) ?></td>
				<td class="" align=""><?php echo round($amortizationvalue,2) ?></td>
				<td class="" align=""><?php echo round($amortizationvalue,2) ?></td>
				<td class="" align=""><?php echo round($amortizationvalue,2) ?></td>
				<td class="" align=""><?php echo round($amortizationvalue,2) ?></td>
			</tr>
			<tr>
				<td class="" >Other liabilities</td>
				<td class="" align=""><?php echo round($otherliabilitiesvalue,2) ?></td>
				<td class="" align=""><?php echo round($otherliabilitiesvalue,2) ?></td>
				<td class="" align=""><?php echo round($otherliabilitiesvalue,2) ?></td>
				<td class="" align=""><?php echo round($otherliabilitiesvalue,2) ?></td>
				<td class="" align=""><?php echo round($otherliabilitiesvalue,2) ?></td>
				<td class="" align=""><?php echo round($otherliabilitiesvalue,2) ?></td>
			</tr>
			<tr>
				<td class="" >Other operating cash flow items</td>
				<td class="" align=""><?php echo round($othercashflow,2) ?></td>
				<td class="" align=""><?php echo round($othercashflow,2) ?></td>
				<td class="" align=""><?php echo round($othercashflow,2) ?></td>
				<td class="" align=""><?php echo round($othercashflow,2) ?></td>
				<td class="" align=""><?php echo round($othercashflow,2) ?></td>
				<td class="" align=""><?php echo round($othercashflow,2) ?></td>
			</tr>
			
			<tr style="background-color: gray">
				<td ><strong>Total operating activies</strong></td>
				<td class="" align=""><?php echo round($operatingactivities_ty1,2) ?></td>
				<td class="" align=""><?php echo round($operatingactivities_ty2,2) ?></td>
				<td class="" align=""><?php echo round($operatingactivities_ty3,2) ?></td>
				<td class="" align=""><?php echo round($operatingactivities_ty4,2) ?></td>
				<td class="" align=""><?php echo round($operatingactivities_ty5,2) ?></td>
				<td class="" align=""><?php echo round($operatingactivities_ttotals,2) ?></td>
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
		
<!--test-->
		<?php 
		include '../connection/dbConfig.php';
		$selectlpcm1 = mysqli_query($db, "SELECT * FROM `loan-payment-calculator` WHERE month = '1'");
		$countlpcm1 = mysqli_num_rows($selectlpcm1);
		if($countlpcm1 > 0){
			$row = mysqli_fetch_assoc($selectlpcm1);
			$loaninitial = $row['balance'];
		}		
		$selectlpcm13 = mysqli_query($db, "SELECT * FROM `loan-payment-calculator` WHERE month = '13'");
		$countlpcm13 = mysqli_num_rows($selectlpcm13);
		if($countlpcm13 > 0){
			$row = mysqli_fetch_assoc($selectlpcm13);
			$loanyearfirst = $row['balance'];
		}
		$selectlpcm25 = mysqli_query($db, "SELECT * FROM `loan-payment-calculator` WHERE month = '25'");
		$countlpcm25 = mysqli_num_rows($selectlpcm25);
		if($countlpcm25 > 0){
			$row = mysqli_fetch_assoc($selectlpcm25);
			$loanyearsecond = $row['balance'];
		}
		$selectlpcm37 = mysqli_query($db, "SELECT * FROM `loan-payment-calculator` WHERE month = '37'");
		$countlpcm37 = mysqli_num_rows($selectlpcm37);
		if($countlpcm37 > 0){
			$row = mysqli_fetch_assoc($selectlpcm37);
			$loanyearthird = $row['balance'];
		}
		$selectlpcm49 = mysqli_query($db, "SELECT * FROM `loan-payment-calculator` WHERE month = '49'");
		$countlpcm49 = mysqli_num_rows($selectlpcm49);
		if($countlpcm49 > 0){
			$row = mysqli_fetch_assoc($selectlpcm49);
			$loanyearfourth= $row['balance'];
		}
		$selectlpcm61 = mysqli_query($db, "SELECT * FROM `loan-payment-calculator` WHERE month = '61'");
		$countlpcm61 = mysqli_num_rows($selectlpcm61);
		if($countlpcm61 > 0){
			$row = mysqli_fetch_assoc($selectlpcm61);
			$loanyearfifth= $row['balance'];
		} else {
			$loanyearfifth = '0';
		}
		//get other long term debt
		$getdebt = mysqli_query($db, "SELECT * FROM debt WHERE id = '1'");
		$countgetdebt = mysqli_num_rows($getdebt);
		if($countgetdebt > 0){
			$row = mysqli_fetch_assoc($getdebt);
			$debtinitial = $row['initial_balance'];
			$debtyear1 = $row['year1'];
			$debtyear2 = $row['year2'];
			$debtyear3 = $row['year3'];
			$debtyear4 = $row['year4'];
			$debtyear5 = $row['year5'];
		}
		//long-term-debt-financing
		$longtermdebtfinancing = ($loanyearfirst + $debtyear1) - ($loaninitial + $debtinitial) ;
		$longtermdebtfinancing1 = ($loanyearsecond + $debtyear2) - ($loanyearfirst + $debtyear1) ;
		$longtermdebtfinancing2 = ($loanyearthird + $debtyear3) - ($loanyearsecond + $debtyear2) ;
		$longtermdebtfinancing3 = ($loanyearfourth + $debtyear4) - ($loanyearthird + $debtyear3) ;
		$longtermdebtfinancing4 = ($loanyearfifth + $debtyear5) - ($loanyearfourth + $debtyear4) ;
		$totallongtermdebt = $longtermdebtfinancing + $longtermdebtfinancing1 + $longtermdebtfinancing2 + $longtermdebtfinancing3 + $longtermdebtfinancing4;
		//colorpick
		if($longtermdebtfinancing < 0){
			$longtermcolor1 = "red";
		}
		if($longtermdebtfinancing1 < 0){
			$longtermcolor2 = "red";
		}
		if($longtermdebtfinancing2 < 0){
			$longtermcolor3 = "red";
		}
		if($longtermdebtfinancing3 < 0){
			$longtermcolor4 = "red";
		}
		if($longtermdebtfinancing4 < 0){
			$longtermcolor5 = "red";
		}
		if($totallongtermdebt < 0){
			$longtermcolor6 = "red";
		}
		//preferredstock
		$preferredstock = mysqli_query($db, "SELECT * FROM cash_flow_financing_activities WHERE id = '1'");
		$countpreferredstock = mysqli_num_rows($preferredstock);
		if($countpreferredstock > 0){
			$row = mysqli_fetch_assoc($preferredstock);
			$preferredstockvalue = $row['value'];
			$preferredstocktotalvalue = $preferredstockvalue * 5;
		}
		//total cash dividends
		$totalcash = mysqli_query($db, "SELECT * FROM cash_flow_financing_activities WHERE id = '2'");
		$counttotalcash = mysqli_num_rows($totalcash);
		if($counttotalcash > 0){
			$row = mysqli_fetch_assoc($totalcash);
			$totalcashvalue = $row['value'];
			$totalcashtotalvalue = $totalcashvalue * 5;
		}
		//common stock
		$commonstock = mysqli_query($db, "SELECT * FROM cash_flow_financing_activities WHERE id = '3'");
		$countcommonstock = mysqli_num_rows($commonstock);
		if($countcommonstock > 0){
			$row = mysqli_fetch_assoc($commonstock);
			$commonstockvalue = $row['value'];
			$commonstocktotalvalue = $commonstockvalue * 5;
		}
		//other financing cash flow items
		$financingcashflow = mysqli_query($db, "SELECT * FROM cash_flow_financing_activities WHERE id = '4'");
		$countfinancingcashflow = mysqli_num_rows($financingcashflow);
		if($countfinancingcashflow > 0){
			$row = mysqli_fetch_assoc($financingcashflow);
			$financingcashflowvalue = $row['value'];
			$financingcashflowtotalvalue = $financingcashflowvalue * 5;
		}
		//total financing activities
		$totalfinacningactivities1 = $longtermdebtfinancing + $preferredstockvalue + $totalcashvalue + $commonstockvalue + $financingcashflowvalue;
		$totalfinacningactivities2 = $longtermdebtfinancing1 + $preferredstockvalue + $totalcashvalue + $commonstockvalue + $financingcashflowvalue;
		$totalfinacningactivities3 = $longtermdebtfinancing2 + $preferredstockvalue + $totalcashvalue + $commonstockvalue + $financingcashflowvalue;
		$totalfinacningactivities4 = $longtermdebtfinancing3 + $preferredstockvalue + $totalcashvalue + $commonstockvalue + $financingcashflowvalue;
		$totalfinacningactivities5 = $longtermdebtfinancing4 + $preferredstockvalue + $totalcashvalue + $commonstockvalue + $financingcashflowvalue;
		$totalfinancingactivitiestotal = $totalfinacningactivities1 + $totalfinacningactivities2 + $totalfinacningactivities3 + $totalfinacningactivities4 + $totalfinacningactivities5;
		if($totalfinacningactivities1 < 0){
			$totalfinancingcolor1 = "red";
		}
		if($totalfinacningactivities2 < 0){
			$totalfinancingcolor2 = "red";
		}
		if($totalfinacningactivities3 < 0){
			$totalfinancingcolor3 = "red";
		}
		if($totalfinacningactivities4 < 0){
			$totalfinancingcolor4 = "red";
		}
		if($totalfinacningactivities5 < 0){
			$totalfinancingcolor5 = "red";
		}
		if($totalfinancingactivitiestotal < 0){
			$totalfinancingcolor6 = "red";
		}
		
		?>
		
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Financing activities <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></th>
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
				<td class="" >Long term debt/financing</td>
				<td class="" align="" style="color: <?php echo $longtermcolor1 ?>;"><?php echo round($longtermdebtfinancing,2) ?></td>
				<td class="" align="" style="color: <?php echo $longtermcolor2 ?>;"><?php echo round($longtermdebtfinancing1,2) ?></td>
				<td class="" align="" style="color: <?php echo $longtermcolor3 ?>;"><?php echo round($longtermdebtfinancing2,2) ?></td>
				<td class="" align="" style="color: <?php echo $longtermcolor4 ?>;"><?php echo round($longtermdebtfinancing3,2) ?></td>
				<td class="" align="" style="color: <?php echo $longtermcolor5 ?>;"><?php echo round($longtermdebtfinancing4,2) ?></td>
				<td class="" align="" style="color: <?php echo $longtermcolor6 ?>;"><?php echo round($totallongtermdebt,2) ?></td>
			</tr>
			<tr>
				<td>Preferred stock</td>
				<td><?php echo round($preferredstockvalue, 2) ?></td>
				<td><?php echo round($preferredstockvalue, 2) ?></td>
				<td><?php echo round($preferredstockvalue, 2) ?></td>
				<td><?php echo round($preferredstockvalue, 2) ?></td>
				<td><?php echo round($preferredstockvalue, 2) ?></td>
				<td><?php echo round($preferredstocktotalvalue, 2) ?></td>
			</tr>
			<tr>
				<td>Total cash dividends paid</td>
				<td><?php echo round($totalcashvalue,2) ?></td>
				<td><?php echo round($totalcashvalue,2) ?></td>
				<td><?php echo round($totalcashvalue,2) ?></td>
				<td><?php echo round($totalcashvalue,2) ?></td>
				<td><?php echo round($totalcashvalue,2) ?></td>
				<td><?php echo round($totalcashtotalvalue,2) ?></td>
			</tr>
			<tr>
				<td>Common stock</td>
				<td><?php echo round($commonstockvalue,2) ?></td>
				<td><?php echo round($commonstockvalue,2) ?></td>
				<td><?php echo round($commonstockvalue,2) ?></td>
				<td><?php echo round($commonstockvalue,2) ?></td>
				<td><?php echo round($commonstockvalue,2) ?></td>
				<td><?php echo round($commonstocktotalvalue,2) ?></td>
			</tr>
			<tr>
				<td>Other financing cahs flow items</td>
				<td><?php echo round($financingcashflowvalue,2) ?></td>
				<td><?php echo round($financingcashflowvalue,2) ?></td>
				<td><?php echo round($financingcashflowvalue,2) ?></td>
				<td><?php echo round($financingcashflowvalue,2) ?></td>
				<td><?php echo round($financingcashflowvalue,2) ?></td>
				<td><?php echo round($financingcashflowtotalvalue,2) ?></td>
			</tr>
			
			<tr style="background-color: gray">
				<td ><strong>Total financing activities</strong></td>
				<td class="" align="" style="color: <?php echo $totalfinancingcolor1 ?>"><?php echo round($totalfinacningactivities1,2) ?></td>
				<td class="" align="" style="color: <?php echo $totalfinancingcolor2 ?>"><?php echo round($totalfinacningactivities2,2) ?></td>
				<td class="" align="" style="color: <?php echo $totalfinancingcolor3 ?>"><?php echo round($totalfinacningactivities3,2) ?></td>
				<td class="" align="" style="color: <?php echo $totalfinancingcolor4 ?>"><?php echo round($totalfinacningactivities4,2) ?></td>
				<td class="" align="" style="color: <?php echo $totalfinancingcolor5 ?>"><?php echo round($totalfinacningactivities5,2) ?></td>
				<td class="" align="" style="color: <?php echo $totalfinancingcolor6 ?>"><?php echo round($totalfinancingactivitiestotal,2) ?></td>
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
		
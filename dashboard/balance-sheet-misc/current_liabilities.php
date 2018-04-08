<!--test-->
		<?php 
		include '../connection/dbConfig.php';
		$ap = mysqli_query($db, "SELECT * FROM current_liabilities WHERE id = '1'");
		$countap = mysqli_num_rows($ap);
		if($countap > 0){
			$row = mysqli_fetch_assoc($ap);
			$accounts_payable = $row['initial_balance'];
		}
		$ae = mysqli_query($db, "SELECT * FROM current_liabilities WHERE id = '2'");
		$countae = mysqli_num_rows($ae);
		if($countae > 0){
			$row = mysqli_fetch_assoc($ae);
			$accrued_expenses = $row['initial_balance'];
		}
		$np = mysqli_query($db, "SELECT * FROM current_liabilities WHERE id = '3'");
		$countnp = mysqli_num_rows($np);
		if($countnp > 0){
			$row = mysqli_fetch_assoc($np);
			$notes_payable = $row['initial_balance'];
		}
		$cl = mysqli_query($db, "SELECT * FROM current_liabilities WHERE id = '4'");
		$countcl = mysqli_num_rows($cl);
		if($countcl > 0){
			$row = mysqli_fetch_assoc($cl);
			$capital_leases = $row['initial_balance'];
		}
		$ocl = mysqli_query($db, "SELECT * FROM current_liabilities WHERE id = '5'");
		$countocl = mysqli_num_rows($ocl);
		if($countocl > 0){
			$row = mysqli_fetch_assoc($ocl);
			$ocurrent_liab = $row['initial_balance'];
		}
		?>
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Current Liabilities <button class="btn btn-warning"><i class="fa fa-pencil"></i></button></th>
				<th>Initial Balance</th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="" >Accounts payable</td>
				<td class="" ><?php echo $accounts_payable ?></td>
				<td class="" ><?php echo $accounts_payable ?></td>
				<td class="" ><?php echo $accounts_payable ?></td>
				<td class="" ><?php echo $accounts_payable ?></td>
				<td class="" ><?php echo $accounts_payable ?></td>
				<td class="" ><?php echo $accounts_payable ?></td>
			</tr>
			<tr>
				<td class="" >Accrued Expenses</td>
				<td class="" ><?php echo $accrued_expenses ?></td>
				<td class="" ><?php echo $accrued_expenses ?></td>
				<td class="" ><?php echo $accrued_expenses ?></td>
				<td class="" ><?php echo $accrued_expenses ?></td>
				<td class="" ><?php echo $accrued_expenses ?></td>
				<td class="" ><?php echo $accrued_expenses ?></td>
			</tr>
			<tr>
				<td class="" >Notes Payable</td>
				<td class="" ><?php echo $notes_payable ?></td>
				<td class="" ><?php echo $notes_payable ?></td>
				<td class="" ><?php echo $notes_payable ?></td>
				<td class="" ><?php echo $notes_payable ?></td>
				<td class="" ><?php echo $notes_payable ?></td>
				<td class="" ><?php echo $notes_payable ?></td>
			</tr>
			<tr>
				<td class="" >Capital Leases</td>
				<td class="" ><?php echo $capital_leases ?></td>
				<td class="" ><?php echo $capital_leases ?></td>
				<td class="" ><?php echo $capital_leases ?></td>
				<td class="" ><?php echo $capital_leases ?></td>
				<td class="" ><?php echo $capital_leases ?></td>
				<td class="" ><?php echo $capital_leases ?></td>
			</tr>
			<tr>
				<td class="" >Other Current Liabilities</td>
				<td class="" ><?php echo $ocurrent_liab ?></td>
				<td class="" ><?php echo $ocurrent_liab ?></td>
				<td class="" ><?php echo $ocurrent_liab ?></td>
				<td class="" ><?php echo $ocurrent_liab ?></td>
				<td class="" ><?php echo $ocurrent_liab ?></td>
				<td class="" ><?php echo $ocurrent_liab ?></td>
			</tr>
			<?php 
				$totalcurrentliabilities = $accounts_payable + $accrued_expenses + $notes_payable + $capital_leases + $ocurrent_liab;
			?>
			<tr style="background-color: gray">
				<td ><strong>Total current liabilities</strong></td>
				<td class="" ><?php echo round($totalcurrentliabilities,2) ?></td>
				<td class="" ><?php echo round($totalcurrentliabilities,2) ?></td>
				<td class="" ><?php echo round($totalcurrentliabilities,2) ?></td>
				<td class="" ><?php echo round($totalcurrentliabilities,2) ?></td>
				<td class="" ><?php echo round($totalcurrentliabilities,2) ?></td>
				<td class="" ><?php echo round($totalcurrentliabilities,2) ?></td>
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
		<!--This table is for debt-->
		<?php
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
		?>
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Debt <button class="btn btn-warning"><i class="fa fa-pencil"></i></button></th>
				<th>Initial Balance</th>
				<th align="center">Year1</th>
				<th align="center">Year2</th>
				<th align="center">Year3</th>
				<th align="center">Year4</th>
				<th align="center">Year5</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="" >Long-term debt/loan</td>
				<td class="" ><?php echo round($loaninitial,2) ?></td>
				<td class="" ><?php echo round($loanyearfirst,2) ?></td>
				<td class="" ><?php echo round($loanyearsecond,2) ?></td>
				<td class="" ><?php echo round($loanyearthird,2) ?></td>
				<td class="" ><?php echo round($loanyearfourth,2) ?></td>
				<td class="" ><?php echo round($loanyearfifth,2) ?></td>
			</tr>
			<?php
				$queryltd = mysqli_query($db, "SELECT * FROM debt WHERE id = '1'");
				$countltd = mysqli_num_rows($queryltd);
				if($countltd > 0){
					$row = mysqli_fetch_assoc($queryltd);
					$oltdinitial_balance = $row['initial_balance'];
					$oltdyear1 = $row['year1'];
					$oltdyear2 = $row['year2'];
					$oltdyear3 = $row['year3'];
					$oltdyear4 = $row['year4'];
					$oltdyear5 = $row['year5'];
					
				}
				$totaldebt_ib = $oltdinitial_balance + $loaninitial;
				$totaldeb_y1 = $oltdyear1 + $loanyearfirst + $totalcurrentliabilities;
				$totaldeb_y2 = $oltdyear2 + $loanyearsecond + $totalcurrentliabilities;
				$totaldeb_y3 = $oltdyear3 + $loanyearthird + $totalcurrentliabilities;
				$totaldeb_y4 = $oltdyear4 + $loanyearfourth + $totalcurrentliabilities;
				$totaldeb_y5 = $oltdyear5 + $loanyearfifth + $totalcurrentliabilities;
			?>
			<tr>
				<td class="" >Other long-term debt</td>
				<td class="" ><?php echo $oltdinitial_balance ?></td>
				<td class="" ><?php echo $oltdyear1 ?></td>
				<td class="" ><?php echo $oltdyear2 ?></td>
				<td class="" ><?php echo $oltdyear3 ?></td>
				<td class="" ><?php echo $oltdyear4 ?></td>
				<td class="" ><?php echo $oltdyear5 ?></td>
			</tr>
			
			
			<tr style="background-color: gray">
				<td ><strong>Total Debt</strong></td>
				<td class="" ><?php echo round($totaldebt_ib,2)?></td>
				<td class="" ><?php echo round($totaldeb_y1,2)?></td>
				<td class="" ><?php echo round($totaldeb_y2,2)?></td>
				<td class="" ><?php echo round($totaldeb_y3,2)?></td>
				<td class="" ><?php echo round($totaldeb_y4,2)?></td>
				<td class="" ><?php echo round($totaldeb_y5,2)?></td>
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
		
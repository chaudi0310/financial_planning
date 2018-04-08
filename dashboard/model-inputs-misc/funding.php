<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM funding WHERE id = '1'");
			$countdbquery = mysqli_num_rows($dbquery);
			$row = mysqli_fetch_assoc($dbquery);
		?>
	<!--stop test -->
	
	
		<table class="table table-condensed">
		<thead style="background-color: blue; color:white">
			<tr>
				<th>FUNDING <button type="button" class="btn btn-warning update-funding" data-toggle="modal" data-loan-amount="<?php echo $row['loan_amount'] ?>" data-anual-loan="<?php echo $row['anual_interest_rate']; ?>" data-target="#updateFunding" title="Update Funding"><i class="fa fa-pencil"></i></button></th>
				<?php include_once 'modal/updatefunding.php'; ?>
				<th></th>
				<th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php
				if($countdbquery == 1){
					
					$loan_amount = $row['loan_amount'];
					$anual_interest_rate = $row['anual_interest_rate'];
					$term_of_loan = $row['term_of_loan'];
					$monthly_rate = $row['monthly_rate'];
					$payment = $row['payment'];
					$total_amount_payable = $row['total_amount_payable'];

				}	
			?>
			<tr style="background-color: #E9ECEF">
			
				<td class="">Loan Amount</td>
				<td class=""></td>
				<td align="right"class=""><?php echo $loan_amount;?></td>
			</tr>
			<tr style="background-color: #E9ECEF">
				<td class="">Annual Interest Rate</td>
				<td class=""></td>
				<td align="right"class=""><?php echo $anual_interest_rate;?>%</td>
			</tr>
			<tr style="background-color: #E9ECEF">
				<td class="">Term of Loan(number of months)</td>
				<td class=""></td>
				<td align="right"class=""><?php echo $term_of_loan;?></td>
			</tr>
			<tr style="background-color: #E9ECEF">
				<td class="">Monthly Rate</td>
				<td class=""></td>
				<td align="right"class=""><?php echo round($monthly_rate,2);?>%</td>
			</tr>
			<tr style="background-color: #E9ECEF">
				<td class="">Payment</td>
				<td class=""></td>
				<td align="right"class=""><?php echo round($payment,2);?></td>
			</tr>
			<tr style="background-color: #E9ECEF">
				<td class="">Total Amount Payable</td>
				<td class=""></td>
				<td align="right"class=""><?php echo round($total_amount_payable,2);?></td>
			</tr>
		</tbody>
		
		</table>
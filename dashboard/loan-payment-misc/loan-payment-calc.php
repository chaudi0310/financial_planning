<!--test-->
			<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM `loan-payment-calculator` ORDER by id");
			$countdbquery = mysqli_num_rows($dbquery);
		?>
	<!--stop test -->
	
	<div class="container">
		<h3>Loan Payment Calculator</h3>
		<table class="table table-condensed">
		<thead>
			<tr>
				<th>Month</th>
				
				<th>Balance</th>
				<th>Scheduled Payment</th>
				<th>Principal</th>
				<th>Interest</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
				if($countdbquery > 0){
					while($row = mysqli_fetch_assoc($dbquery)){
						$month = $row['month'];
						$balance = $row['balance'];
						$scheduled_payment = $row['scheduled_payment'];
						$principal = $row['principal'];
						$interest = $row['interest'];
						
						 
						
					
			?>
			<tr>
			
				<td class=""><?php echo $month ; ?></td>
				<td class=""><?php echo round($balance,2) ; ?></td>
				<td class=""><?php echo round($scheduled_payment,2) ; ?></td>
				<td class=""><?php echo round($principal,2) ; ?></td>
				<td class=""><?php echo round($interest,2) ; ?></td>
				<?php
				}
				
				
				
			}
			?>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>Month</th>
				
				<th>Balance</th>
				<th>Scheduled Payment</th>
				<th>Principal</th>
				<th>Interest</th>
			</tr>
		</thead>
		</table>
<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$expense = mysqli_query($db,"SELECT * FROM profits_loss_expense_increase WHERE id='1'");
			$revenue = mysqli_query($db,"SELECT * FROM profits_loss_revenue_increase WHERE id='1'");
			$countexpense = mysqli_num_rows($expense);
			$countrevenue = mysqli_num_rows($revenue);
			if($countexpense > 0){
				$fetchexpense = mysqli_fetch_assoc($expense);
				$exyear1 = $fetchexpense['year1'];
				$exyear2 = $fetchexpense['year2'];
				$exyear3 = $fetchexpense['year3'];
				$exyear4 = $fetchexpense['year4'];
				$exyear5 = $fetchexpense['year5'];
			}
			if($countrevenue > 0){
				$fetchrevenue = mysqli_fetch_assoc($revenue);
				$revyear1 = $fetchrevenue['year1'];
				$revyear2 = $fetchrevenue['year2'];
				$revyear3 = $fetchrevenue['year3'];
				$revyear4 = $fetchrevenue['year4'];
				$revyear5 = $fetchrevenue['year5'];
			}
			
		?>
	<!--stop test -->
	
	
		<h3>Profits and Loss Assumption</h3>
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th></th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<tbody>
			<tr >
				<td class="">Annual cumulative price (revenue) increase</td>
				<td class=""><?php echo $revyear1; ?>%</td>
				<td class=""><?php echo $revyear2; ?>%</td>
				<td class=""><?php echo $revyear3; ?>%</td>
				<td class=""><?php echo $revyear4; ?>%</td>
				<td class=""><?php echo $revyear5; ?>%</td>
			</tr>
			<tr>
				<td class="">Annual cumulative inflation (expense) increase</td>
				<td class=""><?php echo $exyear1; ?>%</td>
				<td class=""><?php echo $exyear2; ?>%</td>
				<td class=""><?php echo $exyear3; ?>%</td>
				<td class=""><?php echo $exyear4; ?>%</td>
				<td class=""><?php echo $exyear5; ?>%</td>
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
<!--test-->
		<?php 
		include '../connection/dbConfig.php';
		$owners_eq = mysqli_query($db, "SELECT * FROM equity WHERE id = '1'"); 
		$cowners_eq = mysqli_num_rows($owners_eq);
		if($cowners_eq > 0){
			$row = mysqli_fetch_assoc($owners_eq);
			$owners_equity = $row['year1'];
		}
		$paid = mysqli_query($db, "SELECT * FROM equity WHERE id = '2'"); 
		$cpaid = mysqli_num_rows($paid);
		if($cpaid > 0){
			$row = mysqli_fetch_assoc($paid);
			$paid_in_capital = $row['year1'];
		}
		$preferred = mysqli_query($db, "SELECT * FROM equity WHERE id = '3'"); 
		$cpreferred = mysqli_num_rows($preferred);
		if($cpreferred > 0){
			$row = mysqli_fetch_assoc($preferred);
			$preferred_equity = $row['year1'];
		}
		$retained = mysqli_query($db, "SELECT * FROM equity WHERE id = '4'"); 
		$cretained = mysqli_num_rows($retained);
		if($cretained > 0){
			$row = mysqli_fetch_assoc($retained);
			$retained_earnings = $row['year1'];
		}
		?>
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th><?php if(!isset($_SESSION['readonly'])){ ?><a href="balance-sheet-misc/equity_edit.php"class="btn btn-warning"><i class="fa fa-pencil"></i></a><?php } ?></th>
				<th>Initial Balance </th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<tbody>
		
			<tr>
				<td class="" >Owner's equity</td>
				<td class="" >₱<?php echo number_format($owners_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($owners_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($owners_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($owners_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($owners_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($owners_equity,2) ?></td>
			</tr>
			<tr>
				<td class="" >Paid-in capital</td>
				<td class="" >₱<?php echo number_format($paid_in_capital,2) ?></td>
				<td class="" >₱<?php echo number_format($paid_in_capital,2) ?></td>
				<td class="" >₱<?php echo number_format($paid_in_capital,2) ?></td>
				<td class="" >₱<?php echo number_format($paid_in_capital,2) ?></td>
				<td class="" >₱<?php echo number_format($paid_in_capital,2) ?></td>
				<td class="" >₱<?php echo number_format($paid_in_capital,2) ?></td>
			</tr>
			<tr>
				<td class="" >Preferred equity</td>
				<td class="" >₱<?php echo number_format($preferred_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($preferred_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($preferred_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($preferred_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($preferred_equity,2) ?></td>
				<td class="" >₱<?php echo number_format($preferred_equity,2) ?></td>
			</tr>
			<?php 
			//get retained earnings
			$query_retained_earnings = mysqli_query($db, "SELECT * FROM retained_earnings WHERE id = '1'");
			$count_retained_earnings = mysqli_num_rows($query_retained_earnings);
			if($count_retained_earnings > 0){
				$row = mysqli_fetch_assoc($query_retained_earnings);
				$retained_earnings1 = $row['year1'];
				$retained_earnings2 = $row['year2'];
				$retained_earnings3 = $row['year3'];
				$retained_earnings4 = $row['year4'];
				$retained_earnings5 = $row['year5'];
			}
			$retained_earnings22 = $retained_earnings2 + $retained_earnings1;
			$retained_earnings33 = $retained_earnings22 + $retained_earnings3;
			$retained_earnings44 = $retained_earnings33 + $retained_earnings4;
			$retained_earnings55 = $retained_earnings44 + $retained_earnings5;
			?>
			<tr>
				<td class="" >Retained earnings</td>
				<td class="" >₱<?php echo number_format($retained_earnings,2) ?></td>
				<td class="" >₱<?php echo number_format($retained_earnings1,2) ?></td>
				<td class="" >₱<?php echo number_format($retained_earnings22,2) ?></td>
				<td class="" >₱<?php echo number_format($retained_earnings33,2) ?></td>
				<td class="" >₱<?php echo number_format($retained_earnings44,2) ?></td>
				<td class="" >₱<?php echo number_format($retained_earnings55,2) ?></td>
			</tr>
			<?php 
			$totalequity_initial = $owners_equity + $paid_in_capital + $preferred_equity + $retained_earnings;
			$totalequity_year1 = $owners_equity + $paid_in_capital + $preferred_equity + $retained_earnings1;
			$totalequity_year2 = $owners_equity + $paid_in_capital + $preferred_equity + $retained_earnings22;
			$totalequity_year3 = $owners_equity + $paid_in_capital + $preferred_equity + $retained_earnings33;
			$totalequity_year4 = $owners_equity + $paid_in_capital + $preferred_equity + $retained_earnings44;
			$totalequity_year5 = $owners_equity + $paid_in_capital + $preferred_equity + $retained_earnings55;
			
			
			
			?>
		
			
			<tr style="background-color: gray">
				<td ><strong>Total equity</strong></td>
				<td class="" >₱<?php echo number_format($totalequity_initial,2)?></td>
				<td class="" >₱<?php echo number_format($totalequity_year1,2) ?></td>
				<td class="" >₱<?php echo number_format($totalequity_year2,2) ?></td>
				<td class="" >₱<?php echo number_format($totalequity_year3,2) ?></td>
				<td class="" >₱<?php echo number_format($totalequity_year4,2) ?></td>
				<td class="" >₱<?php echo number_format($totalequity_year5,2) ?></td>
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
		
		<h3>Total Liabilities and Equity</h3>
		<table class="table table-condensed" style="border: 5px solid black">
			<tbody><tr align="center" style="background-color: gray; color: white;">
				<th>Initital Balance</th>
				<th>Year 1</th>
				<th>Year 2</th>
				<th>Year 3</th>
				<th>Year 4</th>
				<th>Year 5</th>
			</tr>
			<?php
			//total of liabilities and equity
			$total_liabilities_equity_ini = $total_liabilities_initial + $totalequity_initial;
			$total_liabilities_equity_y1 = $total_liabilities_year1 + $totalequity_year1;
			$total_liabilities_equity_y2 = $total_liabilities_year2 + $totalequity_year2;
			$total_liabilities_equity_y3 = $total_liabilities_year3 + $totalequity_year3;
			$total_liabilities_equity_y4 = $total_liabilities_year4 + $totalequity_year4;
			$total_liabilities_equity_y5 = $total_liabilities_year5 + $totalequity_year5;
			?>
			</tbody><tbody>
				<tr align="center">
					<td>₱<?php echo number_format($total_liabilities_equity_ini,2) ?></td>
					<td>₱<?php echo number_format($total_liabilities_equity_y1,2) ?></td>
					<td>₱<?php echo number_format($total_liabilities_equity_y2,2) ?></td>
					<td>₱<?php echo number_format($total_liabilities_equity_y3,2) ?></td>
					<td>₱<?php echo number_format($total_liabilities_equity_y4,2) ?></td>
					<td>₱<?php echo number_format($total_liabilities_equity_y5,2) ?></td>
				</tr>
			</tbody>
		</table>
		
		
		
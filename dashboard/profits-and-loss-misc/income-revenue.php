<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$sql = mysqli_query($db, "SELECT * FROM `income-revenue`");
			$countsql = mysqli_num_rows($sql);
			
			
		?>
	<!--stop test -->
	
	
		<h2>Income</h2>
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Revenue</th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<tbody>
		<?php if($countsql > 0){
			while($row = mysqli_fetch_assoc($sql)){
				$product = $row['product'];
				$year1 = $row['year1'];
				$year2 = $row['year2'];
				$year3 = $row['year3'];
				$year4 = $row['year4'];
				$year5 = $row['year5'];
				
			
		 ?>
			<tr>
				<td class=""><?php echo $product; ?></td>
				<td class="">₱<?php echo number_format($year1,2); ?></td>
				<td class="">₱<?php echo number_format($year2,2); ?></td>
				<td class="">₱<?php echo number_format($year3,2); ?></td>
				<td class="">₱<?php echo number_format($year4,2); ?></td>
				<td class="">₱<?php echo number_format($year5,2); ?></td>
			</tr>
			<?php } 
			$totalcost1 = mysqli_query($db, "SELECT SUM(year1) AS year1 FROM `income-revenue`");
			$totalrow1 = mysqli_fetch_assoc($totalcost1);
			$totalcostyear1 = $totalrow1['year1'];
			$totalcost2 = mysqli_query($db, "SELECT SUM(year2) AS year2 FROM `income-revenue`");
			$totalrow2 = mysqli_fetch_assoc($totalcost2);
			$totalcostyear2 = $totalrow2['year2'];
			$totalcost3 = mysqli_query($db, "SELECT SUM(year3) AS year3 FROM `income-revenue`");
			$totalrow3 = mysqli_fetch_assoc($totalcost3);
			$totalcostyear3 = $totalrow3['year3'];
			$totalcost4 = mysqli_query($db, "SELECT SUM(year4) AS year4 FROM `income-revenue`");
			$totalrow4 = mysqli_fetch_assoc($totalcost4);
			$totalcostyear4 = $totalrow4['year4'];
			$totalcost5 = mysqli_query($db, "SELECT SUM(year5) AS year5 FROM `income-revenue`");
			$totalrow5 = mysqli_fetch_assoc($totalcost5);
			$totalcostyear5 = $totalrow5['year5'];
			} else {
				?>
				<tr>
					<td>No Record Found</td>
				<tr>
				<?php
			}
			
			?>
			
		</tbody>
		<tfoot>
		<th>Total Revenue</th>
		<th>₱<?php echo number_format($totalcostyear1,2); ?></th>
		<th>₱<?php echo number_format($totalcostyear2,2); ?></th>
		<th>₱<?php echo number_format($totalcostyear3,2); ?></th>
		<th>₱<?php echo number_format($totalcostyear4,2); ?></th>
		<th>₱<?php echo number_format($totalcostyear5,2); ?></th>
		</tfoot>
		</table>
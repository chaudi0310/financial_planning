<!--test-->
		<?php 
		include '../connection/dbConfig.php';
		
		?>
	<!--stop test -->
	
	
		
		<table id="#otherliabtable" class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Other Liabilities <?php if(!isset($_SESSION['readonly'])){ ?><button type="button" data-toggle="modal" data-target="#addOtherLiabilities" data-target class="btn btn-success"><i class="fa fa-plus"></i></button><?php } ?></th>
				<th>Initial Balance</th>
				<th>Year1</th>
				<th>Year2</th>
				<th>Year3</th>
				<th>Year4</th>
				<th>Year5</th>
				
			</tr>
		</thead>
		<tbody>
		<?php 
		$queryotherlib = mysqli_query($db, "SELECT * FROM other_liabilities ORDER by id");
		$countotherlib = mysqli_num_rows($queryotherlib);
		if($countotherlib > 0){
			while($row = mysqli_fetch_assoc($queryotherlib)){
			$olname = $row['name'];
			$olvalue = $row['value'];
			
		?>
			<tr>
				<td class="" ><?php if(!isset($_SESSION['readonly'])){ ?><button class="btn btn-danger" onclick = del("<?php echo $row['id']; ?>") ><i class="fa fa-trash"></i></button> <?php } echo $olname; ?></td>
				<td class="" >₱<?php echo number_format($olvalue,2); ?></td>
				<td class="" >₱<?php echo number_format($olvalue,2); ?></td>
				<td class="" >₱<?php echo number_format($olvalue,2); ?></td>
				<td class="" >₱<?php echo number_format($olvalue,2); ?></td>
				<td class="" >₱<?php echo number_format($olvalue,2); ?></td>
				<td class="" >₱<?php echo number_format($olvalue,2); ?></td>
			</tr>
			<!-- script for other liabilities -->
			<script>
	function del(a)
	{
		var x = confirm('Do you really want to delete');
		if( x == true)
		{
			window.location = 'actions/deleteOtherLiabilities.php?id='+a;
		}
		else
		{
			window.location = 'balance-sheet.php';
		}
	}
	
</script>
<!--close -->
		<?php 
		}
		}
		//getting total
		$totalliab = mysqli_query($db, "SELECT SUM(value) AS total_liab FROM other_liabilities");
		$row = mysqli_fetch_assoc($totalliab);
		$total_other_liabilities = $row['total_liab'];
		include_once 'modal/addOtherLiabilities.php';
		?>
			
			<tr style="background-color: gray">
				<td ><strong>Total other liabilities</strong></td>
				<td class="" >₱<?php echo number_format($total_other_liabilities,2) ?></td>
				<td class="" >₱<?php echo number_format($total_other_liabilities,2) ?></td>
				<td class="" >₱<?php echo number_format($total_other_liabilities,2) ?></td>
				<td class="" >₱<?php echo number_format($total_other_liabilities,2) ?></td>
				<td class="" >₱<?php echo number_format($total_other_liabilities,2) ?></td>
				<td class="" >₱<?php echo number_format($total_other_liabilities,2) ?></td>
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
		
		<h3>Total Liabilities</h3>
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
			$total_liabilities_initial = $totalcurrentliabilities + $loaninitial + $total_other_liabilities;
			$total_liabilities_year1 = $totalcurrentliabilities + $loanyearfirst + $total_other_liabilities;
			$total_liabilities_year2 = $totalcurrentliabilities + $loanyearsecond + $total_other_liabilities;
			$total_liabilities_year3 = $totalcurrentliabilities + $loanyearthird + $total_other_liabilities;
			$total_liabilities_year4 = $totalcurrentliabilities + $loanyearfourth + $total_other_liabilities;
			$total_liabilities_year5 = $totalcurrentliabilities + $loanyearfifth + $total_other_liabilities;
			?>
			</tbody><tbody>
				<tr align="center">
					<td>₱<?php echo number_format($totalcurrentliabilities + $loaninitial + $total_other_liabilities,2) ?></td>
					<td>₱<?php echo number_format($totalcurrentliabilities + $loanyearfirst + $total_other_liabilities,2) ?></td>
					<td>₱<?php echo number_format($totalcurrentliabilities + $loanyearsecond + $total_other_liabilities,2) ?></td>
					<td>₱<?php echo number_format($totalcurrentliabilities + $loanyearthird + $total_other_liabilities,2) ?></td>
					<td>₱<?php echo number_format($totalcurrentliabilities + $loanyearfourth + $total_other_liabilities,2) ?></td>
					<td>₱<?php echo number_format($totalcurrentliabilities + $loanyearfifth + $total_other_liabilities,2) ?></td>
				</tr>
			</tbody>
		</table>
		
		
		
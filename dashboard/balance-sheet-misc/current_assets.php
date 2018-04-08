<!--test-->
	<?php 
	include '../connection/dbConfig.php';
	$cas = mysqli_query($db, "SELECT * FROM current_assets WHERE id = '1'");
	$countcash = mysqli_num_rows($cas);
	if($countcash > 0){
		$row = mysqli_fetch_assoc($cas);
		$cash = $row['balance'];
	}
	$receive = mysqli_query($db, "SELECT * FROM current_assets WHERE id = '2'");
	$countreceive = mysqli_num_rows($receive);
	if($countreceive > 0){
		$row = mysqli_fetch_assoc($receive);
		$receive = $row['balance'];
	}
	$inv = mysqli_query($db, "SELECT * FROM current_assets WHERE id = '3'");
	$countinv= mysqli_num_rows($inv);
	if($countinv > 0){
		$row = mysqli_fetch_assoc($inv);
		$inventory = $row['balance'];
	}
	$prep = mysqli_query($db, "SELECT * FROM current_assets WHERE id = '4'");
	$countprep= mysqli_num_rows($prep);
	if($countprep > 0){
		$row = mysqli_fetch_assoc($prep);
		$prepaid = $row['balance'];
	}
	$ic = mysqli_query($db, "SELECT * FROM current_assets WHERE id = '5'");
	$countic= mysqli_num_rows($ic);
	if($countic > 0){
		$row = mysqli_fetch_assoc($ic);
		$incometax = $row['balance'];
	}
	$othera = mysqli_query($db, "SELECT * FROM current_assets WHERE id = '6'");
	$countother= mysqli_num_rows($othera);
	if($countother > 0){
		$row = mysqli_fetch_assoc($othera);
		$otherassets = $row['balance'];
	}
	$shortterm = mysqli_query($db, "SELECT * FROM ending_cash_balance WHERE id = '1'");
	$countshortterm = mysqli_num_rows($shortterm);
	if($countshortterm > 0){
		$row = mysqli_fetch_assoc($shortterm);
		$shortterm1 = $row['year1'];
		$shortterm2 = $row['year2'];
		$shortterm3 = $row['year3'];
		$shortterm4 = $row['year4'];
		$shortterm5 = $row['year5'];
	}
	?>
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Current Assets <?php if(!isset($_SESSION['readonly'])){ ?><a href="balance-sheet-misc/current_assets_edit.php" class="btn btn-warning"><i class="fa fa-pencil"></i></a><?php } ?></th>
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
				<td class="" >Cash and short-term investments</td>
				<td class="" align="center">₱<?php echo number_format($cash,2)?></td>
				<td class="" align="center">₱<?php echo number_format($shortterm1,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($shortterm2,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($shortterm3,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($shortterm4,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($shortterm5,2) ?></td>
			</tr>
			<tr>
				<td class="" >Accounts receivable</td>
				<td class="" align="center">₱<?php echo number_format($receive,2)?></td>
				<td class="" align="center">₱<?php echo number_format($receive,2)?></td>
				<td class="" align="center">₱<?php echo number_format($receive,2)?></td>
				<td class="" align="center">₱<?php echo number_format($receive,2)?></td>
				<td class="" align="center">₱<?php echo number_format($receive,2)?></td>
				<td class="" align="center">₱<?php echo number_format($receive,2)?></td>
			</tr>
			<tr>
				<td class="">Total Inventory</td>
				<td class="" align="center">₱<?php echo number_format($inventory,2)?></td>
				<td class="" align="center">₱<?php echo number_format($inventory,2)?></td>
				<td class="" align="center">₱<?php echo number_format($inventory,2)?></td>
				<td class="" align="center">₱<?php echo number_format($inventory,2)?></td>
				<td class="" align="center">₱<?php echo number_format($inventory,2)?></td>
				<td class="" align="center">₱<?php echo number_format($inventory,2)?></td>
			</tr>
			<tr>
				<td class="">Prepaid expenses</td>
				<td class="" align="center">₱<?php echo number_format($prepaid,2)?></td>
				<td class="" align="center">₱<?php echo number_format($prepaid,2)?></td>
				<td class="" align="center">₱<?php echo number_format($prepaid,2)?></td>
				<td class="" align="center">₱<?php echo number_format($prepaid,2)?></td>
				<td class="" align="center">₱<?php echo number_format($prepaid,2)?></td>
				<td class="" align="center">₱<?php echo number_format($prepaid,2)?></td>
			</tr>
			<tr>
				<td class="" >Deferred income tax</td>
				<td class="" align="center">₱<?php echo number_format($incometax,2)?></td>
				<td class="" align="center">₱<?php echo number_format($incometax,2)?></td>
				<td class="" align="center">₱<?php echo number_format($incometax,2)?></td>
				<td class="" align="center">₱<?php echo number_format($incometax,2)?></td>
				<td class="" align="center">₱<?php echo number_format($incometax,2)?></td>
				<td class="" align="center">₱<?php echo number_format($incometax,2)?></td>
			</tr>
			<tr>
				<td class="">Other current assets</td>
				<td class="" align="center">₱<?php echo number_format($otherassets,2)?></td>
				<td class="" align="center">₱<?php echo number_format($otherassets,2)?></td>
				<td class="" align="center">₱<?php echo number_format($otherassets,2)?></td>
				<td class="" align="center">₱<?php echo number_format($otherassets,2)?></td>
				<td class="" align="center">₱<?php echo number_format($otherassets,2)?></td>
				<td class="" align="center">₱<?php echo number_format($otherassets,2)?></td>
			</tr>
			<?php
			$currentini = $cash+$inventory+$receive+$prepaid+$incometax+$otherassets;
			$current1 = $inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm1;
			$current2 = $inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm2;
			$current3 = $inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm3;
			$current4 = $inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm4;
			$current5 = $inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm5;
			?>
			<tr style="background-color: gray">
				<td ><strong>Total current assets</strong></td>
				<td class="" align="center">₱<?php echo number_format($cash+$inventory+$receive+$prepaid+$incometax+$otherassets,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm1,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm2,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm3,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm4,2) ?></td>
				<td class="" align="center">₱<?php echo number_format($inventory+$receive+$prepaid+$incometax+$otherassets+$shortterm5,2) ?></td>
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
		
<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$gw = mysqli_query($db, "SELECT * FROM other_assets WHERE id = '1'");
			$gwcount = mysqli_num_rows($gw);
			if($gwcount > 0){
				$row = mysqli_fetch_assoc($gw);
				$goodwill = $row['year1'];
			}
			$lti = mysqli_query($db, "SELECT * FROM other_assets WHERE id = '2'");
			$lticount = mysqli_num_rows($lti);
			if($lticount > 0){
				$row = mysqli_fetch_assoc($lti);
				$longterm_investments = $row['year1'];
			}
			$dep = mysqli_query($db, "SELECT * FROM other_assets WHERE id = '3'");
			$depcount = mysqli_num_rows($dep);
			if($depcount > 0){
				$row = mysqli_fetch_assoc($dep);
				$deposits = $row['year1'];
			}
			$olta = mysqli_query($db, "SELECT * FROM other_assets WHERE id = '4'");
			$oltacount = mysqli_num_rows($olta);
			if($oltacount > 0){
				$row = mysqli_fetch_assoc($olta);
				$longterm_assets = $row['year1'];
			}
			
			
		?>
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Other Assets <button class="btn btn-warning"><i class="fa fa-pencil"></i></button></th>
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
				<td class="">Goodwill</td>
				<td class="" align="center"><?php echo $goodwill ?></td>
				<td class="" align="center"><?php echo $goodwill ?></td>
				<td class="" align="center"><?php echo $goodwill ?></td>
				<td class="" align="center"><?php echo $goodwill ?></td>
				<td class="" align="center"><?php echo $goodwill ?></td>
				<td class="" align="center"><?php echo $goodwill ?></td>
			</tr>
			<tr>
				<td class="">Long-term investments</td>
				<td class="" align="center"><?php echo $longterm_investments ?></td>
				<td class="" align="center"><?php echo $longterm_investments ?></td>
				<td class="" align="center"><?php echo $longterm_investments ?></td>
				<td class="" align="center"><?php echo $longterm_investments ?></td>
				<td class="" align="center"><?php echo $longterm_investments ?></td>
				<td class="" align="center"><?php echo $longterm_investments ?></td>
			</tr>
			<tr>
				<td class="">Deposits</td>
				<td class="" align="center"><?php echo $deposits ?></td>
				<td class="" align="center"><?php echo $deposits ?></td>
				<td class="" align="center"><?php echo $deposits ?></td>
				<td class="" align="center"><?php echo $deposits ?></td>
				<td class="" align="center"><?php echo $deposits ?></td>
				<td class="" align="center"><?php echo $deposits ?></td>
			</tr>
			<tr>
				<td class="">Other long-term assets</td>
				<td class="" align="center"><?php echo $longterm_assets ?></td>
				<td class="" align="center"><?php echo $longterm_assets ?></td>
				<td class="" align="center"><?php echo $longterm_assets ?></td>
				<td class="" align="center"><?php echo $longterm_assets ?></td>
				<td class="" align="center"><?php echo $longterm_assets ?></td>
				<td class="" align="center"><?php echo $longterm_assets ?></td>
			</tr>
			<?php
				$otherassets = $goodwill + $longterm_investments + $deposits + $longterm_assets;
			?>
			<tr style="background-color: gray;">
				<td class=""><strong>Total other assets</strong></td>
				<td class="" align="center"><?php echo $otherassets ?></td>
				<td class="" align="center"><?php echo $otherassets ?></td>
				<td class="" align="center"><?php echo $otherassets ?></td>
				<td class="" align="center"><?php echo $otherassets ?></td>
				<td class="" align="center"><?php echo $otherassets ?></td>
				<td class="" align="center"><?php echo $otherassets ?></td>
			</tr>
			
		</tbody>
		
		</table>
		<br>
		<h3>Total Assets</h3>
		<table class="table table-condensed" style="border: 5px solid black">
			<tbody><tr align="center" style="background-color: gray; color: white;">
				<th>Initital Balance</th>
				<th>Year 1</th>
				<th>Year 2</th>
				<th>Year 3</th>
				<th>Year 4</th>
				<th>Year 5</th>
			</tr>
			</tbody><tbody>
				<tr align="center">
					<td><?php echo round($otherassets + $pandeinitial + $currentini,2); ?></td>
					<td><?php echo round($otherassets + $pande1 + $current1,2); ?></td>
					<td><?php echo round($otherassets + $pande2 + $current2,2); ?></td>
					<td><?php echo round($otherassets + $pande3 + $current3,2); ?></td>
					<td><?php echo round($otherassets + $pande4 + $current4,2); ?></td>
					<td><?php echo round($otherassets + $pande5 + $current5,2); ?></td>
				</tr>
			</tbody>
		</table>
		
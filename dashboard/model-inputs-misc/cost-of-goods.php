<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM product ORDER by id ASC");
			$countdbquery = mysqli_num_rows($dbquery);
		?>
	<!--stop test -->
	
	
		<h3>COST OF GOOD SOLD</h3>
		<table class="table table-condensed">
		<thead>
			<tr>
				<th>Product</th>
				<?php include_once 'modal/addmodal.php';?>
				<th>Expected Gross Margin</th>
				<th>Anual Cost of good sold</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
				if($countdbquery > 0){
					while($row = mysqli_fetch_assoc($dbquery)){
						$pname = $row['name'];
						$gross = $row['gross_margin'];
						$pprice = $row['price'];
						$psanual = $row['sold_anual'];
						$anual_rev = $row['anual_rev'];
						$anual_cost = $row['anual_cost'];
						
						 
						
					
			?>
			<tr>
			
				<td class=""><?php echo $pname;?></td>
				<td class=""><?php echo $gross; ?>%</td>
				<td class=""><?php echo $anual_cost; ?></td>
				
				<?php
				}
				$select = mysqli_query($db, "SELECT * FROM model_inputs_totals WHERE id = '1'");
				$fetchtotal = mysqli_fetch_assoc($select);
				
				
			} else {
				
				?>
				<tr>
				<td> No Record Found</td>
				</tr>
				<?php
			}
			
			?>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>
					Total Cost of Goods sold
				</th>
				<th></th>
				 <th><?php if($countdbquery > 0) {echo $fetchtotal['total_cog']; }?></th> 
			</tr>
		</thead>
		</table>
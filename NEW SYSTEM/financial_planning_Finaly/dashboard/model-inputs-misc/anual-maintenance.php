<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM anual_maintenance WHERE id = '1'");
			$countdbquery = mysqli_num_rows($dbquery);
		?>
	<!--stop test -->
	
	
		<table class="table table-condensed">
		<thead style="background-color: gray; color:white">
			<tr>
				<th>ANNUAL MAINTENANCE, REPAIR AND OVERHAUL <button class="btn btn-warning"><i class="fa fa-pencil"></i></button></th>
				<th></th>
				<th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php
				if($countdbquery == 1){
					$row = mysqli_fetch_assoc($dbquery);
					$factor_cap_equip = $row['factor_cap_equip'];

				}	
			?>
			<tr style="background-color: #E9ECEF">
			
				<td class="">Factor (%) on capital equipment</td>
				<td class=""></td>
				<td align="right" class=""><?php echo $factor_cap_equip; ?>%</td>
				
				
			</tr>
		</tbody>
		
		</table>
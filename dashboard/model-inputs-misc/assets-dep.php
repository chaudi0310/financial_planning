<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM asset_depreciation WHERE id = '1'");
			$countdbquery = mysqli_num_rows($dbquery);
		?>
	<!--stop test -->
	
	
		<table class="table table-condensed">
		<thead style="background-color: blue; color:white">
			<tr>
				<th>ASSETS DEPRECIATION</th>
				<th></th>
				<th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php
				if($countdbquery == 1){
					$row = mysqli_fetch_assoc($dbquery);
					$num_of_years = $row['num_of_years'];

				}	
			?>
			<tr style="background-color: #E9ECEF">
			
				<td class="">Number of years</td>
				<td  class=""></td>
				<td align="right" class=""><?php echo $num_of_years; ?></td>
				
				
			</tr>
		</tbody>
		
		</table>
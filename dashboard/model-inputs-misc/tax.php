<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM tax WHERE id = '1'");
			$countdbquery = mysqli_num_rows($dbquery);
		?>
	<!--stop test -->
	
	
		<table class="table table-condensed">
		<thead style="background-color: blue; color:white">
			<tr>
				<th>TAX</th>
				<th></th>
				<th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php
				if($countdbquery == 1){
					$row = mysqli_fetch_assoc($dbquery);
					$anual_tax_rate = $row['anual_tax_rate'];

				}	
			?>
			<tr style="background-color: #E9ECEF">
			
				<td class="">Annual tax rate</td>
				<td class=""></td>
				<td align="right"class=""><?php echo $anual_tax_rate;?>%</td>
				
				
			</tr>
		</tbody>
		
		</table>
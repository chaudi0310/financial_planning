<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM inflation WHERE id = '1'");
			$countdbquery = mysqli_num_rows($dbquery);
			$row = mysqli_fetch_assoc($dbquery);
		?>
	<!--stop test -->
	
	
		<table class="table table-condensed">
		<thead style="background-color: gray; color:white">
			<tr>
				<th>INFLATION <?php if(!isset($_SESSION['readonly'])){ ?><button class="btn btn-warning update-inflation" type="button" data-inflation-rate="<?php echo $row['anual_inflation_rate']; ?>" data-toggle="modal" data-target="#updateInflation"><i class="fa fa-pencil"></i></button><?php } ?></th>
				<?php include_once 'modal/updateInflation.php'; ?>
				<th></th>
				<th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php
				if($countdbquery == 1){
					
					$anual_inflation_rate = $row['anual_inflation_rate'];

				}	
			?>
			<tr style="background-color: #E9ECEF">
			
				<td class="">Annual inflation rate</td>
				<td class=""></td>
				<td align="right"class=""><?php echo $anual_inflation_rate;?>%</td>
				
				
			</tr>
		</tbody>
		
		</table>
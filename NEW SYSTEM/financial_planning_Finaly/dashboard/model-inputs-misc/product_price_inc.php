<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM product_price_increase WHERE id = '1'");
			$countdbquery = mysqli_num_rows($dbquery);
			$row = mysqli_fetch_assoc($dbquery);
		?>
	<!--stop test -->
	
	
		<table class="table table-condensed">
		<thead style="background-color: gray; color:white">
			<tr>
				<th>PRODUCT PRICE INCREASE <?php if(!isset($_SESSION['readonly'])){ ?><button class="btn btn-warning update-pincrease" type="button" data-price-rate="<?php echo $row['anual_price_increase']; ?>" data-toggle="modal" data-target="#updatePincrease"><i class="fa fa-pencil"></i></button><?php } ?></th>
				<?php include_once 'modal/updatePincrease.php'; ?>
				<th></th>
				<th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php
				if($countdbquery == 1){
					
					$anual_price_increase = $row['anual_price_increase'];

				}	
			?>
			<tr style="background-color: #E9ECEF">
			
				<td class="">Annual Price Increase (%)</td>
				<td class=""></td>
				<td align="right"class=""><?php echo $anual_price_increase;?>%</td>
				
				
			</tr>
		</tbody>
		
		</table>
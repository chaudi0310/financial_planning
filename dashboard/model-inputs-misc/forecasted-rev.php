<!--test-->
			<?php 
			include '../connection/dbConfig.php';
			$dbquery = mysqli_query($db,"SELECT * FROM product ORDER by id ASC");
			$countdbquery = mysqli_num_rows($dbquery);
		?>
	<!--stop test -->
	
	<div class="container">
		<h3>Forecasted Revenue</h3>
		<table class="table table-condensed">
		<thead>
			<tr>
				<th>Product <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" title="Add Product"><i class="fa fa-plus"></i></button></th>
				<?php include_once 'modal/addmodal.php';?>
				<th>Units sold anually</th>
				<th>Price per unit</th>
				<th>Anual Revenue per product</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
				if($countdbquery > 0){
					while($row = mysqli_fetch_assoc($dbquery)){
						$pname = $row['name'];
						$pprice = $row['price'];
						$psanual = $row['sold_anual'];
						$anual_rev = $row['anual_rev'];
						 
						
					
			?>
			<tr>
			
				<td class=""><a href = "actions/delete.php?name=<?php echo $row['name'];?>"class="btn btn-danger"><i class="fa fa-trash"></i></a> <?php echo $pname; ?></td>
				<td class=""><?php echo $pprice; ?></td>
				<td class=""><?php echo $psanual; ?></td>
				<td class=""><?php echo $anual_rev; ?></td>
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
					Total of Forcasted Revenue
				</th>
				<th></th>
				<th></th>
				<th><?php if($countdbquery >0){ echo $fetchtotal['total_fr']; }?></th>
			</tr>
		</thead>
		
		</table>
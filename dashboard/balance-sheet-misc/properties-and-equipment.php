<!--test-->
		<?php 
			include '../connection/dbConfig.php';
			$building = mysqli_query($db, "SELECT * FROM properties_equipment WHERE id='1'");
			$cbuilding = mysqli_num_rows($building);
			if($cbuilding > 0){
				$fetchbuilding = mysqli_fetch_row($building);
				$building1 = $fetchbuilding[2];
				$building2 = $fetchbuilding[3];
				$building3 = $fetchbuilding[4];
				$building4 = $fetchbuilding[5];
				$building5 = $fetchbuilding[6];
			}
			$land = mysqli_query($db, "SELECT * FROM properties_equipment WHERE id='2'");
			$cland = mysqli_num_rows($land);
			if($cland > 0){
				$fetchland = mysqli_fetch_row($land);
				$land1 = $fetchland[2];
				$land2 = $fetchland[3];
				$land3 = $fetchland[4];
				$land4 = $fetchland[5];
				$land5 = $fetchland[6];
			}
			$ce = mysqli_query($db, "SELECT * FROM properties_equipment WHERE id='3'");
			$cce = mysqli_num_rows($ce);
			if($cce > 0){
				$fetchce = mysqli_fetch_row($ce);
				$ce1 = $fetchce[2];
				$ce2 = $fetchce[3];
				$ce3 = $fetchce[4];
				$ce4 = $fetchce[5];
				$ce5 = $fetchce[6];
			}
			$me = mysqli_query($db, "SELECT * FROM properties_equipment WHERE id='4'");
			$cme = mysqli_num_rows($me);
			if($cme > 0){
				$fetchme = mysqli_fetch_row($me);
				$me1 = $fetchme[2];
				$me2 = $fetchme[3];
				$me3 = $fetchme[4];
				$me4 = $fetchme[5];
				$me5 = $fetchme[6];
			}
			$lade = mysqli_query($db, "SELECT * FROM properties_equipment WHERE id='5'");
			$clade = mysqli_num_rows($lade);
			if($clade > 0){
				$fetchlade = mysqli_fetch_row($lade);
				$lade1 = $fetchlade[2];
				$lade2 = $fetchlade[3];
				$lade3 = $fetchlade[4];
				$lade4 = $fetchlade[5];
				$lade5 = $fetchlade[6];
			}
			
		?>
	<!--stop test -->
	
	
		
		<table class="table table-condensed">
		<thead>
			<tr style="background-color: gray; color: white; border-top: 5px solid black;">
				<th>Properties and Equipment</th>
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
				<td class=""><button type="button" class="btn btn-warning update-building" data-id="<?php echo $fetchbuilding['0'];?>" data-building="<?php echo $building1; ?>" data-toggle="modal" data-target="#updateBuilding"><i class="fa fa-pencil"></i></button> Buildings</td>
				<td class=""><?php echo $building1 ; ?></td>
				<td class=""><?php echo $building1 ; ?></td>
				<td class=""><?php echo $building2 ; ?></td>
				<td class=""><?php echo $building3 ; ?></td>
				<td class=""><?php echo $building4 ; ?></td>
				<td class=""><?php echo $building5 ; ?></td>
			</tr>
			
			<tr>
				<td class=""><button class="btn btn-warning update-land" data-id="<?php echo $fetchland['0'];?>" data-land="<?php echo $land1; ?>" data-toggle="modal" data-target="#updateLand"><i class="fa fa-pencil"></i></button> Land</td>
				<td class=""><?php echo $land1 ; ?></td>
				<td class=""><?php echo $land1 ; ?></td>
				<td class=""><?php echo $land2 ; ?></td>
				<td class=""><?php echo $land3 ; ?></td>
				<td class=""><?php echo $land4 ; ?></td>
				<td class=""><?php echo $land5 ; ?></td>
			</tr>
			<tr>
				<td class=""><button class="btn btn-warning update-ci" data-id="<?php echo $fetchce['0'];?>" data-ci="<?php echo $ce1; ?>" data-toggle="modal" data-target="#updateCapitalImprovements"><i class="fa fa-pencil"></i></button> Capital Improvements</td>
				<td class=""><?php echo $ce1 ; ?></td>
				<td class=""><?php echo $ce1 ; ?></td>
				<td class=""><?php echo $ce2 ; ?></td>
				<td class=""><?php echo $ce3 ; ?></td>
				<td class=""><?php echo $ce4 ; ?></td>
				<td class=""><?php echo $ce5 ; ?></td>
			</tr>
			<tr>
				<td class=""><button class="btn btn-warning update-me" data-id="<?php echo $fetchme['0'];?>" data-me="<?php echo $me1; ?>"data-toggle="modal" data-target="#updateMachinery"><i class="fa fa-pencil"></i></button> Machinery and Equipment</td>
				<td class=""><?php echo $me1; ?></td>
				<td class=""><?php echo $me1; ?></td>
				<td class=""><?php echo $me1; ?></td>
				<td class=""><?php echo $me1; ?></td>
				<td class=""><?php echo $me1; ?></td>
				<td class=""><?php echo $me1; ?></td>
			</tr>
			<tr>
				<td class=""><button class="btn btn-warning disabled" ><i class="fa fa-pencil"></i></button> Less Accumulated Depreciation Expense</td>
				<td class=""></td>
				<td class=""><?php echo $lade1 ; ?></td>
				<td class=""><?php echo $lade2 ; ?></td>
				<td class=""><?php echo $lade3 ; ?></td>
				<td class=""><?php echo $lade4 ; ?></td>
				<td class=""><?php echo $lade5 ; ?></td>
				<?php include_once 'modal/updatePropertiesEquipment.php'; ?>
			</tr>
			<?php 
			$pandeinitial = $building1+$land1+$ce1+$me1;
			$pande1 = $building1+$land1+$ce1+$me1-$lade1;
			$pande2 = $building2+$land2+$ce2+$me2-$lade2;
			$pande3 = $building3+$land3+$ce3+$me3-$lade3;
			$pande4 = $building4+$land4+$ce4+$me4-$lade4;
			$pande5 = $building5+$land5+$ce5+$me5-$lade5
			?>
			<tr style="background-color:gray">
				<td><strong>Total property and equipment</strong></td>
				<td><?php echo round($building1+$land1+$ce1+$me1,2) ?></td>
				<td><?php echo round($building1+$land1+$ce1+$me1-$lade1,2)?></td>
				<td><?php echo round($building2+$land2+$ce2+$me2-$lade2,2)?></td>
				<td><?php echo round($building3+$land3+$ce3+$me3-$lade3,2)?></td>
				<td><?php echo round($building4+$land4+$ce4+$me4-$lade4,2)?></td>
				<td><?php echo round($building5+$land5+$ce5+$me5-$lade5,2)?></td>
			</tr>
		</tbody>
		
		</table>
		
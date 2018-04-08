<div id="historyModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Recent Activity</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					
					<div class="list-group list-group-flush small" style="width:100%">
					<?php
					include '../connection/dbConfig.php';
					$history = mysqli_query($db, "SELECT * FROM history ORDER by id DESC LIMIT 10");
					$counthistory = mysqli_num_rows($history);
					if($counthistory > 0){
						while($row = mysqli_fetch_assoc($history)){
						$todaysdate = date('m-d-Y');
						$text = $row['text'];
						$date = $row['date'];
						$time = $row['time'];
						if($todaysdate == $date){
							$datevalue = 'Today';
						} else {
							$datevalue = $date;
						}
					?>
						  <a class="list-group-item list-group-item-action">
							<div class="media">
							  <div class="media-body">
								<strong>Status Update:</strong> <?php echo $text; ?>
								<div class="text-muted smaller"><?php echo $datevalue; ?> at <?php echo $time; ?></div>
							  </div>
							</div>
						  </a>
						  <?php } } ?>
						<a class="list-group-item list-group-item-action" href="history.php">View all activity...</a>
					</div>
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="maintenanceModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Update annual maintenance, repair and  overhaul</h4>
			</div>
			<div class="modal-body">
				<div class="row" >
				<form action="actions/updateMaintenance.php" method="post">
					<div class="col-md-4" style="margin-top:5px;">
						Factor (%) on capital equipment
					</div>
					<div class="col-md-8">
						<input class="form-control" id="maintenance" type="number" name="maintenance">
					</div>
					<br><br>
					
					
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success"><i class="fa fa-refresh"></i> Update</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>
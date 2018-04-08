<div id="passModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Change Password</h4>
			</div>
			<form action="actions/changePassword.php" method="post">
			<div class="modal-body">
				<div class="row">
				<br><br>
				<div class="col-md-4" style="margin-top:5px;">
					Old Password
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="opassword">
				</div>
				<br><br>
				<div class="col-md-4" style="margin-top:5px;">
					New Password
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="npassword">
				</div>
				<br><br>
				<div class="col-md-4" style="margin-top:5px;">
					Confirm New Password
				</div>
				<div class="col-md-8">
					<input type="password" class="form-control" name="cnpassword">
				</div>
				
					
					
				</div>
				<div class="modal-footer" >
				<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
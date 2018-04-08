<div id="userModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Change Username</h4>
			</div>
			<form action="actions/changeUsername.php" method="post">
			<div class="modal-body">
				<div class="row">
				<br><br>
				<div class="col-md-4" style="margin-top:5px;">
					New Username
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="nusername">
				</div>
				<br><br>
				<div class="col-md-4" style="margin-top:5px;">
					Confirm New Username
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="cnusername">
				</div>
				<br><br>
				<div class="col-md-4" style="margin-top:5px;">
					Password
				</div>
				<div class="col-md-8">
					<input type="password" class="form-control" name="password">
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
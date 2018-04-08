<div id="updateUnexpected" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Unexpected Expenses</h4>
			</div>
			<div class="modal-body">
				<div class="row" >
				<form action="actions/updateRecurring.php" method="post">
					<div class="col-md-4" style="margin-top:5px;">
						Year 1
					</div>
					<input type="hidden" name="id" id="id">
					<div class="col-md-8">
						<input class="form-control" id="uey1" type="text" name="uey1">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 2
					</div>
					<div class="col-md-8">
						<input class="form-control" id="uey2" type="text" name="uey2">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 3
					</div>
					<div class="col-md-8">
						<input class="form-control" id="uey3" type="text" name="uey3">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 4
					</div>
					<div class="col-md-8">
						<input class="form-control" id="uey4" type="text" name="uey4">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 5
					</div>
					<div class="col-md-8">
						<input class="form-control" id="uey5" type="text" name="uey5">
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
<!--other expenses -->
<div id="updateOther" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Other Expenses</h4>
			</div>
			<div class="modal-body">
				<div class="row" >
				<form action="actions/updateRecurring.php" method="post">
					<input type="hidden" name="id" id="id">
					<div class="col-md-4" style="margin-top:5px;">
						Year 1
					</div>
					<div class="col-md-8">
						<input class="form-control" id="oey1" type="text" name="oey1">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 2
					</div>
					<div class="col-md-8">
						<input class="form-control" id="oey2" type="text" name="oey2">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 3
					</div>
					<div class="col-md-8">
						<input class="form-control" id="oey3" type="text" name="oey3">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 4
					</div>
					<div class="col-md-8">
						<input class="form-control" id="oey4" type="text" name="oey4">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 5
					</div>
					<div class="col-md-8">
						<input class="form-control" id="oey5" type="text" name="oey5">
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
<div id="addOtherLiabilities" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Other Liabilities</h4>
			</div>
			<div class="modal-body">
				<div class="row" >
				<form action="actions/addOtherLiabilities.php" method="post">
					<div class="col-md-4" style="margin-top:5px;">
						Liability name
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="liability" placeholder="">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Value
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="value" placeholder="">
					</div>
					
					
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>
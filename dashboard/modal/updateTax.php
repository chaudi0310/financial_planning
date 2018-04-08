<div id="taxModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Update Tax</h4>
			</div>
			<div class="modal-body">
				<div class="row" >
				<form action="actions/updateTax.php" method="post">
					<div class="col-md-4" style="margin-top:5px;">
						Anual tax rate
					</div>
					<div class="col-md-8">
						<input class="form-control" id="taxrate" type="number" name="tax_rate">
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
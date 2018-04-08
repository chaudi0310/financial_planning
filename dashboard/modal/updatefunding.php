<div id="updateFunding" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Product</h4>
			</div>
			<div class="modal-body">
				<div class="row" >
				<form action="actions/updateFundings.php" method="post">
					<div class="col-md-4" style="margin-top:5px;">
						Loan Amount
					</div>
					<div class="col-md-8">
						<input class="form-control" id="loan-amount" type="text" name="loan_amount"">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Anual Interest Rate (%)
					</div>
					<div class="col-md-8">
						<input class="form-control" id="anual-interest" type="text" name="anual_interest_rate" >
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
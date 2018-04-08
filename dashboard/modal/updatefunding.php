<div id="updateFunding" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Update Funding</h4>
			</div>
			<div class="modal-body">

				<form action="actions/updateFundings.php" method="post" class="needs-validation" novalidate id="form_funding">
						<div class="form-group row">
							<label class="col-md-4">Loan Amount</label>
							<div class="col-md-8">
								<input class="form-control" id="loan-amount" type="number" name="loan_amount" min="1">
								<div class="invalid-feedback">
									Input should be a number an greater than 0
								</div>
							</div>
						</div>
					<div class="form-group row">
						<label class="col-md-4">Anual Interest Rate (%)</label>
						<div class="col-md-8">
							<input class="form-control" id="anual-interest" type="number" name="anual_interest_rate" min="1">
							<div class="invalid-feedback">
								Input should be a number an greater than 0
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Term of Loan (months)</label>
						<div class="col-md-8">
							<input class="form-control" id="loan_term" type="number" name="loan_term" min="1">
							<div class="invalid-feedback">
								Input should be a number an greater than 0
							</div>
						</div>
					</div>

			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success" id="submit"><i class="fa fa-refresh"></i> Update</button>
				<button type="submit" class="btn btn-success d-none" id="confirmSubmit"><i class="fa fa-refresh"></i> Update</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>

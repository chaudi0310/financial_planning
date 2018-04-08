<div id="otherexpModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Other Expense</h4>
			</div>
			<div class="modal-body">
				<div class="row" >
				<form action="actions/addOtherExpense.php" method="post">
					<div class="col-md-4" style="margin-top:5px;">
						Expense
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="expense" >
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 1
					</div>
					<div class="col-md-8">
						<input class="form-control" type="number" name="y1" >
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 2
					</div>
					<div class="col-md-8">
						<input class="form-control" type="number" name="y2" >
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 3
					</div>
					<div class="col-md-8">
						<input class="form-control" type="number" name="y3" >
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 4
					</div>
					<div class="col-md-8">
						<input class="form-control" type="number" name="y4" >
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Year 5
					</div>
					<div class="col-md-8">
						<input class="form-control" type="number" name="y5" >
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
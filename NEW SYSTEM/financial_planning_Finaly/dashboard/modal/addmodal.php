<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Product</h4>
			</div>
			<div class="modal-body">
				<div class="row" >
				<form action="actions/addProduct.php" method="post">
					<div class="col-md-4" style="margin-top:5px;">
						Product Name
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="pname" placeholder="Enter Product Name..">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Product Price
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="pprice" placeholder="Enter Product Price..">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Sold Annually
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="pannualsold" placeholder="Enter the amount of product..">
					</div>
					<br><br>
					<div class="col-md-4" style="margin-top:5px;">
						Gross Margin
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="pgrossmargin" placeholder="Enter Gross Margin..">
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
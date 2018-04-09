<div id="restoreDbModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Restore Database</h4>
			</div>
			<div class="modal-body">
        <form action="../connection/dbImport.php" enctype="multipart/form-data" method="POST">
          <div class="form-group row">
						<label class="col-md-4">File To Import</label>
						<div class="col-md-8">
							<input type="file" name="file" class="form-control"/>
						</div>
					</div>
          <div class="form-group row">
            <div class="col-md-12">
              <button type="submit" name="submit" class="btn btn-success float-right">Start Import</button>
            </div>
          </div>
        </form>
			</div>
		</div>
	</div>
</div>

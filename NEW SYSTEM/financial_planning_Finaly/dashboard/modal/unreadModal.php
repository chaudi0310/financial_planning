<div class="modal fade" id="readModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Turn of read-only mode?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <form action="actions/proceedUnread.php" method="post">
			<div class="col-md-12" align="center"> 
				Please enter your password before turning off read-only mode
			</div>
			<div class="col-md-12" align="center"> 
				<input class="form-control" type="password" name="password">
			</div>
		  
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-danger" value="Turn off">
          </div>
		  </form>
        </div>
      </div>
    </div>
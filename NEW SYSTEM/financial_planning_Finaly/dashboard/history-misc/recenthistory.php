<?php
include '../connection/dbConfig.php';
$gethistory = mysqli_query($db, "SELECT * FROM history ORDER by id DESC");
$countgethistory = mysqli_num_rows($gethistory);

?>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-history"></i> Recent Activity</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Activity</th>
				  <th>Date & Time </th>
                  <th>Action</th>
				  
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>Activity</th>
				 
				 <th>Date & Time </th>
                 <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
			  <?php
				if($countgethistory > 0){
					while($row = mysqli_fetch_assoc($gethistory)){
			  ?>
                <tr>
                  <td><?php echo $row['text']; ?></td>
				  <td><?php echo $row['date']; ?> <?php echo $row['time']; ?></td>
                  <td><a class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php } } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>